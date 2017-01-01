<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * restserver 
 * Absen.php
 * Dec 1, 2016 
 */
class Absen extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function get_data(){
        $this->db->order_by('id_modul','ASC');
        $query = $this->db->get('sc_presensi."backbone_modul"');
        return $query->result();
    }
    function add_absen(array $data){
    
           if( $this->db->insert('sc_presensi."ir_attendance"',$data)){
               $message = 'ADDED';
           }else{
               $message = 'FAILED';
           }
        
        
        
        return $message;
        
    }
    function get_karyawan(){
        
    }
    function insert_karyawan(array $data){
        if( $this->db->insert('sc_presensi."ir_list_pegawai"',$data)){
               $message = 'ADDED';
           }else{
               $message = 'FAILED';
           }
        
        return $message;
    }
    function update_karyawan(array $data,$id){
   $this->db->where('id_peg', $id);
        if( $this->db->update('sc_presensi."ir_list_pegawai"',$data)){
               $message = 'ADDED';
           }else{
               $message = 'FAILED';
           }
        
        return $message;
    }
    function get_id_absen(){
        $this->db->where('tgl_kegiatan >=','current_date');
        $this->db->order_by('id_kegiatan','desc');
        $query = $this->db->get('sc_presensi."ir_absensi_mobile"');
        return $query->result();
    }
    function get_id_kegiatan(){
        
    }
    function get_peserta($id_keg){
        $this->db->where("id_kegiatan ",$id_keg);
        $this->db->order_by("id_kegiatan","desc");
        $query = $this->db->get('sc_presensi."ir_list_peserta_mobile"');
        return $query->result();
    }
}