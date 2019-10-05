<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_not_login_klien();
    }

	public function index()
	{
		$this->load->view('klien/Pendaftaran');
    }

    
}

?>