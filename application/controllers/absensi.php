<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * restserver 
 * absensi.php
 * Dec 3, 2016 
 */
class Absensi extends CI_Controller{
    
    public function __construct() {
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('absensi_model');
                
    }
    
    public function index(){
        $this->load->view('menu');
    }
    public function data_absen() {
        $rows= $this->absensi_model->get_data();
        $total=  count($rows);
        $result['rows']=$rows;
        $result['total']=$total;
        echo json_encode($result);
        
    }
        
      
}