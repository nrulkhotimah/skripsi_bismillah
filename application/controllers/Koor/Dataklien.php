<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataklien extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Dataklien_m');
        $this->load->model('Koor_m/Penjadwalan_m');
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

        foreach ($data['user'] as $key => $value) {
            $jadwal = $this->Penjadwalan_m->getPendaftaranBaru($value->id);
            $data['jadwal'][$value->id] = $jadwal;

        }
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Dataklien', $data);
    }

    public function lihatseluruh() {
        $data['user'] = $this->Dataklien_m->getAll();

        foreach ($data['user'] as $key => $value) {
            $jadwal = $this->Penjadwalan_m->getPendaftaranBaru($value->id);
            $data['jadwal'][$value->id] = $jadwal;
        }
        
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Dataklien2', $data);
    }

    public function edit($id) {
        $data['user'] = $this->Dataklien_m->getById($id);
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/klien/Editdataklien", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('koordinator/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            $this->Dataklien_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_m->getAll();
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view("koordinator/klien/Dataklien", $data);
        
        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function catkonsel() {
        $data['diagnosis'] =  $this->Dataklien_m->getKeluhan();

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Catkonselkoor', $data);
    }

    public function editcatkonsel() {
        $data['diagnosis'] =  $this->Dataklien_m->getKeluhan();

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Editcatkonsel', $data);
    }

    public function tambahcat() {
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Tambahcatkonsel');
    }
    public function lihatRiwayat() 
	{
		$this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/Lihatriwayat.php');
	}

	public function riwayat() 
	{
        $data['user'] = $this->Dataklien_m->getAll();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view("koordinator/Riwayatdiagnosis", $data);
    }
    
    public function ubah_status($id_user) {
        $status_konsel = $this->input->get();
        $this->Dataklien_m->ubah_status($id_user, $status_konsel);
        redirect('Koor/Dataklien', 'refresh');
        // print_r($x);
        // exit();
    }

}

?>