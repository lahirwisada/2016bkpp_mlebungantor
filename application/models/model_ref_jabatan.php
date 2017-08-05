<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/ref_jabatan.php";

class model_ref_jabatan extends ref_jabatan {

    protected $rules = array(
        array("jabatan", "required|min_length[1]|max_length[200]"),
        array("keterangan", ""),
    );

    public function __construct() {
        parent::__construct();
    }

    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "jabatan",
                    "keterangan",
                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    
//    public function get_like($keyword=FALSE){
//        
//        $result = FALSE;
//        if($keyword){
//            $this->db->order_by("jabatan", "asc");
//            $this->db->where(" lower(".$this->table_name.".jabatan) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".keterangan) LIKE lower('%".$keyword."%')", NULL, FALSE);
//            $result = $this->get_where();
//        }
//        return $result;
//        
//    }
    public function get_like($keyword = FALSE) {

        $result = FALSE;
        if ($keyword) {
//           api by triasada start
        $url = 'http://103.219.112.101:8383/BkppRestFulServices-Api/jabatanAutoComplete';
        $param = array('jabatanAutoCompleteIn'=>array('namaJabatan'=>$keyword)
            );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//        curl_setopt($ch, CURLOPT_HEADER, 'Content-Type: application/json');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);

        $result=(array)json_decode($data);

//        var_dump($result['skpdAutoCompleteOut']->skpdAutoCompleteList->skpdAutoCompleteDetail);exit();
//        api by triasada end
        }
        return $result['jabatanAutoCompleteOut']->jabatanAutoCompleteList->jabatanAutoCompleteDetail;
    }
}

?>