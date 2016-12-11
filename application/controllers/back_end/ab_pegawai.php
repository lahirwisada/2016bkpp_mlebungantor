<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_pegawai.php
 * Dec 11, 2016 
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class ab_pegawai extends Back_end{
    public $model ='ab_pegawai_model';
    
    public function __construct() {
                parent::__construct('Pegawai','Daftar Pegawai');
               
                
    }
    
    public function index(){
       parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }
    public function detail($id = FALSE) {
        parent::detail($id, array(
            "id_peg",
            "nama_peg",
            
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Tambah ' . $this->_header_title
        ));
        /*$this->set("additional_js", array(
            "back_end/" . $this->_name . "/js/detail_js",
            
        ));*/
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $peg_found = $this->ab_pegawai_model->get_like($keyword);
        
        $this->to_json($peg_found);
    }
    
        
      
}