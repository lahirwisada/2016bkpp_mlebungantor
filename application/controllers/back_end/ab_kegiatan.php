<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * kegiatan.php
 * Dec 4, 2016 
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class ab_kegiatan extends Back_end{
    public $model ='ab_kegiatan_model';
    
    public function __construct() {
                parent::__construct('Kegiatan','Daftar Kegiatan');
               
                
    }
    
    public function index(){
       parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }
    public function detail($id = FALSE) {
        parent::detail($id, array(
            "nama_kegiatan",
            "tgl_kegiatan",
            "id_mesin",
            
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Tambah Kegiatan ' . $this->_header_title
        ));
        $this->set("additional_js", array(
            "back_end/".$this->_name."/js/detail_isian_js",
        ));
        $this->add_cssfiles(array("plugins/select2/select2.min.css"));
        $this->add_jsfiles(array("plugins/select2/select2.full.min.js"));
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $mesin_found = $this->kegiatan_model->get_like($keyword);
        
        $this->to_json($mesin_found);
    }
    
        
      
}