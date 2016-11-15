<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * ICT DEVELOPER
 * @autor Satria Persada 
 * 2016bkpp_mlebungantor 
 * daemon_controller.php
 * Nov 16, 2016 
 */

class DAEMON_Controller extends CI_Controller {
	function __construct($config)
	{
		parent::__construct();
		$this->init($config);
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		define('LOG_IN_DB', false);
	}

	private function init($config){
		
		
		$this->service_name	=	$config['name'];
		define('SERVICE_NAME', $this->service_name);
		if(defined('CMD') AND (CMD == 1) ){
			$this->as_service = true;
			$this->last_db_log = 0;
			$this->verbose	=(isset($config['verbose']))?$config['verbose']:false;
			if(is_array($_SERVER['argv']) AND in_array('--verbose', $_SERVER['argv']) ) $this->verbose = true;
			echo '['.gmdate('Y-m-d H:i:s').'] '.SERVICE_NAME.' >> Service Started in '.ENVIRONMENT.' w/ PID: '.getmypid()."\n";
			$this->logit_init(true);
			
		}else{
			if(ENVIRONMENT == 'production'){
				$this->logit('SERVICE', 'WARNING: Access DENIED for IP Address: '.$_SERVER['REMOTE_ADDR'].' in PRODUCTION');
				die('Not allowed in PRODUCTION');
			}
			$this->as_service = false;
			$this->verbose	  = true;
			echo SERVICE_NAME.' Service Started in '.ENVIRONMENT.' w/ PID: '.getmypid();
			$this->logit('SERVICE', 'WARNING: WEB Access granted in ['.ENVIRONMENT.'] enviroment for IP Address: '.$_SERVER['REMOTE_ADDR'].', access will be denied in PRODUCTION');
		}
		
		$this->logit('SERVICE', '-------------------------------------------------');
		$this->logit('SERVICE', 'Running Code: '.BUILD);
		$this->logit('SERVICE', 'Running in the '.strtoupper(ENVIRONMENT).' environment');
		$this->logit('SERVICE', '-------------------------------------------------');
                
			set_time_limit(0);
			ini_set('memory_limit', ( isset($config['memory']) ? $config['memory'] : '256M' ));
			$this->debug	=	(isset($config['debug']))?$config['debug']:false;
                        
			if(isset($config['models']) AND count($config['models']) > 0){
				foreach($config['models'] as $mod){
					
					$this->load->model($mod);
					if($this->as_service){
					}
				}
			}
			if($this->as_service){
                                $timeout  =  (isset($config['sql_timeout']) AND $config['sql_timeout'] AND is_numeric($config['sql_timeout']) )?$config['sql_timeout']:1200;
				
				$this->db->query("SET SESSION wait_timeout = ".intval($timeout));
				$this->db->save_queries = false;
			}
		
			if(isset($config['libraries']) AND count($config['libraries']) > 0){
				foreach($config['libraries'] as $lib){
					$this->load->library($lib);
				}
			}
		
	}
	
	public function continue_loop(){
		
		global $servicepleasestop;
		
		if(isset($servicepleasestop) AND $servicepleasestop){
			
			$this->logit('PROC', 'Shutting Down from POSIX command...');
			if($this->as_service){
				echo '['.gmdate('Y-m-d H:i:s').'] '.SERVICE_NAME.' >> PID: '.getmypid().' Shutting Down from POSIX command.'."\n";
			}
			
			if( LOG_IN_DB ){
				
				// Log to DB
				$this->db->where('server_id', SERVER_ID);
				$this->db->where('service', SERVICE_NAME);
				$this->db->update('service_daemons', array(
										'status'       => 0,
										'date_touch'   => time(),
										'date_stopped' => time()
									   ));
				
			}
			
			return false;

		}else{
			
			if($this->as_service){
			    
				if(!touch(SERVER_LOG.'/'.SERVICE_NAME.'/'.IDEN.'_status')){
					echo '['.gmdate('Y-m-d H:i:s').'] '.SERVICE_NAME.' >> Cant touch status file!!!!!!'."\n";
				}
				$this->logit_init();	
				
				if( LOG_IN_DB AND ( $this->last_db_log < ( time() - (60 * 5) ) ) ){
					
					$this->db->where('server_id', SERVER_ID);
					$this->db->where('service', SERVICE_NAME);
					$this->db->update('service_daemons', array('status' => 2, 'date_touch' => time()) );
						
				}
				
			}
			
			return true;
		}
		
		if(ENVIRONMENT != 'production'){
		    $this->logit('DEBUG', 'Mem usage:'.memory_get_usage(true));
		}
		
		
	}

	public function logit_init($init = false){
		if($init OR ($this->day != gmdate('Ymd')) ){
			
			$this->day	=	gmdate('Ymd');
			$dir = SERVER_LOG.'/'.SERVICE_NAME.'/logs/'. $this->day.'/';
			if(!is_dir($dir)){
				mkdir($dir, 0777, true );
				
				sleep(1);
				
				$wasdir = false;
			}else{
				$wasdir = true;
			}
			
			if(isset($this->logfile)){fclose($this->logfile);}
			$this->logfile = fopen($dir.IDEN.'_log.txt', 'a');
			
			
			if(!$wasdir){
                            
				$this->logit('SERVICE', 'New Folder Created.('.$dir.')');
				
				if( file_exists( SERVER_LOG.'/'.SERVICE_NAME.'/logs/current' ) ){
					$link_command	=	'unlink '.SERVER_LOG.'/'.SERVICE_NAME.'/logs/current';
					exec($link_command, $link_output, $link_result);
				}
				
				$link_command	=	'ln -s '.SERVER_LOG.'/'.SERVICE_NAME.'/logs/'. $this->day.'/'.' '.SERVER_LOG.'/'.SERVICE_NAME.'/logs/current';
				exec($link_command, $link_output, $link_result);
				
				
				$this->logit('SERVICE', '+++++++++++++++++++++++++++++++++++++++++++++++++');
				if($link_output){
					$this->logit('SERVICE', 'Relinked to current directory ('.$dir.')');
				}else{
					$this->logit('SERVICE', 'FAILED to relink to current directory ('.$dir.')');
				}
				
				$this->logit('SERVICE', 'Code: '.BUILD.' in '.strtoupper(ENVIRONMENT).' ENV');
				$this->logit('SERVICE', '+++++++++++++++++++++++++++++++++++++++++++++++++');
				
			}
			
		}
		
		if($init){
			
			$pidfile = fopen(SERVER_LOG.'/'.SERVICE_NAME.'/'.IDEN.'_pid', 'w');
			fwrite($pidfile, getmypid());
			fclose($pidfile);

			if( LOG_IN_DB ) {

				$this->db->where('server_id', SERVER_ID);
				$this->db->where('service', SERVICE_NAME);
				$this->db->from('service_daemons');
				$q	=	$this->db->get();
				if($q->num_rows() > 1 ){ // Hmm we have a few rows, thats not right
					
					$this->db->where('server_id', SERVER_ID);
					$this->db->where('service', SERVICE_NAME);
					$this->db->delete(array('service_daemons'));

					$args = array(
									'server_id'    => SERVER_ID,
									'server_name'  => IDEN,
									'service'      => SERVICE_NAME,
									'status'       => 1,
									'date_touch'   => time(),
									'date_started' => time(),
									'date_stopped' => 0
								);
					
					$this->db->insert('service_daemons', $args);
					
				}elseif($q->num_rows() == 1 ){ 

					$args = array(
									'status'       => 1,
									'date_touch'   => time(),
									'date_started' => time(),
									'date_stopped' => 0
								);
					
					// Update 
					$this->db->where('server_id', SERVER_ID);
					$this->db->where('service', SERVICE_NAME);
					$this->db->update('service_daemons', $args)
					
				}else{	

					$args = array(
									'server_id'    => SERVER_ID,
									'server_name'  => IDEN,
									'service'      => SERVICE_NAME,
									'status'       => 1,
									'date_touch'   => time(),
									'date_started' => time(),
									'date_stopped' => 0
								);
					
					$this->db->insert('service_daemons', $args);
					
				}
			}
			
		}
		
	}
	
	public function logit($who, $string){
		
		if($this->as_service){
			fwrite($this->logfile, '['.gmdate('Y-m-d H:i:s').'] '.$who.' >> '.$string."\n");
			
			if($this->verbose){
				echo '['.gmdate('H:i:s').'] '.$who.' >> '.$string.chr(10);
			}
		}else{
			
			echo $who.' >> '.$string.'<br>';
		}
		
	}
	
}