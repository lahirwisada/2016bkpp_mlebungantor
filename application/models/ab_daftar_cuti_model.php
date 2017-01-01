<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_daftar_cuti_model.php
 * Dec 12, 2016 
 */




include_once "entity/ref_daftar_cuti.php";
class Ab_daftar_cuti_model extends ref_daftar_cuti {
//    protected  $using_insert_and_update_properties =FALSE;
            function __construct(){
        parent::__construct();
    }
//    public function all($force_limit = FALSE, $force_offset = FALSE) {
//        return parent::get_all(array(
//                    "nama_cuti",
//                    "tgl_cuti",
//                    "status_approval",
//                    ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
//    }
    public function allparent($id_parent = FALSE, $force_limit = FALSE, $force_offset = FALSE) {

        $this->db->where($this->table_name . ".id_skpd = '" . $id_parent . "'");

        return parent::get_all($this->searchable_fields, FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    public function all($id_peg = FALSE, $force_limit = FALSE, $force_offset = FALSE) {

        $this->db->where($this->table_name . ".id_peg = '" . $id_peg . "'");

        return parent::get_all($this->searchable_fields, FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    public function get_detail_by_id($id_parent= FALSE){
        if ($id_parent) {
            return $this->get_detail($this->table_name . ".id_skpd = '" . $id_parent . "'");
        }
        return FALSE;
    }
    
    
    
}