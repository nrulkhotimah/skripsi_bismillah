<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ang_Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        check_not_login();
    }

	public function index()
	{
		$this->load->view('anggota/Home');

	}

	public function editProfil() {
		$this->load->view('anggota/Editprofil');
	}
	
	public function riwayat() {
		$this->load->view('anggota/Riwayatdiagnosis');
	}

	public function lihatRiwayat() {
		$this->load->view('anggota/Lihatriwayat');
	}

	public function kriteria() {
		$this->load->view('anggota/Kriteriakeputusan');
	}
    
}

?>