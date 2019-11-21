<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Diagnosis_m extends CI_Model {


    public function data_diagnosis() {
        $this->db->join('deskripsi_gangguan', 'deskripsi_gangguan.id=diagnosis.id_gangguan', 'left');
        $this->db->join('pendaftaran', 'pendaftaran.id=diagnosis.id_pendaftaran', 'left');
        $this->db->join('penjadwalan', 'penjadwalan.id=pendaftaran.id_penjadwalan', 'left');
        $this->db->join('user', 'user.id=penjadwalan.id_user', 'left');
        
        $this->db->where('pendaftaran.id_klien', $this->session->userdata('id'));

        return $this->db->get("diagnosis")->result();
        
    }

    public function getIdDiagnosis($id_gangguan, $id_pendaftaran) { //untuk mengambil id diagnosis
        $this->db->where('id_gangguan', $id_gangguan);
        $this->db->where('id_pendaftaran', $id_pendaftaran);
        return $this->db->get('diagnosis')->row();
    }

    public function detail_diagnosis($id_diagnosis) {
        $this->db->where('id', $id_diagnosis);
        return $this->db->get('diagnosis')->row();
    }

    public function tampil_fakta_diagnosis($id_diagnosis) {
        $this->db->join('fakta', 'fakta.id = fakta_diagnosis.id_fakta_fd', 'left');
        $this->db->where('fakta_diagnosis.id_diagnosis_fd', $id_diagnosis);
        $ambil = $this->db->get('fakta_diagnosis');
        return $ambil->result();
    }



}
