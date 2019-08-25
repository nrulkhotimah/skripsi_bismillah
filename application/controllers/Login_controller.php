<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login_controller extends CI_Controller {
    
    // public function __construct() {
    //     parent::__construct();

    //     $this->load->model('login');
    // }

    public function index() {
        // if ($this->session->userdata('authenticated')) {
        //     redirect('page/welcome');

            $this->load->view('login/Login');
        // }
    }

    // public function login () {
    //     $username = $this->input->post('username');
    //     $password = md5 ($this->input->post('password'));
    //     $user = $this->Login->get($username);

    //     if (empty($user)) {
    //         $this->session->set_flashdata('message', 'Username tidak ditemukan');
    //         redirect ('Login');
    //     } else {
    //         if($password == $user-> password) {
    //             $session = array (
    //                 'authenticated'=>true,
    //                 'username'=> $user->username,
    //                 'nama'=> $user->nama
    //             );

    //             $this->session->set_userdata($session);
    //             redirect('page/welcome');
    //         } else {
    //             $this->session->set_flashdata ('message', 'Password salah');
    //             redirect ('Login');
    //         }
    //     }
    // }

    // public function logout () {
    //     $this->session->sess_destroy();
    //     redirect ('Login');
    // }

    
}


?>