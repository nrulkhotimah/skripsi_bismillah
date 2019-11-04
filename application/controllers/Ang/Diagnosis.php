<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller { 
	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
        $this->load->model('Ang_m/Diagnosis_m');
        $this->load->model('Ang_m/Dataklien_m');
		$this->load->library('session');
		
        check_not_login_anggota();
    }

    
    public function Diag($id_pendaftaran) {
        if (!$this->session->userdata("jawaban")) {
            $data['pertanyaan'] = $this->Diagnosis_m->pt_pertama();
        } else {
            $hasil = $this->Diagnosis_m->pt_selanjutnya();
            if ($hasil['status']=="lanjut") {
                //$data_pertanyaan adalah untuk semua pertanyaan 
                $data_pertanyaan = $hasil['pertanyaan_selanjutnya'];
                if (empty($data_pertanyaan->pertanyaan)) {
                    $inputan[$data_pertanyaan->id] = "Ya";
                    $this->Diagnosis_m->jawaban($inputan);
                    redirect('Ang/Diagnosis/Diag/'.$id_pendaftaran,'refresh');
                } else {
                 $data['pertanyaan'] = $data_pertanyaan;  
                }
            } else { 
                $id_diagnosis = $this->Diagnosis_m->simpan_diagnosis($id_pendaftaran);
                redirect('Ang/Diagnosis/hasil/'.$id_diagnosis,'refresh');                
            }
        }

        $inputan = $this->input->post();
        if ($inputan) {
            $this->Diagnosis_m->jawaban($inputan);
            redirect('Ang/Diagnosis/Diag/'.$id_pendaftaran,'refresh');   
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/diagnosis/Diagnosis', $data);
    }

    public function hasil($id_diagnosis) {
        $data['diagnosis'] = $this->Diagnosis_m->ambil_diagnosis($id_diagnosis);
            $data['fakta_diagnosis'] = $this->Diagnosis_m->tampil_fakta_diagnosis($id_diagnosis);
        
            $this->load->view('anggota/template/header');
            $this->load->view('anggota/template/footer');
            $this->load->view('anggota/diagnosis/Hasil', $data);
        
    }

    public function pilihKlien() {
        unset($_SESSION['jawaban']);
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));
        foreach ($data['user'] as $key => $value) {
            $data['pendaftaran'][$value->id_klien] = $this->Dataklien_m->getIdPendaftaran($value->id_penjadwalan, $value->id_klien, $value->waktu_daftar);
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/diagnosis/Pilihklien', $data);
        
    }

    public function Pertanyaan() {
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/diagnosis/PertanyaanDiagnosis');
    }



}


?>