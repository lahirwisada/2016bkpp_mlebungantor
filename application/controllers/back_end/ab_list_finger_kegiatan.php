<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_list_finger_kegiatan.php
 * Dec 11, 2016 
 */


defined('BASEPATH') OR exit('No direct script access allowed');


class ab_list_finger_kegiatan extends Back_end{
    public $model ='ab_finger_kegiatan_model';
    
    public function __construct() {
                parent::__construct('Finger List','Peserta Kegiatan');
                $this->load->model('ab_kegiatan_model');
               
                
    }
    
    public function index($crypted_id_kegiatan=FALSE){
//        $this->load_model('ab_finger_kegiatan_model');
       if (!$crypted_id_kegiatan) {
            redirect('back_end/ab_kegiatan');
        }

        $detail_kegiatan = $this->ab_kegiatan_model->get_detail_by_id($crypted_id_kegiatan);

        $id_kegiatan = $detail_kegiatan ? $detail_kegiatan->id_kegiatan : FALSE;
        

        if (!$id_kegiatan || !$detail_kegiatan) {
            redirect('back_end/ab_kegiatan');
        }

        $this->get_attention_message_from_session();
        $this->{$this->model}->change_offset_param("currpage_" . $this->cmodul_name);
        $records = $this->{$this->model}->all($id_kegiatan);

        $paging_set = $this->get_paging($this->get_current_location(), $records->record_found, $this->default_limit_paging, $this->cmodul_name);
        $this->set('records', $records->record_set);
        $this->set("keyword", $records->keyword);
        $this->set('field_id', $this->{$this->model}->primary_key);
        $this->set("paging_set", $paging_set);
        $this->set("detail_kegiatan", $detail_kegiatan);

        $this->set("additional_js", "back_end/" . $this->_name . "/js/index_js");

        $this->set("next_list_number", $this->{$this->model}->get_next_record_number_list());

        $this->set("bread_crumb", array(
            "back_end/cdaftar_kegiatan" => "Kegiatan",
            "#" => $this->_header_title
        ));
    }
    public function detail($crypted_id_kegiatan=FALSE,$id = FALSE) {
        parent::detail($id, array(
            "id_kegiatan",
            "id_pegawai",
            
            
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Tambah Peserta' . $this->_header_title
        ));
        $detail_kegiatan = $this->ab_kegiatan_model->get_detail_by_id($crypted_id_kegiatan);
        $this->set("additional_js", array(
            "back_end/" . $this->_name . "/js/detail_isian_js",
        ));

        $this->add_cssfiles(array("plugins/select2/select2.min.css"));
        $this->add_jsfiles(array("plugins/select2/select2.full.min.js"));
        $this->set('id_kegiatan', $crypted_id_kegiatan);
        $this->set("detail_kegiatan", $detail_kegiatan);
        /*$this->set("additional_js", array(
            "back_end/" . $this->_name . "/js/detail_js",
            
        ));*/
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    
    
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $mesin_found = $this->ab_mesin_model->get_like($keyword);
        
        $this->to_json($mesin_found);
    }
    
        
      
}