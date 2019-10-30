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
		$inputan = $this->input->post();
		if ($inputan) {
			$this->Kriteria_m->ubah($inputan);
			redirect('Koor/Kriteria/Index','refresh');
		}

		$this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/kriteriakeputusan/Kriteriakeputusan', $data);

    }

}

?>