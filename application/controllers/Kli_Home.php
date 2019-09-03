<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kli_Home extends CI_Controller {

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

	public function data() 
	{
			$this->load->view('klien/diagnosis/Data.php');
	}

	public function catatan() 
	{
			$this->load->view('klien/diagnosis/Catkonsel.php');
	}

}