
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Klien_m/Pendaftaran_m');
        $this->load->model('Admin_m/Datapakar_m');
        $this->load->model('Klien_m/Inbox_m');
        $this->load->helper('url_helper');
        $this->load->library('session');
        
        check_not_login_klien();
    }

    public function index() {
        $id_user = $this->session->userdata("id");

        $data_pendaftaran = $this->Pendaftaran_m->pendaftaran_terbaru($id_user);
        if (empty($data_pendaftaran)) {
            $data['user'] = $this->Datapakar_m->getAll();
        } else {

            $data['user'][] = $this->Datapakar_m->getById($data_pendaftaran->id_user);
        }

        $this->load->view('klien/Pilihpsikolog', $data);
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
        
        $this->load->view('klien/Tampilpesan', $data);
    }

    public function tambah_pesan() {
        $this->Inbox_m->tambah_pesan($this->input->post());
        redirect('klien/inbox/pesan/'.$this->input->post('kepada_user'), 'refresh');
    }

    public function hapus_pesan($id) {
        $this->db->where('id', $id);
        $this->db->delete('pesan');
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Pesan berhasil dibersihkan</div>'); 
        // $data['user'] = $this->Datapakar_m->getAll();
        
        redirect('klien/inbox/index', 'refresh');
    }


}

?>