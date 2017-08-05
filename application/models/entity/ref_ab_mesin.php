<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ref_ab_mesin.php
 * Dec 4, 2016 
 */

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_ab_mesin extends LWS_model {

    public function __construct() {
        parent::__construct("ir_mesin_info");
        $this->primary_key = "id_mesin";
    }

    protected $attribute_labels = array(
        "id_mesin" => array("id_mesin", ""),
        "lokasi_mesin" => array("lokasi_mesin", ""),
        "ip_mesin" => array("ip_mesin", ""),
//        "created_date" => array("created_date", ""),
//        "created_by" => array("created_by", ""),
//        "modified_date" => array("modified_date", ""),
//        "modified_by" => array("modified_by", ""),
        
    );
    protected $rules = array(
        array("id_mesin", ""),
        array("lokasi_mesin", ""),
        array("ip_mesin", ""),
//        array("created_date", ""),
//        array("created_by", ""),
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
