<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Angpsi extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/angpsi/Angpsikolog.php');
    }

    public function tambah() {
        $this->load->view('koordinator/angpsi/Tambahangpsi');
    }

    public function edit() {
        $this->load->view('koordinator/angpsi/Editangpsi');
    }

}

?>