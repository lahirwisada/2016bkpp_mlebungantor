<?php

/*
* 2016bkpp_mlebungantor ;
* cref_performance.php ;
* Satria Persada <triasada@yahoo.com> ;
* Aug 24, 2017;
* 10:36:46 PM;
* Jakarta International Container Terminal (JICT);
*/
defined('BASEPATH') OR exit('No direct script access allowed');


class Cref_performance extends Back_end{
    public $model ='cr_performance_model';
    
    public function __construct() {
                parent::__construct('Setting Performance','Setting Performance');
               
                
    }
    
    public function index(){
       parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }
    public function detail($id = FALSE) {
        parent::detail($id, array(
            "performance_name",
            "performance_start",
            "performance_subtractor",
            "performance_limit_warning",
            
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

        $mesin_found = $this->ab_mesin_model->get_like($keyword);
        
        $this->to_json($mesin_found);
    }
    
        
      
}