<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Penjadwalan extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/jadwal/Penjadwalankoor.php');
    }

    public function inputjadwal() {
        $this->load->view('koordinator/jadwal/Inputjadwalkoor.php');
    }

    public function editjadwal() {
        $this->load->view('koordinator/jadwal/Editpenjadwalanpsi.php');
    }

    public function daftarjadwal() {
        $this->load->view('koordinator/jadwal/Daftarjadwalkonsel.php');
    }

    
}

?>