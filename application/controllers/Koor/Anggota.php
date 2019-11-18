<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Angpsi_m');
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

	public function index() { //untuk menampilkan seluruh data anggota psikolog
        $data['user'] = $this->Angpsi_m->getAll();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/angpsi/Angpsikolog.php', $data);
    }

    public function tambah() { //open page tambahangsi
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/angpsi/Tambahangpsi');
    }

    public function save() { //untuk proses menyimpan anggota yang telah ditambahkan
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $hasil = $this->Angpsi_m->save($post);
            $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Password : '.$hasil.'</div>');  

            redirect('Koor/Anggota/index', 'refresh');
        } else {
            $error = validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view("koordinator/angpsi/Tambahangpsi");
        }
    }

    public function edit($id) { //open page edit anggota
        $data['user'] = $this->Angpsi_m->getById($id);
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/angpsi/Editangpsi", $data);
    }

    public function update($id) { //untuk proses menyimpan edit data anggota
        if(!isset($id)) redirect('koordinator/angpsi/Angpsikolog');
        $post = $this->input->post();

        $user = $this->Angpsi_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        $this->Angpsi_m->update($post, $id);
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>');

        $data['user'] = $this->Angpsi_m->getAll();
        redirect('Koor/Anggota/index', 'refresh');

        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function delete($id) { //untuk proses menghapus anggota
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>');  
        $data['user'] = $this->Angpsi_m->getAll();

        redirect('Koor/Anggota/index', 'refresh');

    }


}

?>