<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kli_Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('Kli_Editprofil_m');
        $this->load->helper('url_helper');
		$this->load->library('session');
		
        check_not_login();
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
			
			['field' => 'jenis_kelamin',
			'label' => 'Jenis Kelamin',
			'rules' => 'required'
			],

			['field' => 'marital_status',
			'label' => 'Marital Status',
			'rules' => 'required'
			],

			['field' => 'agama',
			'label' => 'Agama',
			'rules' => 'required'
			],

			['field' => 'pekerjaan',
			'label' => 'Pekerjaan',
			'rules' => 'required'
			],

			['field' => 'tanggal_lahir',
			'label' => 'Tanggal Lahir',
			'rules' => 'required'
			],

            ['field' => 'nomor_telepon',
            'label' => 'Nomor Telepon',
            'rules' => 'numeric', 'required'
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
            'rules' => 'required'
            ],

        ];
    }

	public function index() {

		$this->load->view('klien/Home.php');
	}

	public function home2() {
		$this->load->view('klien/Home2');
	}

    public function editProfil() {

		$id = $this->session->userdata('id');
		$data['user'] = $this->Kli_Editprofil_m->getById($id);
		// print_r($data); exit();

		$this->load->view('klien/Editprofil', $data);
	}

	public function update($id) {
		$post = $this->input->post();
		if(!isset($id)) redirect('klien/Home');
	
	}

	public function pendaftaran() 
	{
			$this->load->view('klien/Pendaftaran.php');
	}


}