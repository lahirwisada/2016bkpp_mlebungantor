<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_daftar_cuti.php
 * Dec 12, 2016 
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class ab_daftar_cuti extends Back_end{
public $model = 'ab_daftar_cuti_model';

public function __construct() {
parent::__construct('Cuti', 'Daftar Cuti');


}

public function index(){
//parent::index();
$id_parent = $this->lmanuser->get_back_end('user_detail')["id_skpd"];
//echo $id_parent;exit(); 
//var_dump($this->lmanuser->get_back_end('user_detail')["id_skpd"]);exit();
$daftar_cuti = $this->ab_daftar_cuti_model->get_detail_by_id($id_parent);
//var_dump($daftar_cuti);exit();
$this->get_attention_message_from_session();
        $this->{$this->model}->change_offset_param("currpage_" . $this->cmodul_name);
        $records = $this->{$this->model}->allparent($id_parent);

        $paging_set = $this->get_paging($this->get_current_location(), $records->record_found, $this->default_limit_paging, $this->cmodul_name);
        $this->set('records', $records->record_set);
        $this->set("keyword", $records->keyword);
        $this->set('field_id', $this->{$this->model}->primary_key);
        $this->set("paging_set", $paging_set);
//        $this->set("daftar_cuti", $daftar_cuti);

        $this->set("additional_js", "back_end/" . $this->_name . "/js/index_js");

        $this->set("next_list_number", $this->{$this->model}->get_next_record_number_list());
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
        
    }
    public function detail($id = FALSE) {
        parent::detail($id, array(
            "id_peg",
            "id_cuti",
            "tgl_cuti",
            "lama_cuti",
            "status_approval",
           
            
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Tambah Daftar Cuti ' . $this->_header_title
        ));
        
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $mesin_found = $this->kegiatan_model->get_like($keyword);
        
        $this->to_json($mesin_found);
    }
    
        
      
}