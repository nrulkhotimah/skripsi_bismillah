<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Ad_Home extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Dataklien_model');
    }

    public function index() {
        check_not_login();
        $this->load->view('admin/Home');
    }

    public function edit_profil() {
        $this->load->view('admin/Editprofil');
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


?>