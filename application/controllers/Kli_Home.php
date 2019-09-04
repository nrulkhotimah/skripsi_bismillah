<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kli_Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        check_not_login();
    }

	public function index()
	{
		$this->load->view('klien/Home.php');
	}

    public function editProfil() 
	{
			$this->load->view('klien/Editprofil.php');
	}

	public function pendaftaran() 
	{
			$this->load->view('klien/Pendaftaran.php');
	}


}