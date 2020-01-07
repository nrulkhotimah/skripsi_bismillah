<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Pendaftaran_m extends CI_Model {


    public function getAll() { //fungsi untuk mengambil semua data
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('klien','klien.id_user=user.id');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getPenjadwalan($id_psikolog) { //fungsi untuk mengambil jadwal psikolog
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('penjadwalan','penjadwalan.id_user=user.id');
        $this->db->where('penjadwalan.id_user', $id_psikolog);
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getPenjadwalans($id_psikolog) { //fungsi untuk mengambil jadwal psikolog
        $this->db->select('user.*,penjadwalan.*, pendaftaran.waktu_daftar as waktu_daftar');
        $this->db->from('user');
        $this->db->join('penjadwalan','penjadwalan.id_user=user.id');
        $this->db->join('pendaftaran','pendaftaran.id_penjadwalan=penjadwalan.id','left');
        $this->db->where('penjadwalan.id_user', $id_psikolog);
        
        $query = $this->db->get();
        return $query->result();
    }

    public function cek_pendaftaran_klien($id_penjadwalan, $id_klien) { 
        $this->db->where('id_penjadwalan', $id_penjadwalan);
        $this->db->where('id_klien', $id_klien);
        $ambil = $this->db->get('pendaftaran');
        return $ambil->row();
    }

    public function cek_pendaftaran_kliens($waktu_daftar, $id_klien) { 
        $this->db->where('waktu_daftar !=', $waktu_daftar);
        $this->db->where('id_klien', $id_klien);
        $ambil = $this->db->get('pendaftaran');
        return $ambil->row();
    }

    public function pendaftaran_terbaru($id_klien) { //fungsi untuk dapat mengambil jadwal pendaftaran konseling klien yang paling terbaru
        $this->db->join('penjadwalan', 'pendaftaran.id_penjadwalan = penjadwalan.id', 'left');
        $this->db->where('pendaftaran.id_klien', $id_klien); 
        $this->db->order_by('pendaftaran.id', 'desc');
        $this->db->limit(1);

        $query = $this->db->get('pendaftaran');
        return $query->row();
    }

    public function sisa_kuota($id_penjadwalan, $tanggal) { //fungsi untuk menghitung sisa kuota jadwal konseling yang telah di ambil klien
        $this->db->where('id_penjadwalan', $id_penjadwalan);
        $this->db->like('waktu_daftar', $tanggal);
        $ambil = $this->db->get('pendaftaran');
        return $ambil->result();
    }

    public function simpan_pendaftaran($id_klien, $id_penjadwalan, $waktu_daftar) { //fungsi untuk menyimpan pendaftaran yang telah dipilih oleh klien
        $input['id_klien'] = $id_klien;
        $input['id_penjadwalan'] = $id_penjadwalan;
        $input['waktu_daftar'] = $waktu_daftar;
        $this->db->insert('pendaftaran', $input);

        $data_klien['status_konsel'] = "belum selesai";
        $this->db->where('id_user', $input['id_klien']);
        $this->db->update('klien', $data_klien);
        
    }

    public function pendaftaranKlien($id_klien) { //fungsi untuk dapat mengambil jadwal pendaftaran konseling klien yang paling terbaru
        $this->db->join('penjadwalan', 'pendaftaran.id_penjadwalan = penjadwalan.id', 'left');
        $this->db->join('diagnosis', 'diagnosis.id_pendaftaran = pendaftaran.id', 'left');
        $this->db->join('deskripsi_gangguan', 'deskripsi_gangguan.id = diagnosis.id_gangguan', 'left');
        $this->db->where('pendaftaran.id_klien', $id_klien); 
        $this->db->order_by('pendaftaran.id', 'desc');

        $query = $this->db->get('pendaftaran');
        return $query->result();
    }

    public function getIdPsi($id) { // untuk mengambil data seluruh klien 
        $this->db->where('id', $id);
        return $this->db->get('user')->row();
    }

}
