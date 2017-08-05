<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends Back_end {

    protected $auto_load_model = FALSE;

    public function can_access() {
        return TRUE;
    }

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->set("header_title", 'Home');
// api by triasada start
//        $url = 'http://192.168.100.15:8080/BkppRestFulServices-Api/login';
//        $param = array('loginIn'=>array('nip'=>'195404061978031009',
//            'password'=>'2001b9264899b6035395ce4d1a8c1139')
//                
//            );
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
//        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
////        curl_setopt($ch, CURLOPT_HEADER, 'Content-Type: application/json');
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//    'Content-Type: application/json',
//    'Accept: application/json'
//));
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        $result = curl_exec($ch);
//
//
//
//        var_dump($result);exit();
//        api by triasada end
//        echo "eko dipanggil";exit;
//        $this->load->model(array("model_tr_pembayaran", "model_ref_penghuni"));
//        $terbayar_perbulan = toJsonString($this->model_tr_pembayaran->get_record_terbayar_perbulan(), FALSE);
//        $pendaftar_perbulan = toJsonString($this->model_ref_penghuni->get_record_pendaftar_perbulan(), FALSE);
//        $this->set("terbayar_perbulan", $terbayar_perbulan);
//        $this->set("pendaftar_perbulan", $pendaftar_perbulan);
//        $this->set("var_bulan", $this->month());
        $this->set("additional_js", "back_end/home/js/index_js");
        $this->add_jsfiles(array(
            
            "avant/plugins/charts-flot/jquery.flot.min.js",
            "avant/plugins/charts-flot/jquery.flot.resize.min.js",
            "avant/plugins/charts-flot/jquery.flot.orderBars.min.js",
            "avant/plugins/charts-flot/jquery.flot.canvas.min.js",
            
            "atlant/plugins/morris/raphael-min.js",
            "atlant/plugins/morris/morris.min.js",
        ));
    }

    private function month() {
        $month = array_month(FALSE, TRUE);

        foreach ($month as $key => $val) {
            $month[$key] = array($key, $val);
        }
        return toJsonString($month, FALSE);
    }

}

?>