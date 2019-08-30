<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class LoginPage_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {
        //allowing akses to admin only
        if ($this->session->userdata('role') === '1') {
            $this->load->view('');
        } else {
            echo "Access Denied";
        }
    }
    
    public function koordinator() {
        //allowing akses to koordinator psikolog ony 
        if ($this->session->userdata('role') === '2') {
            $this->load->view('');
        } else {
            echo "Access Denied";
        }
    }

    public function anggota() {
        //allowing akses to anggota psikolog only 
        if ($this->session->userdata('role') === '3') {
            $this->load->view('');
        } else { 
            echo "Access Denied";
        }
    }

    public function klien() {
        //allowing akses to klien only 
        if ($this->session->userdata('role') === '4') {
            $this->load->view('');
        } else {
            echo "Access Denied";
        }
    }

}



?>