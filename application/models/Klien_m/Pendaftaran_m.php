<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Pendaftaran_m extends CI_Model {


    // public function getAll() {
    //     $this->load->database();

    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->join('klien','klien.id_user=user.id');
        
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function getPenjadwalan() { //fungsi untuk menampilkan jadwal psikolog
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('penjadwalan','penjadwalan.id_user=user.id');
        
        $query = $this->db->get();
        return $query->result();
    }

}