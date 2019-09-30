<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Dataklien extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Admin_m/Dataklien_m');
        $this->model = $this->Dataklien_m;
        $this->load->library('session');
        
        check_not_login();
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
        $panggil['nama'] = "nk";
        $data['user'] = $this->Dataklien_m->getAll();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/klien/Dataklien", $data);
    }

    public function add() {
    //     $input = $this->input->post();
    //     $nama = $this->input->post('nama');
    //     $alamat = $this->input->post('alamat');
    //     $nomor_telepon = $this->input->post('nomor_telepon');
    //     $email = $this->input->post('email');
    //     $jenis_kelamin = $this->input->post('jenis_kelamin');
    //     $username = $this->input->post('username');
    //    // $password = md5($this->input->post('password'));

    //     $data1 = array (
    //         'nama'=>$nama,
    //         'alamat'=>$alamat,
    //         'nomor_telepon'=>$nomor_telepon,
    //         'email'=>$email,
    //         'jenis_kelamin'=>$jenis_kelamin,
    //         'role'=>3,
    //         'username'=>$username,
    //        // 'password'=>$password,
    //     );

    //     $marital_status = $this->input->post('marital_status');
    //     $agama = $this->input->post('agama');
    //     $pekerjaan = $this->input->post('pekerjaan');
    //     $tanggal_lahir = $this->input->post('tanggal_lahir');

    //     $data = array (
    //         'marital_status'=>$marital_status,
    //         'agama'=>$agama,
    //         'pekerjaan'=>$marital_status,
    //         'marital_status'=>$marital_status,

    //     )
    //     if($input) {
    //         $this->Dataklien_m->tambah_user($input);
    //         redirect('user', 'refresh');
    //     }
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/klien/Tambahklien");
    }

    public function save() {
        $panggil['nama'] = "nk";
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

    public function edit($id) {
        $data['user'] = $this->Dataklien_m->getById($id);
        // print_r($data);
        // exit();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view("admin/klien/Editdataklien", $data);
        
    }

    public function update($id) {
        if(!isset($id)) redirect('admin/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
      
            // echo "a";
            $this->Dataklien_model->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_m->getAll();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/footer');
            $this->load->view("admin/klien/Dataklien", $data);
       
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function delete ($id) {  
        $this->db->where('id', $id);
        $this->db->delete('user');
        $data['user'] = $this->Dataklien_m->getAll();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/footer');
        $this->load->view('admin/klien/Dataklien', $data);
    }

    public function search() {
       $data['user'] = $this->Dataklien_m->getAll();
       $keyword = $this->input->get('keyword');

        if($this->input->get('keyword')) {
            $where = array(
                'role' => 4
            );
            $data['user'] = $this->Dataklien_model->search($keyword, $where);
        }
        
        $this->load->view('admin/klien/Dataklien', $data);
    }

    public function approve($id) {
        $this->Dataklien_model->approve($id);

      
    }


}

?>