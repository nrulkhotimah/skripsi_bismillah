<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('klien/Homekoor.php');
	}

    public function editProfilKlien() 
	{
			$this->load->view('klien/Editprofilklien.php');
	}

	public function pendaftaranKlien() 
	{
			$this->load->view('klien/Pendaftaranklien.php');
	}

	public function dataDiagnosis() 
	{
			$this->load->view('klien/Datadiagnosisklien.php');
	}

	public function catatanKonselingKlien() 
	{
			$this->load->view('klien/Catatankonselklien.php');
	}

}