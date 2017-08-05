<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * restserver 
 * absensi.php
 * Dec 3, 2016 
 */
class absensi extends Back_end{
    public $model ='absensi_model';
    
    public function __construct() {
                parent::__construct('Absensi','Daftar Absensi');
               
                
    }
    
    public function index(){
       parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }
    public function approve($param) {
        $approve= $this->absensi_model->approve($param);
        $this->to_json($approve);
    }
    public function reject($param) {
        $approve= $this->absensi_model->reject($param);
        $this->to_json($approve);
    }
    
    
        
      
}