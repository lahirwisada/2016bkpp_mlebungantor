<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * kegiatan_model.php
 * Dec 4, 2016 
 */


include_once "entity/ref_kegiatan.php";
class Ab_kegiatan_model extends ref_kegiatan {
    protected  $using_insert_and_update_properties =FALSE;
            function __construct(){
        parent::__construct();
    }
    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "nama_kegiatan",
                    ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    public function get_like($keyword=FALSE){
        
//        $result = FALSE;
        if($keyword){
            $this->db->order_by("id_kegiatan", "asc");
            $this->db->where(" lower(".$this->table_name.".nama_kegiatan) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".id_kegiatan) LIKE lower('%".$keyword."%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
        
    }
    public function get_detail_by_id($id_kegiatan = FALSE) {
        if ($id_kegiatan) {
            return $this->get_detail($this->table_name . ".id_kegiatan = '" . $id_kegiatan . "'");
        }
        return FALSE;
    }
    
    
}