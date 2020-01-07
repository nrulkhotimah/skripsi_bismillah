<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_m/Pendaftaran_m');
        $this->load->model('Admin_m/Datapakar_m');
        $this->load->model('Admin_m/Dataklien_m');

        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login_admin();
        
    }

    public function index() { //untuk menampilkan halaman pendaftaran
        $data['user'] = $this->Pendaftaran_m->getAll(); //menampilkan seluruh klien yang ada
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pendaftaran', $data);
    }

    public function pilih_psikolog($id_user) { //untuk memilih psikolog
        $data['id_user'] = $id_user;
        $data_pendaftaran = $this->Pendaftaran_m->pendaftaran_terbaru($id_user); //untuk mengambil data nama psikolog yang pernah diambil sebelumnya
        if (empty($data_pendaftaran)) {
            $data['user'] = $this->Datapakar_m->getAll(); //menampilkan seluruh nama psikolog
        } else {
            $data['user'][] = $this->Datapakar_m->getById($data_pendaftaran->id_user); //menampilkan nama psikolog yang pernah diambil sebelumnya
        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pilihpsikolog', $data);
    }

    public function pilih_jadwal($id_user, $id_psikolog) { //untuk memilih jadwal 
        $data['id_klien'] = $id_user; //untuk mengirimkan id_user dari views
        $data['penjadwalan'] = $this->Pendaftaran_m->getPenjadwalan($id_psikolog); //untuk memanggil function getPenjadwalan
        foreach ($data['penjadwalan'] as $key => $value) {
            $hari_jadwal[] = $value->hari; //mengambil data hari
            $data['jadwal'][$value->hari] = $value; // ?
        }

        date_default_timezone_set("Asia/Jakarta");
        $sekarang = date("Y-m-d");
        $timestamp = strtotime($sekarang);
        for ($i=0; $i < 7; $i++) {  
            $data['tanggal'][date("D", $timestamp)] = date("Y-m-d", $timestamp);
            $timestamp = strtotime('+1 day', $timestamp);
        }

        foreach ($data['tanggal'] as $hari => $tanggal) {
            if(in_array($hari, $hari_jadwal)){ //untuk menampilkan jadwal dari waktu hari ini hingga keminggu kedepan
                $data['tanggal_muncul'][] = $tanggal;
            }
        }
    
        foreach ($data['tanggal'] as $hari => $tanggal) {
            if(isset($data['jadwal'][$hari])) { 
                $id_penjadwalan = $data['jadwal'][$hari]->id;
                $data['sisa_kuota'][$hari] = count($this->Pendaftaran_m->sisa_kuota($id_penjadwalan, $tanggal)); //untuk memanggil function sisa_kuota
            }
        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pilihjadwal', $data);

    }

    public function simpan_jadwal($id_klien, $id_penjadwalan, $tanggal_daftar) { //untuk menyimpan jadwal yang telah di pilih klien
        $this->Pendaftaran_m->simpan_pendaftaran($id_klien, $id_penjadwalan, $tanggal_daftar);
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Jadwal berhasil disimpan</div>'); 
        
        redirect('admin/Dataklien/index','refresh');
        
    }

    public function hapus_pendaftaran() {
        $data['user'] = $this->Dataklien_m->getAll();
        foreach ($data['user'] as $key => $value) {
            $id_klien = $value->id_user;
            $pendaftaran[$id_klien] = $this->Pendaftaran_m->pendaftaran_terbarus($id_klien);
            
            
             //untuk dapat mengambil jadwal pendaftaran konseling klien yang paling terbaru
            if(!empty($pendaftaran[$id_klien])) {
                $dataDiagnosis =  $this->Pendaftaran_m->check_data_diagnosis($pendaftaran[$id_klien]->id_pendaftarans);
                if(empty($dataDiagnosis)):
                $data['jadwal_konseling'][$id_klien] = $pendaftaran[$id_klien]->hari.", ".date("d M Y", strtotime($pendaftaran[$id_klien]->waktu_daftar))." pukul ".$pendaftaran[$id_klien]->waktu;
                $data['id_pendaftaran'][$id_klien] = $pendaftaran[$id_klien]->id_pendaftarans;
                endif;
            } else {
                // $data['jadwal_konseling'][$id_klien] = "Belum mendaftar konseling";
            }

        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Hapuspendaftaran', $data);
    }

    public function hapus_daftar($id) {
        
        $this->db->where('id', $id);
        $this->db->delete('pendaftaran');
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Jadwal berhasil dihapus</div>'); 
        $data['user'] = $this->Dataklien_m->getAll();

        redirect('Admin/Pendaftaran/hapus_pendaftaran','refresh');
        
    }


}

?>