<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * absensi_parent.php
 * Dec 4, 2016 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_parent extends Back_end{
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