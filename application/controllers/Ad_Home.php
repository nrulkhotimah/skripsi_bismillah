<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Ad_Home extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Ad_Editprofil_m');
        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login();
        // check_admin();
        
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
        $this->load->view('admin/Home', $data);
    }

    public function edit_profil() {
        $data['user'] = $this->Ad_Editprofil_m->getById($id);
        print_r($data);
        exit();

        $this->load->view('admin/Editprofil', $data);
    }

    // public function update($id) {
    //     if(!isset($id)) redirect('admin/Editprofil');
    //     $post = $this->input->post();

    //     $user = $this->Ad_Editprofil_m;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($user->rules());
      
    //         echo "a";
    //         $this->Ad_Editprofil_m->update($post,$id);
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //         $data['user'] = $this->Ad_Editprofil_m->getAll();
    //         $this->load->view("admin/Editprofil", $data);
       
    //     $data['user'] = $user->getById($id);

    //     if(!$data['user']) show_404();
    // }



}


?>