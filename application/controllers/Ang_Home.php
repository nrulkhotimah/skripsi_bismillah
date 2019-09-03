<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ang_Home extends CI_Controller {

	public function index()
	{
		$this->load->view('anggota/Home.php');
    }
    
}

?>