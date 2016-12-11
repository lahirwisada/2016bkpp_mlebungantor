<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * finger_kegiatan.php
 * Dec 11, 2016 
 */

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_finger_kegiatan extends LWS_model {

    public function __construct() {
        parent::__construct("ir_list_peserta_mobile");
        $this->primary_key = "id_list";
    }

    protected $attribute_labels = array(
        "id_list" => array("id_list", ""),
        "id_kegiatan" => array("id_kegiatan", ""),
        "id_peg" => array("id_peg", ""),
        "created_date" => array("created_date", ""),
        "created_by" => array("created_by", ""),
        "modified_date" => array("modified_date", ""),
        "modified_by" => array("modified_by", ""),
        
    );
    protected $rules = array(
        array("id_list", ""),
        array("id_kegiatan", ""),
        array("id_peg", ""),
        array("created_date", ""),
        array("created_by", ""),
        array("update_date", ""),
        array("update_by", ""),
       
        );
    
    protected $related_tables = array(
        "ir_absensi_mobile" => array(
            "fkey" => "id_kegiatan",
            "columns" => array(
                "nama_kegiatan",
                
            ),
            "referenced" => "INNER"
        ),
        "ir_list_pegawai" => array(
            "fkey" => "id_peg",
            "columns" => array(
                "nama_peg",
                
            ),
            "referenced" => "INNER"
        ),
//        "ir_list_pegawai" => array(
//            "fkey" => "id_peg",
//            "columns" => array(
//                "nama_peg",
//                
//            ),
//            "referenced" => "INNER"
//        ),
        
    );
    protected $attribute_types = array();

}
