<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Angpsi extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('K_Angpsi_m');
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
            'rules' => 'rules'
        ],
        ];
    }

	public function index()
	{
        $data['user'] = $this->K_Angpsi_m->getAll();
        $this->load->view('koordinator/angpsi/Angpsikolog.php', $data);
    }

    public function tambah() {
        $this->load->view('koordinator/angpsi/Tambahangpsi');
    }

    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->K_Angpsi_m->save($post);
            $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            $data['user'] = $this->K_Angpsi_m->getAll();
            $this->load->view("koordinator/angpsi/Angpsikolog", $data);
        } else {
            $error = validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("koordinator/angpsi/Tambahangpsi");
        }
    }

    public function edit() {
        $this->load->view('koordinator/angpsi/Editangpsi');
    }

}

?>