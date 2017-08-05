<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * ab_daftar_cuti_model.php
 * Dec 12, 2016 
 */




include_once "entity/ref_daftar_cuti.php";

class Ab_daftar_cuti_model extends ref_daftar_cuti {

//    protected  $using_insert_and_update_properties =FALSE;
    function __construct() {
        parent::__construct();
    }

//    public function all($force_limit = FALSE, $force_offset = FALSE) {
//        return parent::get_all(array(
//                    "nama_cuti",
//                    "tgl_cuti",
//                    "status_approval",
//                    ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
//    }
    public function allparent($id_parent = FALSE,$id_peg=false, $force_limit = FALSE, $force_offset = FALSE) {

        if ($id_parent) {
            $this->db->where($this->table_name . ".id_skpd = '" . $id_parent . "'");
//            $this->db->where($this->table_name . ".status_approval = 'Submitted' ");
             $this->db->where($this->table_name . ".modified_by <> '" . $id_peg . "' ");
        } else {
            $this->db->where($this->table_name . ".status_approval is not null ");
        }

        return parent::get_all($this->searchable_fields, FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }

    public function all($id_peg = FALSE, $force_limit = FALSE, $force_offset = FALSE) {
        if ($id_peg) {
            $this->db->where($this->table_name . ".id_peg = '" . $id_peg . "'");
        }

        return parent::get_all($this->searchable_fields, FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }

    public function get_detail_by_id($id_parent = FALSE) {
        if ($id_parent) {
            return $this->get_detail($this->table_name . ".id_skpd = '" . $id_parent . "'");
        }
        return FALSE;
    }

    function approve($param = FALSE,$id_approver) {
       if ($param) {
            $insert = $this->db->query("SELECT * FROM sc_presensi.ir_daftar_cuti_api_func_approve_($param,$id_approver);");

            if (!$insert) {
                return $this->db->_error_message();
            } else {
                return 'Approved';
            }
        }
    }

    function reject($param = FALSE) {
        $data = array(
            'status_approval' => '2'
        );
        if ($param) {
//            $this->db->update('mytable', $data, "id_peg= 1");
            $this->db->where('id_list', $param);
            $this->db->update('sc_presensi."ir_daftar_cuti"', $data);
        }
        return 'Rejected';
    }

    function insert($param) {
//       var_dump($param); exit();
        if ($param) {
            $id_peg = $param['id_peg'];
            $id_cuti = $param['id_cuti'];
            $tgl_cuti = $param['tgl_cuti'];
            $lama_cuti = $param['lama_cuti'];
            $id_skpd = $param['id_skpd'];

//            var_dump($lama_cuti); exit();
//            $this->db->update('mytable', $data, "id_peg= 1");

            $insert = $this->db->query("SELECT * FROM sc_presensi.ir_daftar_cuti_api_new_data_($id_peg,$id_cuti,'$tgl_cuti',$lama_cuti,'$id_peg',$id_skpd);");

            if (!$insert) {
                return $this->db->_error_message();
            } else {
                return 'Success';
            }
        }
    }

    function edit2($id_list,$param) {
        if ($param) {
            $id_peg = $param['id_peg'];
            $id_cuti = $param['id_cuti'];
            $tgl_cuti = $param['tgl_cuti'];
            $lama_cuti = $param['lama_cuti'];
            $id_skpd = $param['id_skpd'];
            $status_approval = $param['status_approval'];

//            var_dump($status_approval); exit();
//            $this->db->update('mytable', $data, "id_peg= 1");

            $insert = $this->db->query("SELECT * FROM sc_presensi.ir_daftar_cuti_api_edit_data_($id_list,$id_peg,$id_cuti,'$tgl_cuti',$lama_cuti,'$status_approval');");

            if (!$insert) {
                return $this->db->_error_message();
            } else {
                return 'Success';
            }
        }
    }
    
    function delete2($id_list,$status_approval) {
       
            $insert = $this->db->query("SELECT * FROM sc_presensi.ir_daftar_cuti_api_edit_data_($id_list,'$status_approval');");

            if (!$insert) {
                return $this->db->_error_message();
            } else {
                return 'Success';
            }
        
    }

}
