<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Admin_m/Editprofil_m');
        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login_admin();
    }

    public function index() { //untuk menampilkan page home

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Home');
    }

    public function edit_profil() { //open page edit profil
        $id = $this->session->userdata('id'); //untuk mengambil data profil dari id user yang login
        $data['user'] = $this->Editprofil_m->getById($id); //get id user yang login

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Editprofil', $data);
    }

    public function update($id) {  //proses update untuk edit profil
        $post = $this->input->post();
 
        if(empty($post['password_lama'])) { //jika pass lama kosong ..
            unset($post['password_lama']);
            unset($post['password_baru']);
            unset($post['password_konfirmasi']);
            $this->Editprofil_m->update_profil($post, $id); //memanggil fungsi update profil
            $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>');
            redirect('admin/home/edit_profil', 'refresh'); 
        } else {
            $data_lama = $this->Editprofil_m->getById($id);
            $password_asli = $data_lama->password; //mengambil password lama dari data yang sudah ada
            $post['password'] = md5($post['password_baru']); //mengambil pass baru yang diinputkan melalui $post

            if(md5($post['password_lama'])==$password_asli) { // password lama harus benar, jika pass lama salah maka muncul alert
                if(!empty($post['password_baru'])) { //pass baru harus diinputkan dan tidak boleh kosong
                    if($post['password_baru']==$post['password_konfirmasi']) { //konfirmasi pass harus sama dengan pass baru yang diinputkan
                        unset($post['password_lama']);
                        unset($post['password_baru']);
                        unset($post['password_konfirmasi']);
                        $this->Editprofil_m->update_profil($post, $id); //melakukan update pada password dengan mengganti pass lama dengan pass yang baru
                        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Password telah diubah</div>');
                        redirect('admin/home/edit_profil', 'refresh'); 
                    } else {
                        $this->session->set_flashdata('sukses', '<div class= "alert alert-danger">Konfirmasi password salah</div>');
                        redirect('admin/home/edit_profil', 'refresh'); 
                    }
                } else {
                    $this->session->set_flashdata('sukses', '<div class= "alert alert-danger">Password baru tidak boleh kosong</div>');
                    redirect('admin/home/edit_profil', 'refresh'); 
                }
            } else {
                $this->session->set_flashdata('sukses', '<div class= "alert alert-danger">Password lama salah</div>');
                redirect('admin/home/edit_profil', 'refresh'); 
            }
        }
    }
}


?>