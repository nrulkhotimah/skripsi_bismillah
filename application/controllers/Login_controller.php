<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        $this->load->model('Login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
            $this->load->view('login/Login');
    }

    public function user_login() {
      $username = $this->input->post('username', TRUE);
      $password = $this->input->post('password', TRUE);
      $validate = $this->Login_model->validate($username, $password);

      if ($validate->num_rows() > 0) {
          $data = $validate->row_array();
          $nama = $data['nama'];
          $username = $data['username'];
          $role = $data['role'];
          $session_data =  array(
              'nama' => $nama,
              'username' => $username,
              'role' => $role,
              'logged_in' => TRUE);
        $this->session->set_userdata($session_data);

        if($role === 'admin') {
            redirect('Ad_Dataklien_controller/index');
        } elseif($role === 'koordinator') {
            redirect('Ad_Datapakar_controller/index');
        } elseif($role === 'anggota') {
            redirect('Ad');
        } else {
            redirect('');
        }
      } else {
          echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
          redirect('login');
      }
    }

    public function logout() {
        $this->session->session_destroy();
        redirect('login');
    }

    
}


?>