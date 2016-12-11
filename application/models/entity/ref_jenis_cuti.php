<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ref_jenis_cuti.php
 * Dec 12, 2016 
 */



if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class ref_jenis_cuti extends LWS_model {

    public function __construct() {
        parent::__construct("ir_cuti");
        $this->primary_key = "id_cuti";
    }

    protected $attribute_labels = array(
        "id_cuti" => array("id_cuti", ""),
        "nama_cuti" => array("nama_cuti", ""),
        
        "created_date" => array("created_date", ""),
        "created_by" => array("created_by", ""),
        "modified_date" => array("modified_date", ""),
        "modified_by" => array("modified_by", ""),
        
    );
    protected $rules = array(
        array("id_cuti", ""),
        array("nama_cuti", ""),
       
        array("created_date", ""),
        array("created_by", ""),
        array("modified_date", ""),
        array("modified_by", ""),
        
        );
    
//    protected $related_tables = array(
//        "ir_mesin_info" => array(
//            "fkey" => "id_mesin",
//            "columns" => array(
//                "lokasi_mesin",
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
