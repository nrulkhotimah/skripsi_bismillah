<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Dataklien_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Dataklien_model');
        $this->model = $this->Dataklien_model;
        $this->load->library('session');
    }

    public function index() {
        // membuat data yang akan dikirim ke view dalam bentuk array asosiatif
        $data['user'] = $this->Dataklien_model->getAll();
        // print_r($data);
        // exit();
        $this->load->view("admin/klien/Dataklien", $data);
    }

   public function rules() {
        return [
            ['field' => 'id',
            'label' => 'ID',
            ],

            ['field' => 'kode',
            'label' => 'Kode',
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

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'
            ],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'
            ],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
            ],

            ['field' => 'pekerjaan',
            'label' => 'pekerjaan',
            'rules' => 'required'
            ],

            ['field' => 'marital_status',
            'label' => 'Marital Status',
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
        ];
    }

    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        // untuk pengaksesan atribut maupun metode dari objek model yang telah dimuat
        // maka dibuatlah variabel $klien untuk menunjuk ke objek dari model yang dimaksud
        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Dataklien_model->save($post);
            // $klien->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
            // redirect(base_url('Dataklien_controller'));
           $this->load->view("admin/klien/Dataklien", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("admin/klien/Tambahklien");
        }

    }

    public function add() {
        $this->load->view("admin/klien/Tambahklien");
    }

    public function update($id=null) {
        if(!isset($id)) redirect('admin/klien/Dataklien');

        //$klien = $this->Dataklien_model;
        $validation = $this->form_validation;
        $validation->set_rules($klien->rules());

        if($validation->run()) {
            $this->Dataklien_model->update($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
            $this->load->view("admin/klien/Dataklien", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("admin/klien/Editdataklien");
        }

        $data["klien"] = $klien->getById($id);
        if(!data["klien"]) show_404();

        $this->load->view("admin/klien/Editdataklien", $data);
    }

    public function edit($id) {
        $data['user'] = $this->Dataklien_model->getById($id);
        // print_r($data['user']);
        // exit();
        $this->load->view("admin/klien/Editdataklien", $data);

    }

    public function delete ($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $data['user'] = $this->Dataklien_model->getAll();
        $this->load->view("admin/klien/Dataklien", $data);
    }

}

?>