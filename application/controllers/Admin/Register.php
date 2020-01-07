<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Admin_m/Dataklien_m');
        $this->load->library('session');
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
        $this->load->view('klien/register/registrasi');
    }

    public function post_register() {
        $post = $this->input->post();
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());
        
        if($validation->run()) {

            $hasil = $this->Dataklien_m->tambah_user($post);
            if ($hasil=="sukses") {
            $this->session->set_flashdata('msg', '<div class="alert alert-info">Pendaftaran Anda berhasil. Selanjutnya silahkan cek email Anda untuk mengaktifkan akun. Kemudian silahkan untuk Login</div>');
            redirect('Login_controller/index');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">Pendaftaran Anda gagal. Email Anda salah. </div>');
                redirect('klien/register/Registrasi/index');
            }
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('msg', '<div class="alert alert-warning">Gagal disimpan</div>');
            $this->load->view("klien/register/Registrasi");
        }
    }

    public function aktivasi($username) { //untuk melakukan aktivasi user yang baru melakukan registrasi
        $this->Dataklien_m->approve($username);
        $this->session->set_flashdata('msg', '<div class="alert alert-info">Aktivasi akun Anda berhasil. Silahkan login sesuai akun Anda </div>');
        redirect('Login_controller');

    }


}

?>
