<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_m extends CI_Model {

    public function tampil() {
        $ambil = $this->db->get('pengetahuan');
        return $ambil->result();
    }

    public function ubah($inputan) {
        foreach ($inputan as $id => $pertanyaan) {
            $data_simpan['pertanyaan'] = $pertanyaan;
            $this->db->where('id', $id);
            $this->db->update('pengetahuan', $data_simpan);
        }
    }

    public function tampil_gangguan() {
        $ambil = $this->db->get('deskripsi_gangguan');
        $data = $ambil->result();
        foreach ($data as $key => $value) {
            $tampil[$value->id] = $value;
        }
        return $tampil;
    }

    public function tampil_fakta() {
        $ambil = $this->db->get('fakta');
        $data = $ambil->result();
        foreach ($data as $key => $value) {
            $tampil[$value->id] = $value;
        }
        return $tampil;
    }
    

}

?>