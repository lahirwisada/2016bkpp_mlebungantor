<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_pegawai_model.php
 * Dec 11, 2016 
 */



include_once "entity/ref_ab_pegawai.php";
class ab_pegawai_model extends ref_ab_pegawai {
            function __construct(){
        parent::__construct();
    }
    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "nama_peg",
                    ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    
    public function get_like($keyword=FALSE){
        
//        $result = FALSE;
        if($keyword){
            $this->db->order_by("id_peg", "asc");
            $this->db->where(" lower(".$this->table_name.".nama_peg) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".nama_peg) LIKE lower('%".$keyword."%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
        
    }
}