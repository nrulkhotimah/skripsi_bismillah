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
	
	public function dataKlien() 
	{
			$this->load->view('admin/klien/Dataklien.php');
	}

	public function tambahKlien()
	{
		$this->load->view('admin/klien/Tambahklien.php');
	}

	public function editDataKlien() 
	{
			$this->load->view('admin/klien/Editdataklien.php');
	}
	
	public function dataPakar()
	{
		$this->load->view('admin/pakar/Datapakar.php');
	}

	public function editDataPakar()
	{
		$this->load->view('admin/pakar/Editdatapakar.php');
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
