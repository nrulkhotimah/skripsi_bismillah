<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        $this->load->model('Login_model');
        $this->load->model('Admin_m/Dataklien_m');

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {

        $this->load->view('login/Login');
    }

    public function loginB () {
        $this->load->view('login/LoginBaru');
    }

    public function user_login() {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])) {
            $this->load->model('Login_model');
            $query = $this->Login_model->login($post);
            if($query->num_rows() > 0) {
                $row = $query->row();

                if ($row->role == 4) {
                    $data_klien = $this->Dataklien_m->getById($row->id);
                    if ($data_klien->approve==1) {
                        $status_login = "lanjut";
                    } else {
                        $status_login = "";

                    }
                } else {
                    $status_login = "lanjut";
                }

                if ($status_login=="lanjut") {
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
                        window.location='".site_url('Admin/Home/index')."';
                    </script>";
                    } elseif ($row->role === '2') {
                        echo "<script> 
                        alert('Selamat, login berhasil');
                        window.location='".site_url('Koor/Home/index')."';
                    </script>";
                    } elseif ($row->role === '3') {
                        echo "<script> 
                        alert('Selamat, login berhasil');
                        window.location='".site_url('Ang/Home/index')."';
                    </script>";
                    } else {
                        echo "<script> 
                        alert('Selamat, login berhasil');
                        window.location='".site_url('Klien/Home/index')."';
                    </script>";
                    }
                } else {
                    echo "<script> 
                    alert('Login gagal');
                    window.location='".site_url('Login_controller/index')."';
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