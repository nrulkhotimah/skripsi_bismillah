<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        $this->load->model('Login_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
            $this->load->view('login/Login');
    }

    public function user_login() {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])) {
            $this->load->model('Login_model');
            $query = $this->Login_model->login($post);
            if($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'role' => $row->role
                );
                $this->session->set_userdata($params);
                echo "<script> 
                    alert('Selamat, login berhasil');
                    window.location='".site_url('Ad_Home/index')."';
                </script>";
            } else {
                echo "<script> 
                    alert('Login gagal');
                    window.location='".site_url('Login_controller/index')."';
                </script>";
            }
            
        }
    }

    public function logout() {
        $this->session->session_destroy();
        redirect('login/Login');
    }

    
}


?>