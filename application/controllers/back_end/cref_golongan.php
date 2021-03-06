<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cref_golongan extends Back_end {

    public $model = 'model_ref_golongan';

    public function __construct() {
        parent::__construct('kelola_pustaka_golongan', 'Pustaka Data Golongan');
    }

   public function index() {
//        parent::index();
        $this->get_attention_message_from_session();
        $this->{$this->model}->change_offset_param("currpage_" . $this->cmodul_name);
        $records = $this->{$this->model}->all();
//        var_dump($records);exit();

        $paging_set = $this->get_paging($this->get_current_location(), $records->record_found, $this->default_limit_paging, $this->cmodul_name);
        $this->set('records', $records->record_set);
        $this->set("keyword", $records->keyword);
        $this->set('field_id', $this->{$this->model}->primary_key);
//        $this->set("paging_set", $paging_set);
//        $this->set("daftar_cuti", $daftar_cuti);

        $this->set("additional_js", "back_end/" . $this->_name . "/js/index_js");

        $this->set("next_list_number", $this->{$this->model}->get_next_record_number_list());
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }

    public function detail($id = FALSE) {
        parent::detail($id, array("kode_golongan", "golongan", "keterangan"));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Pendaftaran ' . $this->_header_title
        ));
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }

    public function get_like() {
        $keyword = $this->input->post("keyword");

        $data_found = $this->model_ref_golongan->get_like($keyword);

        $this->to_json($data_found);
    }

}

?>