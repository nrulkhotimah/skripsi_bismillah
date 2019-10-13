<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_m/Pendaftaran_m');
        $this->load->model('Admin_m/Datapakar_m');

        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login_admin();
        
    }

    public function index() {
        $data['user'] = $this->Pendaftaran_m->getAll();
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pendaftaran', $data);
    }

    // public function pilih_jadwal() {
    //     $data['penjadwalan'] = $this->Pendaftaran_m->getPenjadwalan();

    //     $this->load->view('admin/template/header');
    //     $this->load->view('admin/template/footer');
    //     $this->load->view('admin/Pilihjadwal', $data);
    // }

    public function pilih_psikolog($id_user) {

        $data['user'] = $this->Datapakar_m->getAll();
        $data['id_user'] = $id_user;

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pilihpsikolog', $data);
    }

    public function pilih_jadwal($id_user, $id_psikolog) {
        $data['penjadwalan'] = $this->Pendaftaran_m->getPenjadwalan($id_psikolog);
        foreach ($data['penjadwalan'] as $key => $value) {
            $hari_jadwal[] = $value->hari;
            $data['jadwal'][$value->hari] = $value;
        }

        date_default_timezone_set("Asia/Jakarta");
        $sekarang = date("Y-m-d");
        $timestamp = strtotime($sekarang);
        for ($i=0; $i < 7; $i++) { 
            $data['tanggal'][date("D", $timestamp)] = date("Y-m-d", $timestamp);
            $timestamp = strtotime('+1 day', $timestamp);
        }

        foreach ($data['tanggal'] as $hari => $tanggal) {
            if(in_array($hari, $hari_jadwal)){
                $data['tanggal_muncul'][] = $tanggal;
            }
        }
        

        foreach ($data['tanggal'] as $hari => $tanggal) {
            if(isset($data['jadwal'][$hari])) {
                $id_penjadwalan = $data['jadwal'][$hari]->id;
                $data['sisa_kuota'][$hari] = count($this->Pendaftaran_m->sisa_kuota($id_penjadwalan, $tanggal));
            }
        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pilihjadwal', $data);

        // echo"<pre>";
        // print_r($data);
        // // exit();
        // echo"</pre>";
    }


}

?>