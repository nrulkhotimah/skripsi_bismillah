<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Home extends CI_Controller {

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
			$this->load->view('koordinator/Riwayatdiagnosis.php');
	}

	

    
}
