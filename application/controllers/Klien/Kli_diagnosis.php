<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kli_diagnosis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_not_login_klien();
    }

	public function index()
	{
		$this->load->view('klien/diagnosis/Data.php');
    }

    public function catkonsel() {
        $this->load->view('klien/diagnosis/Catkonsel');
    }

    public function pertanyaan() {
        $this->load->view('klien/diagnosis/Pertanyaan');
    }
    
}

?>