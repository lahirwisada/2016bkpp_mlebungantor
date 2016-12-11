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
                parent::__construct('Absensi','Daftar Absen');
               
                
    }
    
    public function index(){
       parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }
    
        
      
}