<?php 

    Class Fungsi {
        protected $cek;

        function __construct() {
            $this->cek =& get_instance();
        }

        function user_login() {
            
            $this->cek->load->model('Login_model');
            $id = $this->cek->session->userdata('id');
            // print_r($id);
            // exit();
            $user_data = $this->cek->Login_model->get($id)->row();
            return $user_data;
        }
    }

?>