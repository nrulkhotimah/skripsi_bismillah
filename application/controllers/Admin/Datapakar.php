<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Datapakar extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Admin_m/Datapakar_m');
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
        $data['status'][1] = "admin"; //untuk menampilkan status hak akses pakar
        $data['status'][2] = "koordinator";
        $data['status'][3] = "anggota";
        $data['status'][4] = "klien";
        
        $data['user'] = $this->Datapakar_m->getAll();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/pakar/Datapakar", $data);
    }

    public function edit($id) { //open page edit data pakar
        $data['user'] = $this->Datapakar_m->getById($id);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/pakar/Editdatapakar", $data);
    }

    public function update($id) { //untuk update edit data pakar
        $data['status'][1] = "admin";
        $data['status'][2] = "koordinator";
        $data['status'][3] = "anggota";
        $data['status'][4] = "klien";
        
        if(!isset($id)) redirect('admin/pakar/Datapakar');
        $post = $this->input->post();
        $user = $this->Datapakar_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        $this->Datapakar_m->update($post, $id);
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>'); 
        $data['user'] = $this->Datapakar_m->getAll();
        redirect('Admin/Datapakar/index', 'refresh');

        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function delete($id) { //untuk menghapus data pakar
        $data['status'][1] = "admin";
        $data['status'][2] = "koordinator";
        $data['status'][3] = "anggota";
        $data['status'][4] = "klien";

        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Datapakar berhasil dihapus</div>'); 
        $data['user'] = $this->Datapakar_m->getAll();
        
        redirect('Admin/Datapakar/index', 'refresh');
    }




}





?>