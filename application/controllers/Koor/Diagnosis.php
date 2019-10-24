<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller { 
	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
       // $this->load->model('Koor_m/Diagnosis_m');
        $this->load->model('Koor_m/Dataklien_m');
		$this->load->library('session');
		
        check_not_login_koordinator();
    }

    
    public function Diag() {
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/diagnosis/Diagnosis');
    }

    public function pilihKlien() {
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/diagnosis/Pilihklien', $data);
        
    }

    public function Pertanyaan() {
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/diagnosis/PertanyaanDiagnosis');
    }



}


?>