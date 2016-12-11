<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_mesin_model.php
 * Dec 4, 2016 
 */

include_once "entity/ref_ab_mesin.php";
class ab_mesin_model extends ref_ab_mesin {
    protected  $using_insert_and_update_properties =TRUE;
            function __construct(){
        parent::__construct();
    }
    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all('', FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    
    public function get_like($keyword=FALSE){
        
//        $result = FALSE;
        if($keyword){
            $this->db->order_by("id_mesin", "asc");
            $this->db->where(" lower(".$this->table_name.".lokasi_mesin) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".lokasi_mesin) LIKE lower('%".$keyword."%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
        
    }
}