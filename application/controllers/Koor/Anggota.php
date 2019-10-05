<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Angpsi_m');
        $this->model = $this->Angpsi_m;
        $this->load->library('session');

        check_not_login_koordinator();
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
        $data['user'] = $this->Angpsi_m->getAll();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/angpsi/Angpsikolog.php', $data);
    }

    public function tambah() {
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/angpsi/Tambahangpsi');
    }

    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Angpsi_m->save($post);
            $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            $data['user'] = $this->Angpsi_m->getAll();
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view("koordinator/angpsi/Angpsikolog", $data);
        } else {
            $error = validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view("koordinator/angpsi/Tambahangpsi");
        }
    }

    public function edit($id) {
        $data['user'] = $this->Angpsi_m->getById($id);
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/angpsi/Editangpsi", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('koordinator/angpsi/Angpsikolog');
        $post = $this->input->post();

        $user = $this->Angpsi_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        echo "a";
        $this->Angpsi_m->update($post, $id);
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        $data['user'] = $this->Angpsi_m->getAll();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/angpsi/Angpsikolog", $data);

        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function delete($id) {
   
        $this->db->where('id', $id);
        $this->db->delete('user');
        $data['user'] = $this->Angpsi_m->getAll();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/angpsi/Angpsikolog', $data);
    }

}

?>