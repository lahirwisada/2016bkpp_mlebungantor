<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_finger_kegiatan_model.php
 * Dec 11, 2016 
 */


include_once "entity/ref_finger_kegiatan.php";
class Ab_finger_kegiatan_model extends Ref_finger_kegiatan {
    protected  $using_insert_and_update_properties =FALSE;
            function __construct(){
        parent::__construct();
    }
    public function all($id_kegiatan = FALSE, $force_limit = FALSE, $force_offset = FALSE) {

        $this->db->where($this->table_name . ".id_kegiatan = '" . $id_kegiatan . "'");

        return parent::get_all($this->searchable_fields, FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    
    
    
    
}