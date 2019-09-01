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

	public function dataKlien() 
	{
			$this->load->view('koordinator/klien/Dataklien.php');
	}

	public function riwayat() 
	{
			$this->load->view('koordinator/Riwayatdiagnosis.php');
	}

	public function lihatRiwayat() 
	{
			$this->load->view('koordinator/Lihatriwayat.php');
	}

	public function penjadwalanPsi() 
	{
			$this->load->view('koordinator/jadwal/Penjadwalankoor.php');
	}

	public function editPenjadwalanPsi() 
	{
			$this->load->view('koordinator/jadwal/Editpenjadwalanpsi.php');
	}

	public function inputJadwal() 
	{
			$this->load->view('koordinator/jadwal/Inputjadwalkoor.php');
	}

	public function daftarJadwalKonseling() 
	{
			$this->load->view('koordinator/jadwal/Daftarjadwalkonsel.php');
	}

	public function anggotaPsikolog() 
	{
			$this->load->view('koordinator/angpsi/Angpsikolog.php');
	}

	public function kriteriaKeputusan() 
	{
			$this->load->view('koordinator/kriteriakeputusan/Kriteriakeputusan.php');
	}

	public function catatanKonseling() 
	{
			$this->load->view('koordinator/Catkonselkoor.php');
	}

	public function tambahAnggotaPsi() 
	{
			$this->load->view('koordinator/angpsi/Tambahangpsi.php');
	}

	public function editAnggotaPsi() 
	{
			$this->load->view('koordinator/angpsi/Editangpsi.php');
	}

    
}
