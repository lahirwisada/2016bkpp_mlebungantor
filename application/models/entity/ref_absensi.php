<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_absensi extends LWS_model {

    public function __construct() {
        parent::__construct("ir_attendance");
        $this->primary_key = "id_peg";
    }

    protected $attribute_labels = array(
        "id_peg" => array("id_peg", ""),
        "date_attend" => array("date_attend", ""),
        "created_date" => array("created_date", ""),
        "created_by" => array("created_by", ""),
        "modified_date" => array("modified_date", ""),
        "modified_by" => array("modified_by", ""),
        "id_status" => array("id_status", ""),
        "verify" => array("verify", ""),
        "id" => array("id", ""),
        "id_mesin" => array("id_mesin", ""),
        "approval" => array("approval", ""),
    );
    protected $rules = array(
        array("id_peg", ""),
        array("date_attend", ""),
        array("created_date", ""),
        array("created_by", ""),
        array("update_date", ""),
        array("update_by", ""),
        array("id_status", ""),
        array("verify", ""),
        array("id", ""),
        array("id_mesin", ""),
        array("approval", ""),
        );
    
    protected $related_tables = array(
        "ir_status_absen" => array(
            "fkey" => "id_status",
            "columns" => array(
                "nama_status",
                
            ),
            "referenced" => "INNER"
        ),
        "ir_mesin_info" => array(
            "fkey" => "id_mesin",
            "columns" => array(
                "lokasi_mesin",
                
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
        
    );
    protected $attribute_types = array();

}
