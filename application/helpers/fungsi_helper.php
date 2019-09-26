<?php 

    function check_already_login() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('id');
        if($user_session) {
            redirect('Admin/Home/index');
        }
    }

    function check_not_login() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('id');
        if(!$user_session) {
            redirect('Login_controller/index');
        }
    }

    function check_admin() {
        $cek =& get_instance();
        $cek->load->library('Fungsi');
        if($cek->fungsi->user_login()->role != 1) {
            redirect('Admin/Home/index');
        }
    }



?>