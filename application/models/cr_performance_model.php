<?php

/*
* 2016bkpp_mlebungantor ;
* cr_performance_model.php ;
* Satria Persada <triasada@yahoo.com> ;
* Aug 24, 2017;
* 10:42:41 PM;
* Jakarta International Container Terminal (JICT);
*/

include_once "entity/ref_cr_performance.php";
class cr_performance_model extends ref_cr_performance {
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
            $this->db->order_by("performance_id", "asc");
            $this->db->where(" lower(".$this->table_name.".performance_name) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".performance_name) LIKE lower('%".$keyword."%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
        
    }
    
}