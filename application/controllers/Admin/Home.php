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
        if(!isset($id)) redirect('admin/Editprofil');
        $user = $this->Editprofil_m->getById($id);
        if($user->password !== MD5($post['password_lama'])):
            $this->session->set_flashdata('success', 'Password salah');
            redirect('Ad_Home/edit_profil');
        endif;

        $user = $this->Editprofil_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        $this->Ad_Editprofil_m->update($id);
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('Ad_Home/edit_profil');
       
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

}


?>