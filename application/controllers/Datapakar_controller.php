<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Datapakar_controller extends CI_Controller {
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

    public function add() {
        $pakar = $this->Datapakar_model;
        $validation = $this->form_validation;
        $validation->set_rules($pakar->rules());

        if($validation->run()) {
            $pakar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        } else {
            var_dump(validation_errors());
        }
        $this->load->view("admin/pakar/Datapakar");
    }

    public function edit($id = null) {
        if(!isset($id)) redirect('admin/pakar/Datapakar');

        $pakar = $this->Datapakar_model;
        $validation = $this->form_validation;
        $validation->set_rules($pakar->rules());

        if($validation->run()) {
            $pakar->save();
            $this->sssion->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pakar"] = $pakar->getById($id);
        if(!data["pakar"]) show_404();

        $this->load->view("admin/pakar/Editdatapakar", $data);
    }

    // public function delete ($id=null) {
    //     if(!isset($id)) show_404() {

    //     }
    // }


}





?>