
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Ang_m/Dataklien_m');
        $this->load->model('Ang_m/Penjadwalan_m');
        $this->load->model('Ang_m/Diagnosis_m');
        $this->load->model('Ang_m/Inbox_m');

        $this->load->library('session');

        check_not_login_anggota();
    }
 
    public function index() { //untuk menampilkan data klien pada menu dataklien
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));

        foreach ($data['user'] as $key => $value) { //untuk menampilkan jadwal konseling klien yang terbaru
            $jadwal = $this->Penjadwalan_m->getPendaftaranBaru($value->id_user);
            $data['jadwal'][$value->id_user] = $jadwal;
            $data['diagnosis'][$value->id_user] = $this->Penjadwalan_m->get_diagnosis_terbaru($jadwal['id']);
            $data['gangguan'][$value->id_user] = $this->Penjadwalan_m->get_gangguan_daftar($data['diagnosis'][$value->id_user]['id']);
            $data['penjadwalan'][$value->id_user] = $this->Penjadwalan_m->get_jadwal_daftar($jadwal['id']);
            
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/inbox/Pilihklien', $data);
    }

    public function pesan($id_user) {

        $data['id_login'] = $this->session->userdata("id");
        $data['kepada_user'] = $id_user;
        $id_psikolog = $this->session->userdata("id");
        $id_klien = $id_user;
        $data['pesan'] = $this->Inbox_m->tampil_pesan($id_psikolog, $id_klien);
        
        foreach ($data['pesan'] as $key => $value) {
            $this->Inbox_m->ubah_pesan($value->id, $id_user, $data['id_login']);
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/inbox/Tampilpesan', $data);
    }

    public function tambah_pesan() {
        $this->Inbox_m->tambah_pesan($this->input->post());
        redirect('ang/inbox/pesan/'.$this->input->post('kepada_user'), 'refresh');
    }


}

?>