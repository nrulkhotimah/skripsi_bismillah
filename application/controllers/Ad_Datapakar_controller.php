<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Ad_Datapakar_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Datapakar_model');
        $this->load->helper('url_helper');
        $this->model = $this->Datapakar_model;
        $this->load->library('session');
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

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'
            ],

            ['field' => 'role',
            'label' => 'Hak Akses',
            'rules' => 'required'
            ],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
            ],
        ];
    }

    public function index() {
        $data['user'] = $this->Datapakar_model->getAll();
        // print_r($data);
        // exit();
        $this->load->view("admin/pakar/Datapakar", $data);
    }

    public function edit($id) {
        $data['user'] = $this->Datapakar_model->getById($id);
        // print_r($data);
        // exit();
        $this->load->view("admin/pakar/Editdatapakar", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('admin/pakar/Datapakar');
        $post = $this->input->post();

        $user = $this->Datapakar_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        echo "a";
        $this->Datapakar_model->update($post, $id);
        $this->session->set_flashdata('success', '');

        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $data['user'] = $this->Datapakar_model->getAll();

        $this->load->view("admin/pakar/Datapakar", $data);
    }


}





?>