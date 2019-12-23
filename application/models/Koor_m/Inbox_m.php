<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox_m extends CI_Model {

    public function tampil_pesan($id_psikolog, $id_klien) {
        $ambil = $this->db->query("SELECT * FROM pesan WHERE (dari_user='$id_psikolog' OR dari_user='$id_klien') AND (kepada_user='$id_psikolog' OR kepada_user='$id_klien') ");
    
        
        return $ambil->result();
    }

    public function tambah_pesan($data) {
        date_default_timezone_set("Asia/Jakarta");
        $data['dari_user'] = $this->session->userdata("id");
        $data['tanggal_kirim_pesan'] = date("Y-m-d H:i:s");
        $data['status_pesan'] = "terkirim";
        $this->db->insert("pesan", $data);


    }

    public function ubah_pesan($id_pesan, $id_dari, $id_kepada) {
        $data['status_pesan'] = "terbaca";
        $this->db->where('id', $id_pesan);
        $this->db->where('dari_user', $id_dari);
        $this->db->where('kepada_user', $id_kepada);
        $this->db->update('pesan', $data);
    }
    

}

?>