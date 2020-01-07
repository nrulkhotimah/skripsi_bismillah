<?php 

    function check_already_login() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('id');
        if($user_session) {
            redirect('Admin/Home/index');
        }
    }

    //buat cek not login koordinator dkknya
    function check_not_login_admin() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('role');
        if($user_session != 1) {
            redirect('Login_controller/index');
        }
    }

    function check_not_login_koordinator() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('role');
        if($user_session != 2) {
            redirect('Login_controller/index');
        }
    }

    function check_not_login_anggota() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('role');
        if($user_session != 3) {
            redirect('Login_controller/index');
        }
    }

    function check_not_login_klien() {
        $cek =& get_instance();
        $user_session = $cek->session->userdata('role');
        if($user_session != 4) {
            redirect('Login_controller/index');
        }
    }

    function nama_session() {
        $CI =& get_instance();
        $data = $CI->session->userdata("nama");
        return $data;
    }

    function hari_indonesia($hari_inggris) {
        if ($hari_inggris == "Sun") {
            $hari_indonesia = "Minggu";
        } elseif($hari_inggris == "Mon") {
            $hari_indonesia = "Senin";
        } elseif($hari_inggris == "Tue") {
            $hari_indonesia = "Selasa";
        } elseif($hari_inggris == "Wed") {
            $hari_indonesia = "Rabu";
        } elseif($hari_inggris == "Thu") {
            $hari_indonesia = "Kamis";
        } elseif($hari_inggris == "Fri") {
            $hari_indonesia = "Jumat";
        } elseif($hari_inggris == "Sat") {
            $hari_indonesia = "Sabtu";
        }
    
        return $hari_indonesia;
    }

?>