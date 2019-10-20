<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjadwalan extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Penjadwalan_m');
        $this->load->library('session');

        check_not_login_koordinator();
    }

    public function rules() {
        return [

            ['field' => 'id_user',
            'label' => 'Id User',
            'rules' => 'required'
            ],

            ['field' => 'waktu',
            'label' => 'Waktu',
            'rules' => 'required'
            ],

            ['field' => 'kuota',
            'label' => 'Kuota',
            'rules' => 'required'
            ],
        ];
    }

	public function index() {
        $data['user'] = $this->Penjadwalan_m->getJadwalPsi($this->session->userdata('id'));
        foreach ($data['user'] as $key => $value) { 
            $data_pendaftaran = $this->Penjadwalan_m->getPendaftaranJadwal($value->id); //proses mengambil jadwal yg dipilih klien
            $data['sisa'][$value->id] = $value->kuota - count($data_pendaftaran); //proses perhitungan kuota
        }
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);

    }

    public function add() { //open page tambah jadwal
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Inputjadwalkoor");
    }


    public function save() { // proses menyimpan jadwal yang telah di inputkan
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Penjadwalan_m->save($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('koor/penjadwalan/index','refresh');
            
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view("koordinator/jadwal/Inputjadwalkoor");
        }
    }

    public function edit($id) { // open page edit penjadwalan
        $data['user'] = $this->Penjadwalan_m->getById($id);

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Editpenjadwalanpsi", $data);
    }

    public function update($id) { //proses update jadwal yang telah di edit
        if(!isset($id)) redirect('koordinator/jadwal/Penjadwalankoor');
        $post = $this->input->post();

        $user = $this->Penjadwalan_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            $this->Penjadwalan_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Penjadwalan_m->getAll();
           redirect('koor/penjadwalan/index','refresh');
        
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function delete($id) { //proses menghapus jadwal
        $this->db->where('id', $id);
        $this->db->delete('penjadwalan');
        redirect('koor/penjadwalan/index','refresh');
    }

    public function seluruhJadwal() { //proses melihat seluruh jadwal anggota psikolog
        $data['user'] = $this->Penjadwalan_m->getJadwalAng($this->session->userdata("id"));
        foreach ($data['user'] as $key => $value) {
            $data_pendaftaran = $this->Penjadwalan_m->getPendaftaranJadwal($value->id);
            $data['sisa'][$value->id] = $value->kuota - count($data_pendaftaran);
        }

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/JadwalAll", $data);
    }

    
}

?>