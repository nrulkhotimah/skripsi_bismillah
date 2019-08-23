<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/Home.php');
	}
	
	public function editProfil()
	{
			$this->load->view('admin/Editprofil.php');
	}
	

	public function penjadwalan()
	{
		$this->load->view('admin/Penjadwalan1.php');
	}

	public function pilihJadwal()
	{
		$this->load->view('admin/Penjadwalan2.php');
	}
}
