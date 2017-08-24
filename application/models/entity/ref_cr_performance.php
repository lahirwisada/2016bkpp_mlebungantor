<?php

/*
* 2016bkpp_mlebungantor ;
* ref_cr_performance.php ;
* Satria Persada <triasada@yahoo.com> ;
* Aug 24, 2017;
* 10:45:20 PM;
* Jakarta International Container Terminal (JICT);
*/

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_cr_performance extends LWS_model {

    public function __construct() {
        parent::__construct("ref_setting_perfomance");
        $this->primary_key = "performance_id";
    }

    protected $attribute_labels = array(
        "performance_id" => array("performance_id", ""),
        "performance_name" => array("performance_name", ""),
        "performance_start" => array("performance_start", ""),
        "performance_subtractor" => array("performance_subtractor", ""),
        "performance_limit_warning" => array("performance_limit_warning", ""),
//        "modified_date" => array("modified_date", ""),
//        "modified_by" => array("modified_by", ""),
        
    );
    protected $rules = array(
        array("performance_id", ""),
        array("performance_name", ""),
        array("performance_start", ""),
        array("performance_subtractor", ""),
        array("performance_limit_warning", ""),
//        array("modified_date", ""),
//        array("modified_by", ""),
        
        );
    
//    protected $related_tables = array(
//        "ir_status_absen" => array(
//            "fkey" => "id_status",
//            "columns" => array(
//                "nama_status",
//                
//            ),
//            "referenced" => "INNER"
//        ),
//        "ir_mesin_info" => array(
//            "fkey" => "id_mesin",
//            "columns" => array(
//                "lokasi_mesin",
//                
//            ),
//            "referenced" => "INNER"
//        ),
//        "ir_list_pegawai" => array(
//            "fkey" => "id_peg",
//            "columns" => array(
//                "nama_peg",
//                
//            ),
//            "referenced" => "INNER"
//        ),
//        
//    );
    protected $attribute_types = array();

}
