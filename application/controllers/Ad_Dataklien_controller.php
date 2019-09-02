<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Ad_Dataklien_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Dataklien_model');
        $this->model = $this->Dataklien_model;
        $this->load->library('session');
        

        
      //  check_not_login();
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
  
    public function index() {
        // membuat data yang akan dikirim ke view dalam bentuk array asosiatif
        $data['nama'] = "nk";
        $data['user'] = $this->Dataklien_model->getAll();
        $this->load->view("admin/klien/Dataklien", $data);
    }

    public function add() {
        $this->load->view("admin/klien/Tambahklien");
    }

    public function save() {
        $data['nama'] = "nk";
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        // untuk pengaksesan atribut maupun metode dari objek model yang telah dimuat
        // maka dibuatlah variabel $klien untuk menunjuk ke objek dari model yang dimaksud
        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Dataklien_model->save($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
           $this->load->view("admin/klien/Dataklien", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("admin/klien/Tambahklien");
        }

    }

    public function edit($id) {
        $data['user'] = $this->Dataklien_model->getById($id);
        
        $this->load->view("admin/klien/Editdataklien", $data);
        // print_r($data);
        // exit();
    }

    public function update($id) {
        if(!isset($id)) redirect('admin/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
      
            echo "a";
            $this->Dataklien_model->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
            $this->load->view("admin/klien/Dataklien", $data);
       
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function delete ($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $data['user'] = $this->Dataklien_model->getAll();

        $this->load->view('admin/klien/Dataklien', $data);
    }

    public function search() {
       $data['user'] = $this->Dataklien_model->getAll();
       $keyword = $this->input->get('keyword');

        if($this->input->get('keyword')) {
        $data['user'] = $this->Dataklien_model->search($keyword);
        }
        
        $this->load->view('admin/klien/Dataklien', $data);
    }

    public function open_register() {
        $this->load->view('admin/register/registrasi');
    }

    public function post_register() {
        $post = $this->input->post();
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));
       // $this->id = $this->session->userdata('id');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());
        

        if($validation->run()) {
            $this->Dataklien_model->tambah_user($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
            $this->load->view("admin/register/Pageverif", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("admin/register/Registrasi");
        }

    }

    public function open_verif() {
        $this->load->view('admin/register/Pageverif');

    }

    public function approve($id) {
        $this->Dataklien_model->approve($id);

        

  

        // print_r($id);
        // exit();

        

    }


}

?>