<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/ref_skpd.php";

class model_ref_skpd extends ref_skpd {

    protected $rules = array(
        array("nama_skpd", "required|min_length[2]|max_length[300]"),
        array("col_order", "numeric"),
        array("abbr_skpd", "min_length[2]|max_length[100]"),
        array("alamat_skpd", "min_length[2]|max_length[300]"),
        array("kodepos", "min_length[4]|max_length[60]|numeric"),
        array("no_telp", "min_length[5]|max_length[100]|numeric"),
        array("email", "min_length[4]|max_length[100]|valid_email"),
        array("website", "min_length[4]|max_length[200]"),
    );

    public function __construct() {
        parent::__construct();
    }
    
    protected function after_get_data_post() {
        if(!is_numeric($this->col_order) || $this->col_order = ""){
            $this->col_order = 0;
        }
    }

//    public function all($force_limit = FALSE, $force_offset = FALSE) {
//        $this->db->order_by("col_order", "asc");
//        return parent::get_all(array(
//                    "nama_skpd",
////                    "col_order",
//                    "abbr_skpd",
//                    "alamat_skpd",
//                    "kodepos",
//                    "no_telp",
//                    "email",
//                    "website",
//                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
//    }
    public function all($force_limit = FALSE, $force_offset = FALSE) {

//        $result = FALSE;
        $hasil=new stdClass();
        
//           api by triasada start
        $url = 'http://103.219.112.101:8383/BkppRestFulServices-Api/skpdAutoComplete';
        $param = array('skpdAutoCompleteIn'=>array('namaOrganisasi'=>'')
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
        $hasil->record_set=$result['skpdAutoCompleteOut']->skpdAutoCompleteList->skpdAutoCompleteDetail;
        $hasil->record_found=count($result['skpdAutoCompleteOut']->skpdAutoCompleteList->skpdAutoCompleteDetail);
        $hasil->keyword='';

//        var_dump($result['skpdAutoCompleteOut']->skpdAutoCompleteList->skpdAutoCompleteDetail);exit();
//        api by triasada end
        
        return $hasil;
    }
    
//    public function get_like($keyword = FALSE) {
//
//        $result = FALSE;
//        if ($keyword) {
//            $this->db->order_by("col_order", "asc");
//            $where_keyword = "lower(" . $this->table_name . ".nama_skpd) LIKE lower('%" . $keyword . "%') OR ".
//                    "lower(" . $this->table_name . ".abbr_skpd) LIKE lower('%" . $keyword . "%') ";
//            $this->db->where($where_keyword, NULL, FALSE);
//            $result = $this->get_where();
//        }
//        return $result;
//    }
    
    public function get_like($keyword = FALSE) {

        $result = FALSE;
        if ($keyword) {
//           api by triasada start
        $url = 'http://103.219.112.101:8383/BkppRestFulServices-Api/skpdAutoComplete';
        $param = array('skpdAutoCompleteIn'=>array('namaOrganisasi'=>$keyword)
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
        return $result['skpdAutoCompleteOut']->skpdAutoCompleteList->skpdAutoCompleteDetail;
    }
}

?>