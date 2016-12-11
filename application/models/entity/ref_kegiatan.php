<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ref_kegiatan.php
 * Dec 4, 2016 
 */


if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_kegiatan extends LWS_model {

    public function __construct() {
        parent::__construct("ir_absensi_mobile");
        $this->primary_key = "id_kegiatan";
    }

    protected $attribute_labels = array(
        "id_kegiatan" => array("id_kegiatan", ""),
        "nama_kegiatan" => array("nama_kegiatan", ""),
        "tgl_kegiatan" => array("tgl_kegiatan", ""),
        "id_mesin" => array("id_mesin", ""),
        "created_date" => array("created_date", ""),
        "created_by" => array("created_by", ""),
        "modified_date" => array("modified_date", ""),
        "modified_by" => array("modified_by", ""),
        
    );
    protected $rules = array(
        array("id_kegiatan", ""),
        array("nama_kegiatan", ""),
        array("tgl_kegiatan", ""),
        array("id_mesin", ""),
        array("created_date", ""),
        array("created_by", ""),
        array("modified_date", ""),
        array("modified_by", ""),
        
        );
    
    protected $related_tables = array(
        "ir_mesin_info" => array(
            "fkey" => "id_mesin",
            "columns" => array(
                "lokasi_mesin",
                
            ),
            "referenced" => "INNER"
        ),
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
    );
    protected $attribute_types = array();

}
