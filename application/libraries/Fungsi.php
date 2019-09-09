<?php 

    Class Fungsi {
        protected $cek;

        function __construct() {
            $this->cek =& get_instance();
        }

        function user_login() {
            
            $this->cek->load->model('Login_model');
            $id = $this->cek->session->userdata('id');
            $user_data = $this->cek->Login_model->login($id)->row();
            // print_r($user_data);
            // exit();
            return $user_data;
        }
    }

?>