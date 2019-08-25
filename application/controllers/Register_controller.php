<?php defined('BASEPATH') OR exit('No direct access allowed');

class Register_controller extends CI_Controller {

    // public function __construct () {
    //     parent::__construct();
    //     $this->load->model('Register_model');
    //     $this->load->library(array('form_validation', 'session'));
    //     $this->load->helper(array('url', 'html', 'form'));
    //     $this->user_id = $this->session->userdata('user_id');
    // }

    public function index() {
        $this->load->view('admin/register/registrasi');
    }

    



}



?>