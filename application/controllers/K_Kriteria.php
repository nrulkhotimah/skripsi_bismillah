<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Kriteria extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/kriteriakeputusan/Tambahkriteria.php');

		check_not_login();
    }

}

?>