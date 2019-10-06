<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Klien_m/Pendaftaran_m');
        $this->load->helper('url_helper');
        $this->load->library('session');

        check_not_login_klien();
    }

	public function index() {

        $data['user'] = $this->Pendaftaran_m->getPenjadwalan();
		$this->load->view('klien/Pendaftaran', $data);
    }

    
}

?>