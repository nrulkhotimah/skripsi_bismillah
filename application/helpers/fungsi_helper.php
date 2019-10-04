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

    // function check_admin() {
    //     $cek =& get_instance();
    //     $cek->load->library('Fungsi');
    //     if($cek->fungsi->user_login()->role != 1) {
    //         redirect('Admin/Home/index');
    //     }
    // }

    //buat cek not login koordinator dkknya
    function check_not_login_admin() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('role');
        if($user_session != 1) {
           // $cek->session->unset_userdata();
            redirect('Login_controller/index');
        }
    }



?>