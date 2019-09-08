<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
        $this->load->model('K_Dataklien_m');
		$this->load->library('session');
		
        check_not_login();
    }

	public function index()
	{
		$this->load->view('koordinator/Home.php');

	}
	
	public function editProfil() 
	{
			$this->load->view('koordinator/Editprofil.php');
	}

	public function lihatRiwayat() 
	{
		
			$this->load->view('koordinator/Lihatriwayat.php');
	}

	public function riwayat() 
	{
		$data['user'] = $this->K_Dataklien_m->getAll();
		$this->load->view("koordinator/Riwayatdiagnosis", $data);
	}

	

    
}
