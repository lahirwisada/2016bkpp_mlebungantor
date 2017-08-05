<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/ref_golongan.php";

class model_ref_golongan extends ref_golongan {

    protected $rules = array(
        array("kode_golongan", "required|min_length[2]|max_length[300]|alpha_dash"),
        array("golongan", "required|min_length[3]"),
        array("keterangan", "min_length[3]"),
    );

    public function __construct() {
        parent::__construct();
    }

//    public function all($force_limit = FALSE, $force_offset = FALSE) {
//        $this->db->order_by("id_golongan", "desc");
//        return parent::get_all(array(
//                    "kode_golongan",
//                    "golongan",
//                    "keterangan",
//                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
//    }
    public function all($force_limit = FALSE, $force_offset = FALSE) {

//        $result = FALSE;
        $hasil=new stdClass();
        
//           api by triasada start
        $url = 'http://103.219.112.101:8383/BkppRestFulServices-Api/golonganAutoComplete';
        $param = array('golonganAutoCompleteIn'=>array('kdGolongan'=>'')
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
        $hasil->record_set=$result['golonganAutoCompleteOut']->golonganAutoCompleteList->golonganAutoCompleteDetail;
        $hasil->record_found=count($result['golonganAutoCompleteOut']->golonganAutoCompleteList->golonganAutoCompleteDetail);
        $hasil->keyword='';

//        var_dump($result['skpdAutoCompleteOut']->skpdAutoCompleteList->skpdAutoCompleteDetail);exit();
//        api by triasada end
        
        return $hasil;
    }
    
//    public function get_like($keyword=FALSE){
//        
//        $result = FALSE;
//        if($keyword){
//            $this->db->order_by("kode_golongan", "asc");
//            $this->db->where(" lower(".$this->table_name.".kode_golongan) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".golongan) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".keterangan) LIKE lower('%".$keyword."%')", NULL, FALSE);
//            $result = $this->get_where();
//        }
//        return $result;
//        
//    }
    public function get_like($keyword = FALSE) {

        $result = FALSE;
        if ($keyword) {
//           api by triasada start
        $url = 'http://103.219.112.101:8383/BkppRestFulServices-Api/golonganAutoComplete';
        $param = array('golonganAutoCompleteIn'=>array('kdGolongan'=>$keyword)
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
        return $result['golonganAutoCompleteOut']->golonganAutoCompleteList->golonganAutoCompleteDetail;
    }
}

?>