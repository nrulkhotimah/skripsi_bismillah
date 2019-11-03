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

    public function index() {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Home');
    }

    public function edit_profil() { //open hpage edit profil
        $id = $this->session->userdata('id');
        $data['user'] = $this->Editprofil_m->getById($id);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Editprofil', $data);
    }

    public function update($id) { //untuk update edit profil
        $post = $this->input->post();

        if(empty($post['password_lama'])) {
            unset($post['password_lama']);
            unset($post['password_baru']);
            unset($post['password_konfirmasi']);
            $this->Editprofil_m->update_profil($post, $id);
            $this->session->set_flashdata('success', 'Perubahan berhasil disimpan');
            redirect('admin/home/edit_profil', 'refresh'); 
        } else {
            $data_lama = $this->Editprofil_m->getById($id);
            $password_asli = $data_lama->password;
            $post['password'] = md5($post['password_baru']);

            if(md5($post['password_lama'])==$password_asli) {
                if(!empty($post['password_baru'])) {
                    if($post['password_baru']==$post['password_konfirmasi']) {
                        unset($post['password_lama']);
                        unset($post['password_baru']);
                        unset($post['password_konfirmasi']);
                        $this->Editprofil_m->update_profil($post, $id);
                        $this->session->set_flashdata('success', 'password telah diubah');
                        redirect('admin/home/edit_profil', 'refresh'); 
                    } else {
                        $this->session->set_flashdata('success', 'konfirmasi password salah');
                        redirect('admin/home/edit_profil', 'refresh'); 
                    }
                } else {
                    $this->session->set_flashdata('success', 'password baru tidak boleh kosong');
                    redirect('admin/home/edit_profil', 'refresh'); 
                }
            } else {
                $this->session->set_flashdata('success', 'password lama salah');
                redirect('admin/home/edit_profil', 'refresh'); 
            }
        }

    }

}


?>