<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_jenis_cuti_model.php
 * Dec 12, 2016 
 */




include_once "entity/ref_jenis_cuti.php";
class Ab_jenis_cuti_model extends ref_jenis_cuti {
//    protected  $using_insert_and_update_properties =FALSE;
            function __construct(){
        parent::__construct();
    }
    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "nama_cuti",
                    ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    public function get_like($keyword=FALSE){
        
//        $result = FALSE;
        if($keyword){
            $this->db->order_by("id_cuti", "asc");
            $this->db->where(" lower(".$this->table_name.".nama_cuti) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".nama_cuti) LIKE lower('%".$keyword."%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
        
    }
    
    
    
}