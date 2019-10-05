<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/kriteriakeputusan/Kriteriakeputusan');

		check_not_login_koordinator();
    }

}

?>