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

    public function rules() {
        return [
            ['field' => 'id',
            'label' => 'ID',
            ],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'
            ],

            ['field' => 'nomor_telepon',
            'label' => 'Nomor Telepon',
            'rules' => 'numeric', 'required'
            ],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
            ],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'valid_email', 'required'
            ],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
            ],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
            ],

        ];
    }

    public function index() {
        $data['nama'] = "admin";
        //  check_not_login();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Home', $data);
    }

    public function edit_profil() {
        $id = $this->session->userdata('id');
        $data['user'] = $this->Editprofil_m->getById($id);
        // var_dump($data['user']);die;
        // print_r($data);
        // exit();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/Editprofil', $data);
    }

    public function update($id) {
        $post = $this->input->post();

        if(empty($post['password_lama'])) {
            unset($post['password_lama']);
            unset($post['password_baru']);
            unset($post['password_konfirmasi']);
            $this->Editprofil_m->update_profil($post, $id);
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
                        redirect('admin/home/edit_profil', 'refresh'); 
                    } else {
                        $this->session->set_flashdata('success', 'konfirmasi pass salah');
                        redirect('admin/home/edit_profil', 'refresh'); 
                    }
                } else {
                    $this->session->set_flashdata('success', 'pass baru tidak boleh kosong');
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