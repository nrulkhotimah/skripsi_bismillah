<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Home extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/Homekoor.php');
	}
	
	public function editProfilKoor() 
	{
			$this->load->view('koordinator/Editprofilkoor.php');
	}

	public function dataKlienKoor() 
	{
			$this->load->view('koordinator/Dataklienkoor.php');
	}

	public function riwayat() 
	{
			$this->load->view('koordinator/Riwayatdiagnosiskoor.php');
	}

	public function lihatRiwayat() 
	{
			$this->load->view('koordinator/Lihatriwayat.php');
	}

	public function penjadwalanPsi() 
	{
			$this->load->view('koordinator/Penjadwalankoor.php');
	}

	public function editPenjadwalanPsi() 
	{
			$this->load->view('koordinator/Editpenjadwalanpsi.php');
	}

	public function inputJadwal() 
	{
			$this->load->view('koordinator/Inputjadwalkoor.php');
	}

	public function daftarJadwalKonseling() 
	{
			$this->load->view('koordinator/Daftarjadwalkonsel.php');
	}

	public function anggotaPsikolog() 
	{
			$this->load->view('koordinator/Angpsikologkoor.php');
	}

	public function kriteriaKeputusan() 
	{
			$this->load->view('koordinator/Kriteriakeputusankoor.php');
	}

	public function catatanKonseling() 
	{
			$this->load->view('koordinator/Catkonselkoor.php');
	}

	public function tambahAnggotaPsi() 
	{
			$this->load->view('koordinator/Tambahangpsi.php');
	}

	public function editAnggotaPsi() 
	{
			$this->load->view('koordinator/Editangpsi.php');
	}

    
}
