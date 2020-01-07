<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller { 
	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Diagnosis_m');
        $this->load->model('Koor_m/Dataklien_m');
        $this->load->model('Koor_m/Penjadwalan_m');
		$this->load->library('session');
		
        check_not_login_koordinator();
    }

    
    public function Diag($id_pendaftaran) { //proses untuk menampilkan pertanyaan 
        $data['id_pendaftaran'] = $id_pendaftaran;
        //ifelse untuk mendapatkan pertanyaan selanjutnya
        if (!$this->session->userdata("jawaban")) { // if pertanyaan pertama
            $data['pertanyaan'] = $this->Diagnosis_m->pt_pertama();
        } else {
            $hasil = $this->Diagnosis_m->pt_selanjutnya(); // if pertanyaan selanjutnya
            if ($hasil['status']=="lanjut") {
                //$data_pertanyaan adalah untuk semua pertanyaan 
                $data_pertanyaan = $hasil['pertanyaan_selanjutnya'];
                if (empty($data_pertanyaan->pertanyaan)) { // if pertanyaan yang di maksud merupakan pernyataan
                    $inputan[$data_pertanyaan->id] = "Ya";
                    $this->Diagnosis_m->jawaban($inputan);
                    redirect('Koor/Diagnosis/Diag/'.$id_pendaftaran,'refresh');
                } else {
                 $data['pertanyaan'] = $data_pertanyaan; //else menampilkan pertanyaan selanjutnya
                }
            } else { 
                $id_diagnosis = $this->Diagnosis_m->simpan_diagnosis($id_pendaftaran); // else untuk menyimpan diagnosis yang di derita
                redirect('Koor/Diagnosis/hasil/'.$id_diagnosis,'refresh');                
            }
        }

        $inputan = $this->input->post(); // untuk mengambil input dari button 
        if ($inputan) { // if untuk menyimpan jawaban yang dipilih ke dalam session
            $this->Diagnosis_m->jawaban($inputan);
            redirect('Koor/Diagnosis/Diag/'.$id_pendaftaran,'refresh');   
        }

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/diagnosis/Diagnosis', $data);
    }

    public function tombol_back($id_pendaftaran) {
        $data_jawaban = $this->session->userdata("jawaban");
        $pertanyaan_terakhir = array_keys($_SESSION['jawaban']);
        $id_pengetahuan_terakhir = end($pertanyaan_terakhir);
        unset($_SESSION['jawaban'][$id_pengetahuan_terakhir]);
        redirect('Koor/Diagnosis/Diag/'.$id_pendaftaran,'refresh');   

    }

    public function hasil($id_diagnosis) {
        $data['id_diagnosis'] = $id_diagnosis;
        $data['diagnosis'] = $this->Diagnosis_m->ambil_diagnosis($id_diagnosis);
        $data['fakta_diagnosis'] = $this->Diagnosis_m->tampil_fakta_diagnosis($id_diagnosis);
        
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/diagnosis/Hasil', $data);
        
    }

    public function pilihKlien() {
        unset($_SESSION['jawaban']);
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikologs($this->session->userdata('id'));
        foreach ($data['user'] as $key => $value) {
            $data['pendaftaran'][$value->id_klien] = $this->Dataklien_m->getIdPendaftaran($value->id_penjadwalan, $value->id_klien, $value->waktu_daftar);
        }

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/diagnosis/Pilihklien', $data);
        
    }

    public function Pertanyaan() { //untuk menampilkan pertanyaan 
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/diagnosis/PertanyaanDiagnosis');
    }



}


?>