<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * restserver 
 * absensi.php
 * Dec 3, 2016 
 */
include_once "entity/ref_absensi.php";
class Absensi_model extends ref_absensi {
    protected  $using_insert_and_update_properties =FALSE;
            function __construct(){
        parent::__construct();
    }
    public function all($id_peg = FALSE, $force_limit = FALSE, $force_offset = FALSE) {

        $this->db->where($this->table_name . ".approval is null ");

        return parent::get_all($this->searchable_fields, FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    
    function get_data(){
         $this->db->select('a.id,a.id_peg,b.nama_peg,a.date_attend,c.nama_status,a.id_mesin,a.verify');
    $this->db->from('sc_presensi."ir_attendance" as a');
    $this->db->join('sc_presensi."ir_list_pegawai" as b', 'a.id_peg = b.id_peg'); 
    $this->db->join('sc_presensi."ir_status_absen" as c', 'a.id_status = c.id_status');
//    $this->db->where('a.verify',0);
    $query = $this->db->get();
        return $query->result();
    }
    function insert_data(array $data){
         $query = $this->db->insert('sc_presensi."ir_attendance"',$data);
        return $query->result();
    }
    
    function approve($param=FALSE){
        $data = array(
               'approval' => 1
            );
        if ($param){
//            $this->db->update('mytable', $data, "id_peg= 1");
            $this->db->where('id',$param);
            $this->db->update('sc_presensi."ir_attendance"',$data);
        }
        return 'Aprroved';
    }
    function reject($param=FALSE){
        $data = array(
               'approval' => 2
            );
        if ($param){
//            $this->db->update('mytable', $data, "id_peg= 1");
            $this->db->where('id',$param);
            $this->db->update('sc_presensi."ir_attendance"',$data);
        }
        return 'Rejected';
    }
}