<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Lupa_password extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        $this->load->model('Lupa_password_m');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function index() {
       $inputan = $this->input->post();
       if ($inputan) {
           $hasil = $this->Lupa_password_m->kirim($inputan);
           if ($hasil=="sukses") {
               $this->session->set_flashdata('msg', '<div class="alert alert-info"> Permintaan anda berhasil. Silahkan cek inbox email anda  </div> ');
               redirect('Login_controller/index');
           } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning"> email yang anda masukkan salah </div> ');
            redirect('Lupa_password');
               
           }
       }

       $this->load->view('login/Lupapassword');
    }


    
}


?>