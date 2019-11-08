<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		check_not_login_koordinator();

		$this->load->model('Koor_m/Kriteria_m');
		
	}
	
	public function index() {
		$data_pengetahuan = $this->Kriteria_m->tampil();
		foreach ($data_pengetahuan as $key => $value) {
			$data['pengetahuan'][$value->id] = $value;
		}

		$data['gangguan'] = $this->Kriteria_m->tampil_gangguan();
		$data['fakta'] = $this->Kriteria_m->tampil_fakta();

		$this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/kriteriakeputusan/Kriteriakeputusan', $data);
	}
	
	public function edit() {
		$data_pengetahuan = $this->Kriteria_m->tampil();
		foreach ($data_pengetahuan as $key => $value) {
			$data['pengetahuan'][$value->id] = $value;
		}

		$data['gangguan'] = $this->Kriteria_m->tampil_gangguan();
		$data['fakta'] = $this->Kriteria_m->tampil_fakta();
		
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Kriteria_m->ubah($inputan);
			redirect('Koor/Kriteria/Index','refresh');
		}

		$this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/kriteriakeputusan/EditKriteriakeputusan', $data);
	}

	public function editdeskripsi() {

		$data['gangguan'] = $this->Kriteria_m->tampil_gangguan();
		$data['fakta'] = $this->Kriteria_m->tampil_fakta();
		
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Kriteria_m->editDeskFakt($inputan);
			$this->session->set_flashdata('sukses', '<div class="alert alert-info">Data berhasil di simpan  </div>');
			redirect('Koor/Kriteria/editdeskripsi');
		}

		$this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/kriteriakeputusan/EditDeskripsi', $data);
	}

}

?>