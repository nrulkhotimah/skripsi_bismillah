<?php 

    function check_already_login() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('id');
        if($user_session) {
            redirect('Ad_Home/index');
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
        $cek->load-library('fungsi');
        if($cek->fungsi->user_login()->role != 1) {
            redirect('Login_controller/index');
        }
    }


?>