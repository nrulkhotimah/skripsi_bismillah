<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Dataklien extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Admin_m/Dataklien_m');
        $this->load->model('Admin_m/Pendaftaran_m');
        $this->load->library('session');
        
        check_not_login_admin();
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
        $data['user'] = $this->Dataklien_m->getAll();
        foreach ($data['user'] as $key => $value) {
            $id_klien = $value->id_user;
            $pendaftaran[$id_klien] = $this->Pendaftaran_m->pendaftaran_terbaru($id_klien);
            if(!empty($pendaftaran[$id_klien])) {
                $data['jadwal_konseling'][$id_klien] = $pendaftaran[$id_klien]->hari.", ".date("d M Y", strtotime($pendaftaran[$id_klien]->waktu_daftar))." pukul ".$pendaftaran[$id_klien]->waktu;
            } else {
                $data['jadwal_konseling'][$id_klien] = "Belum mendaftar konseling";
            }
        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/klien/Dataklien", $data);
    
    }

    public function save() { //fungsi untuk save registrasi klien
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        // untuk pengaksesan atribut maupun metode dari objek model yang telah dimuat
        // maka dibuatlah variabel $klien untuk menunjuk ke objek dari model yang dimaksud
        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Dataklien_m->save($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_m->getAll();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/footer');
            $this->load->view("admin/klien/Dataklien", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/footer');
            $this->load->view("admin/klien/Tambahklien");
        }

    }

    public function edit($id) { //open page edit klien
        $data['user'] = $this->Dataklien_m->getById($id);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/klien/Editdataklien", $data);
        
    }

    public function update($id) { //fungsi untuk update edit data klien
        if(!isset($id)) redirect('admin/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
      
            $this->Dataklien_m->update($post,$id);
            $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>'); 
            $data['user'] = $this->Dataklien_m->getAll();
            foreach ($data['user'] as $key => $value) {
                $id_klien = $value->id;
                $pendaftaran[$id_klien] = $this->Pendaftaran_m->pendaftaran_terbaru($id_klien);
                if(!empty($pendaftaran[$id_klien])) {
                    $data['jadwal_konseling'][$id_klien] = $pendaftaran[$id_klien]->hari.", ".date("d M Y", strtotime($pendaftaran[$id_klien]->waktu_daftar))." pukul ".$pendaftaran[$id_klien]->waktu;
                } else {
                    $data['jadwal_konseling'][$id_klien] = "Belum mendaftar konseling";
                }
            }
            redirect('Admin/Dataklien/index','refresh');
            
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function delete ($id) {  //fungsi untuk delete data klien
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Dataklien berhasil dihapus</div>'); 
        $data['user'] = $this->Dataklien_m->getAll();
        foreach ($data['user'] as $key => $value) {
            $id_klien = $value->id;
            $pendaftaran[$id_klien] = $this->Pendaftaran_m->pendaftaran_terbaru($id_klien);
            if(!empty($pendaftaran[$id_klien])) {
                $data['jadwal_konseling'][$id_klien] = $pendaftaran[$id_klien]->hari.", ".date("d M Y", strtotime($pendaftaran[$id_klien]->waktu_daftar))." pukul ".$pendaftaran[$id_klien]->waktu;
            } else {
                $data['jadwal_konseling'][$id_klien] = "Belum mendaftar konseling";
            }
        }
        redirect('Admin/Dataklien/index','refresh');
    }

}

?>