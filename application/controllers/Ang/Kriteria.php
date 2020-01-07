<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		check_not_login_anggota();

		$this->load->model('Ang_m/Kriteria_m');
		
	}
	
	public function index() {
		$data_pengetahuan = $this->Kriteria_m->tampil();
		foreach ($data_pengetahuan as $key => $value) {
			$data['pengetahuan'][$value->id] = $value;
		}

		$data['gangguan'] = $this->Kriteria_m->tampil_gangguan();
		$data['fakta'] = $this->Kriteria_m->tampil_fakta();

		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/kriteriakeputusan/Kriteriakeputusan', $data);
	}
	
	public function edit() { //untuk mengedit pertanyaan pada flowchart yang ada
		$data_pengetahuan = $this->Kriteria_m->tampil();
		foreach ($data_pengetahuan as $key => $value) {
			$data['pengetahuan'][$value->id] = $value;
		}

		$data['gangguan'] = $this->Kriteria_m->tampil_gangguan();
		$data['fakta'] = $this->Kriteria_m->tampil_fakta();
		
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Kriteria_m->ubah($inputan);
			redirect('Ang/Kriteria/Index','refresh');
		}

		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/kriteriakeputusan/Editkriteria', $data);
	}

	public function deskripsi() {
		$data['gangguan'] = $this->Kriteria_m->tampil_gangguan();
		$data['fakta'] = $this->Kriteria_m->tampil_fakta();
		
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Kriteria_m->ubah($inputan);
			redirect('Ang/Kriteria/Index','refresh');
		}

		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/kriteriakeputusan/Deskripsi', $data);
	}

}

?>