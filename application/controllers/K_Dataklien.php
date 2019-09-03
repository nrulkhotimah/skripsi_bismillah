<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Dataklien extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('K_Dataklien_m');
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
        $data['user'] = $this->K_Dataklien_m->getAll();
        $this->load->view('koordinator/klien/Dataklien', $data);
    }

    public function edit($id) {
        $data['user'] = $this->K_Dataklien_m->getById($id);

        $this->load->view("koordinator/klien/Editdataklien", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('koordinator/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->K_Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            echo "a";
            $this->K_Dataklien_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->K_Dataklien_m->getAll();
            $this->load->view("koordinator/klien/Dataklien", $data);
        
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function catkonsel() {
        $this->load->view('koordinator/klien/Catkonselkoor');
    }

    


}

?>