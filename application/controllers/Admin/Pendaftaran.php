<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_m/Pendaftaran_m');
        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login();
        // check_admin();
        
    }

    public function index() {
        $data['user'] = $this->Pendaftaran_m->getAll();
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pendaftaran', $data);
    }

    public function pilih_jadwal() {
        $data['penjadwalan'] = $this->Pendaftaran_m->getPenjadwalan();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Pilihjadwal', $data);
    }
}

?>