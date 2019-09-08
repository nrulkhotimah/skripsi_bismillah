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

       // check_admin();
    }

    public function index() {
        
        check_already_login();
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
                    'nama' => $row->nama,
                    'nomor_telepon' => $row->nomor_telepon,
                    'role' => $row->role
                );
                $this->session->set_userdata($params);
                if($row->role === '1') {
                    echo "<script> 
                    alert('Selamat, login berhasil');
                    window.location='".site_url('Ad_Home/index')."';
                </script>";
                } elseif ($row->role === '2') {
                    echo "<script> 
                    alert('Selamat, login berhasil');
                    window.location='".site_url('K_Home/index')."';
                </script>";
                } elseif ($row->role === '3') {
                    echo "<script> 
                    alert('Selamat, login berhasil');
                    window.location='".site_url('Ang_Home/index')."';
                </script>";
                } else {
                    echo "<script> 
                    alert('Selamat, login berhasil');
                    window.location='".site_url('Kli_Home/index')."';
                </script>";
                }
            } else {
                echo "<script> 
                    alert('Login gagal');
                    window.location='".site_url('Login_controller/index')."';
                </script>";
            }
            
        }
    }

    public function logout() {
        $params = array('id', 'role');
        $this->session->unset_userdata($params);
        redirect('Login_controller/index');
    }

    
}


?>