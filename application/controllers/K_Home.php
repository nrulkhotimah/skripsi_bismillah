<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
        $this->load->model('Ad_Editprofil_m');
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

	public function index()
	{
		$this->load->view('koordinator/Home.php');

	}
	
	public function editProfil() {
		$id = $this->session->userdata('id');
		$data['user'] = $this->Ad_Editprofil_m->getById($id);
		// var_dump($data['user']);die;
		$this->load->view('koordinator/Editprofil', $data);
	}

	public function update($id) {
		$post = $this->input->post();
		if(!isset($id)) redirect('koordinator/Editprofil');
		$user = $this->Ad_Editprofil_m->getById($id);
		if($user->password !== MD5($post['password_lama'])):
			$this->session->set_flashdata('success', 'Masukkan password lama');
			redirect('K_Home/editProfil');
		endif;

		$user = $this->Ad_Editprofil_m;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		$this->Ad_Editprofil_m->update($id);
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('K_Home/editProfil');

		$data['user'] = $user->getById($id);

		if(!$data['user']) show_404();
	}

	public function lihatRiwayat() 
	{
		
			$this->load->view('koordinator/Lihatriwayat.php');
	}

	public function riwayat() 
	{
		// $data['user'] = $this->K_Dataklien_m->getAll();
		$this->load->view("koordinator/Riwayatdiagnosis");
	}

	

    
}
