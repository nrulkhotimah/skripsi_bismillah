<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Klien_m/Pendaftaran_m');
        $this->load->model('Admin_m/Datapakar_m');
        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login_klien();
        
    }

    public function index() {
        $id_user = $this->session->userdata("id");

        $data_pendaftaran = $this->Pendaftaran_m->pendaftaran_terbaru($id_user);
        if (empty($data_pendaftaran)) {
            $data['user'] = $this->Datapakar_m->getAll();
        } else {

            $data['user'][] = $this->Datapakar_m->getById($data_pendaftaran->id_user);
        }

        $this->load->view('klien/Pendaftaran', $data);
    }

    public function pilih_jadwal($id_psikolog) { //untuk memilih jadwal 
        $data['id_klien'] = $this->session->userdata('id'); //untuk mengirimkan id_user dari views
        $data['psikolog'] = $this->Datapakar_m->getById($id_psikolog);
        $data['penjadwalan'] = $this->Pendaftaran_m->getPenjadwalans($id_psikolog); //untuk memanggil function getPenjadwalan
        

        foreach ($data['penjadwalan'] as $key => $value) {
            $hari_jadwal[] = $value->hari; //mengambil data hari
            $data['jadwal'][$value->hari] = $value;
            $data['waktu_daftar'][$value->hari] = $value->waktu_daftar; // ?
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

        foreach ($data['waktu_daftar'] as $hari => $value) {
            // $id_penjadwalan = $value->id;
            $data['cek_pendaftaran'][$id_penjadwalan] = $this->Pendaftaran_m->cek_pendaftaran_kliens($value, $data['id_klien']);
        }



        $this->load->view('klien/Pilihjadwal', $data);

    }

    public function simpan_jadwal($id_klien, $id_penjadwalan, $tanggal_daftar) { //untuk menyimpan jadwal yang telah di pilih klien
        $this->Pendaftaran_m->simpan_pendaftaran($id_klien, $id_penjadwalan, $tanggal_daftar);
        $this->session->set_flashdata('alert', '<div class="alert alert-success">Jadwal Berhasil disimpan</div>');
        redirect('klien/Home/datadiagnosis','refresh');
        
    }


}

?>