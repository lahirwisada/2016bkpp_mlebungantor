<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * restserver 
 * api_presensi.php
 * Dec 1, 2016 
 */
require APPPATH.'/libraries/REST_Controller.php';

class Api_presensi extends REST_Controller
{
    public function __construct() {
            parent::__construct();
            $this->load->model('absen');
    }   
    function updateabsen_post(){
        
    }
    function absen_get(){
        $user = $this->absen->get_data();
        if($user)
        {
            $this->response($user, 200); 
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
        
    }
    function copyabsen_post(){
        $message='';
        $list=array();
        $list=$this->post('list');
        foreach ($list as $value) {
            $data['id_peg']=intval($value['id']);
            $data['date_attend']=$value['date_attend'];
            $data['created_by']=1;
            $data['verify']=intval($value['verify']);
            $data['id_status']=intval($value['id_status']);
            $data['id_mesin']=intval($value['id_mesin']);
        
           $status=$this->absen->add_absen($data);
           
            
        }
        
        $this->response('success', 200); // 200 being the HTTP response code
        
        
    }
    function donwloadabsen_get(){
        
    }
    function uploadfinger_post(){
        
        $message='';
        $list=array();
        $list=$this->post('list');
        foreach ($list as $value) {
            $id=intval($value['id']);
            $data['finger_id']=intval($value['finger_id']);
            $data['size_template']=intval($value['size']);
            $data['template']=$value['template'];
            
           $status=$this->absen->update_karyawan($data,$id);
           if($status=='ADDED'){
               $message .= 'id '.$id.' ADDED<br>';
               
           }else{
               $message .= 'id '.$id.' FAILED<br>';
           }
            
        }
        
        $this->response('success', 200); // 200 being the HTTP response code
    }
    
    function userdata_post(){
        
        $message='';
        $list=array();
        $list=$this->post('list');
        foreach ($list as $value) {
            $data['id_peg']=intval($value['id']);
            $data['nama_peg']=$value['nama_peg'];
            $data['password']=intval($value['password']);
            $data['group']=intval($value['group']);
            
           $status=$this->absen->insert_karyawan($data);
           
            
        }
        
        $this->response('success', 200); // 200 being the HTTP response code
    }
    
}