<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ref_daftar_cuti.php
 * Dec 12, 2016 
 */



if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class ref_daftar_cuti extends LWS_model {

    public function __construct() {
        parent::__construct("ir_daftar_cuti");
        $this->primary_key = "id_list";
    }

    protected $attribute_labels = array(
        "id_list" => array("id_list", ""),
        "id_peg" => array("id_peg", ""),
        "id_cuti" => array("id_cuti", ""),
        "tgl_cuti" => array("tgl_cuti", ""),
        "lama_cuti" => array("lama_cuti", ""),
        "status_approval" => array("status_approval", ""),
        "created_date" => array("created_date", ""),
        "created_by" => array("created_by", ""),
        "modified_date" => array("modified_date", ""),
        "modified_by" => array("modified_by", ""),
        "id_skpd" => array("id_skpd", ""),
        
    );
    protected $rules = array(
        array("id_list", ""),
        array("id_peg", ""),
        array("id_cuti", ""),
        array("tgl_cuti", ""),
        array("lama_cuti", ""),
        array("status_approval", ""),
        array("created_date", ""),
        array("created_by", ""),
        array("modified_date", ""),
        array("modified_by", ""),
        array("id_skpd", ""),
        
        );
    
    protected $related_tables = array(
        "ir_cuti" => array(
            "fkey" => "id_cuti",
            "columns" => array(
                "nama_cuti",
                
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
//        "ref_pegawai" => array(
//            "fkey" => array("modified_by", "id_pegawai"), 
//            "columns" => array(
//                "nama_depan",
//                
//            ),
//            "referenced" => "INNER"
//        ),
        
    );
    protected $attribute_types = array();

}
