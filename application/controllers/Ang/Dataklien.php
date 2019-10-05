<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataklien extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Ang_m/Dataklien_m');
        $this->load->library('session');

        check_not_login_anggota();
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
       $data['user'] = $this->Dataklien_m->getAll();
       $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/klien/Dataklien', $data);
    }

    public function edit($id) {
        $data['user'] = $this->Dataklien_m->getById($id);
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view("anggota/klien/Editdataklien", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('anggota/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Ang_Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            echo "a";
            $this->Ang_Dataklien_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Ang_Dataklien_m->getAll();
            $this->load->view("anggota/klien/Dataklien", $data);
        
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function catkonsel() {
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/klien/Catkonselkoor');
    }

    public function tambahcatatan() {
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/klien/Tambahcatatan');
    }

    public function riwayat() {
		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Riwayatdiagnosis');
	}

	public function lihatRiwayat() {
		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Lihatriwayat');
	}
    


}

?>