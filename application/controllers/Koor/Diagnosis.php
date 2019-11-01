<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller { 
	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Diagnosis_m');
        $this->load->model('Koor_m/Dataklien_m');
		$this->load->library('session');
		
        check_not_login_koordinator();
    }

    
    public function Diag($id_pendaftaran) {
        if (!$this->session->userdata("jawaban")) {
            $data['pertanyaan'] = $this->Diagnosis_m->pt_pertama();
        } else {
            $hasil = $this->Diagnosis_m->pt_selanjutnya();
            if ($hasil['status']=="lanjut") {
                $data['pertanyaan'] = $hasil['pertanyaan_selanjutnya'];
            } else { 
                $id_diagnosis = $this->Diagnosis_m->simpan_diagnosis($id_pendaftaran);
                redirect('Koor/Diagnosis/hasil/'.$id_diagnosis,'refresh');                
            }
        }

        $inputan = $this->input->post();
        if ($inputan) {
            $this->Diagnosis_m->jawaban($inputan);
            redirect('Koor/Diagnosis/Diag/'.$id_pendaftaran,'refresh');   
        }

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/diagnosis/Diagnosis', $data);
    }

    public function hasil($id_diagnosis) {
        $data['diagnosis'] = $this->Diagnosis_m->ambil_diagnosis($id_diagnosis);
            $data['fakta_diagnosis'] = $this->Diagnosis_m->tampil_fakta_diagnosis($id_diagnosis);
        
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view('koordinator/diagnosis/Hasil', $data);
        
    }

    public function pilihKlien() {
        unset($_SESSION['jawaban']);
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));
        foreach ($data['user'] as $key => $value) {
            $data['pendaftaran'][$value->id_klien] = $this->Dataklien_m->getIdPendaftaran($value->id_penjadwalan, $value->id_klien, $value->waktu_daftar);
        }

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