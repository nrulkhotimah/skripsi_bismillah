<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller { 
	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
       // $this->load->model('Koor_m/Diagnosis_m');
		$this->load->library('session');
		
        check_not_login_anggota();
    }
    
    public function index() {
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Diagnosis.php');
    }



}


?>