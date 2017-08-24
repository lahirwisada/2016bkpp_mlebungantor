<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * client.php
 * Nov 30, 2016 
 */

//require APPPATH.'/libraries/rest.php';

class Client extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ab_mesin_model');
        $this->load->helper('url');
        $this->load->library('rest');
        $config = array('server' => 'http://bkpp.uat/e-pres/index.php/api/api_presensi/', //'http://restserver.local/index.php/api/example/',
            'http_user' => 'admin',
            'http_pass' => '1234',
            'http_auth' => 'basic'
        );

        // Run some setup
        $this->rest->initialize($config);
    }

    public function index() {
        $mesin = $this->ab_mesin_model->get_mesin();
        var_dump($mesin);
    }

    public function upload_absen($IP) {
        $idmesin = '1';
        $list = array();
        //$IP="192.168.137.2";
//             $IP="192.168.0.36";
        $Key = "0";
        $Connect = fsockopen($IP, "80", $errno, $errstr, 1);
        if (!$Connect) {
            json_encode(array('success' => false, 'msg' => 'Connection Failed'));
            exit;
        }

        $soap_request = "<GetAttLog><ArgComKey xsi:type=\"xsd:integer\">" . $Key . "</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg></GetAttLog>";
        $newLine = "\r\n";
        fputs($Connect, "POST /iWsService HTTP/1.0" . $newLine);
        fputs($Connect, "Content-Type: text/xml" . $newLine);
        fputs($Connect, "Content-Length: " . strlen($soap_request) . $newLine . $newLine);
        fputs($Connect, $soap_request . $newLine);
        $buffer = "";
        while ($Response = fgets($Connect, 1024)) {
            $buffer = $buffer . $Response;
        }



        include("parse.php");
        $buffer = Parse_Data($buffer, "<GetAttLogResponse>", "</GetAttLogResponse>");
        $buffer = explode("\r\n", $buffer);
        for ($a = 0; $a < count($buffer); $a++) {
            $data = Parse_Data($buffer[$a], "<Row>", "</Row>");
            $PIN = Parse_Data($data, "<PIN>", "</PIN>");
            $DateTime = Parse_Data($data, "<DateTime>", "</DateTime>");
            $Verified = Parse_Data($data, "<Verified>", "</Verified>");
            $Status = Parse_Data($data, "<Status>", "</Status>");
            $row = array('id' => $PIN, 'date_attend' => $DateTime, 'verify' => $Verified, 'id_status' => $Status, 'id_mesin' => $idmesin);
            $list[] = $row;
        }
        unset($list[0]);
        $x = count($list);
        unset($list[$x]);
//            var_dump($list);
        // Pull in an array of tweets
        $request = $this->rest->post('copyabsen', array('list' => $list), 'json');
        if ($request !== 'success') {

            echo json_encode(array('success' => false, 'msg' => 'Download Failed'));
        } else {
            echo json_encode(array('success' => true, 'msg' => 'Upload Done'));
        }
    }

    public function upload_finger($IP) {
        //$IP="192.168.137.2";
//            $IP="192.168.0.36";
        $Key = "0";
        $list = array();
        $fn = "0";
        $Connect = fsockopen($IP, "80", $errno, $errstr, 1);
        if ($Connect) {
            $soap_request = "<GetUserTemplate><ArgComKey xsi:type=\"xsd:integer\">" . $Key . "</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">ALL</PIN><FingerID xsi:type=\"xsd:integer\">" . $fn . "</FingerID></Arg></GetUserTemplate>";
            $newLine = "\r\n";
            fputs($Connect, "POST /iWsService HTTP/1.0" . $newLine);
            fputs($Connect, "Content-Type: text/xml" . $newLine);
            fputs($Connect, "Content-Length: " . strlen($soap_request) . $newLine . $newLine);
            fputs($Connect, $soap_request . $newLine);
            $buffer = "";
            while ($Response = fgets($Connect, 1024)) {
                $buffer = $buffer . $Response;
            }
        } else
            echo "Koneksi Gagal";
        include("parse.php");
        $buffer = Parse_Data($buffer, "<GetUserTemplateResponse>", "</GetUserTemplateResponse>");
        $buffer = explode("\r\n", $buffer);
        for ($a = 0; $a < count($buffer); $a++) {
            $data = Parse_Data($buffer[$a], "<Row>", "</Row>");
            $PIN = Parse_Data($data, "<PIN>", "</PIN>");
            $FingerID = Parse_Data($data, "<FingerID>", "</FingerID>");
            $Size = Parse_Data($data, "<Size>", "</Size>");
            $Valid = Parse_Data($data, "<Valid>", "</Valid>");
            $Template = Parse_Data($data, "<Template>", "</Template>");
            $row = array('id' => $PIN, 'finger_id' => $FingerID, 'size' => $Size, 'template' => $Template);
            $list[] = $row;
        }
        unset($list[0]);
        $x = count($list);
        unset($list[$x]);
//            var_dump($list);
        $request = $this->rest->post('uploadfinger', array('list' => $list), 'json');
//            echo $id;
        echo json_encode(array('success' => true, 'msg' => $request));
    }

    public function upload_userdata($IP) {
        //$IP="192.168.137.2";
//            $IP="192.168.0.36";
        $Key = "0";
        $fn = "0";
        $list = array();
        $Connect = fsockopen($IP, "80", $errno, $errstr, 1);
        if ($Connect) {
            $soap_request = "<GetAllUserInfo><ArgComKey xsi:type=\"xsd:integer\">" . $Key . "</ArgComKey></GetAllUserInfo>";
            $newLine = "\r\n";
            fputs($Connect, "POST /iWsService HTTP/1.0" . $newLine);
            fputs($Connect, "Content-Type: text/xml" . $newLine);
            fputs($Connect, "Content-Length: " . strlen($soap_request) . $newLine . $newLine);
            fputs($Connect, $soap_request . $newLine);
            $buffer = "";
            while ($Response = fgets($Connect, 1024)) {
                $buffer = $buffer . $Response;
            }
        } else
            echo "Koneksi Gagal";
//            echo htmlspecialchars($buffer);
        include("parse.php");
        $buffer = Parse_Data($buffer, "<GetAllUserInfoResponse>", "</GetAllUserInfoResponse>");
        $buffer = explode("\r\n", $buffer);
        for ($a = 0; $a < count($buffer); $a++) {
            $data = Parse_Data($buffer[$a], "<Row>", "</Row>");
            $PIN = Parse_Data($data, "<PIN2>", "</PIN2>");
            $NAME = Parse_Data($data, "<Name>", "</Name>");
            $PASSWORD = Parse_Data($data, "<Password>", "</Password>");
            $GROUP = Parse_Data($data, "<Group>", "</Group>");
            $PREV = Parse_Data($data, "<Privilege>", "</Privilege>");
            $CARD = Parse_Data($data, "<Card>", "</Card>");
            $fn = 0;
            $row = array('id' => $PIN, 'nama_peg' => $NAME, 'password' => $PASSWORD, 'group' => $GROUP);
            $list[$a] = $row;
        }
        unset($list[0]);
        $x = count($list);
        unset($list[$x]);
//           var_dump($list);
        $request = $this->rest->post('userdata', array('list' => $list), 'json');
        echo json_encode(array('success' => true, 'msg' => $request));
    }

    public function testconnect() {
        
    }

}
