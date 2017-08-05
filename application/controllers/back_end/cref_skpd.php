<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cref_skpd extends Back_end {

    public $model = 'model_ref_skpd';

    public function __construct() {
        parent::__construct('kelola_pustaka_skpd', 'Pustaka Data SKPD');
    }

    public function index() {
//        parent::index();
        $this->get_attention_message_from_session();
        $this->{$this->model}->change_offset_param("currpage_" . $this->cmodul_name);
        $records = $this->{$this->model}->all();
//        var_dump($this->default_limit_paging);exit();

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
            "nama_skpd",
            "col_order",
            "abbr_skpd",
            "alamat_skpd",
            "kodepos",
            "no_telp",
            "email",
            "website",
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Pendaftaran ' . $this->_header_title
        ));
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $skpd_found = $this->{$this->model}->get_like($keyword);
        
        $this->to_json($skpd_found);
    }

}

?>