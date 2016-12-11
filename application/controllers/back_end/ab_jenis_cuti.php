<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_jenis_cuti.php
 * Dec 12, 2016 
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class ab_jenis_cuti extends Back_end{
    public $model ='ab_jenis_cuti_model';
    
    public function __construct() {
                parent::__construct('Cuti','Jenis Cuti');
               
                
    }
    
    public function index(){
       parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }
    public function detail($id = FALSE) {
        parent::detail($id, array(
           
            "nama_cuti",
           
            
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Tambah Jenis Cuti ' . $this->_header_title
        ));
        
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $mesin_found = $this->kegiatan_model->get_like($keyword);
        
        $this->to_json($mesin_found);
    }
    
        
      
}