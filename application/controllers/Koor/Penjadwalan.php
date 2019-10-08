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

            // ['field' => 'nomor_telepon',
            // 'label' => 'Nomor Telepon',
            // 'rules' => 'required'
            // ],

            ['field' => 'waktu',
            'label' => 'Waktu',
            'rules' => 'required'
            ],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'
            ],

            ['field' => 'kuota',
            'label' => 'Kuota',
            'rules' => 'required'
            ],
        ];
    }

	public function index() {
        $data['user'] = $this->Penjadwalan_m->getToday($this->session->userdata('id'));
        foreach ($data['user'] as $key => $value) {
            $data_pendaftaran = $this->Penjadwalan_m->getPendaftaranJadwal($value->id);
            $data['sisa'][$value->id] = $value->kuota - count($data_pendaftaran);
        }
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);

    }

    public function add() {
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Inputjadwalkoor");
    }


    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $id = $this->session->userdata('id');
            $this->Penjadwalan_m->save($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
           // $data['user'] = $this->Penjadwalan_m->getAll();
            redirect('koor/penjadwalan/index','refresh');
            
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view("koordinator/jadwal/Inputjadwalkoor");
        }
    }

    public function edit($id) {
        $data['user'] = $this->Penjadwalan_m->getById($id);
        // print_r($data);
        // exit();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Editpenjadwalanpsi", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('koordinator/jadwal/Penjadwalankoor');
        $post = $this->input->post();

        $user = $this->Penjadwalan_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            // echo "a";
            $this->Penjadwalan_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Penjadwalan_m->getAll();
           // $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);
           redirect('koor/penjadwalan/index','refresh');
        
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('penjadwalan');
        redirect('koor/penjadwalan/index','refresh');

        // $data['user'] = $this->Penjadwalan_m->getAll();

        // $this->load->view('koordinator/template/header');
        // $this->load->view('koordinator/template/footer');
        // $this->load->view('koordinator/jadwal/Penjadwalankoor', $data);
    }

    public function seluruhJadwal() {
        $data['user'] = $this->Penjadwalan_m->getJadwalAng($this->session->userdata("id"));
        foreach ($data['user'] as $key => $value) {
            $data_pendaftaran = $this->Penjadwalan_m->getPendaftaranJadwal($value->id);
            $data['sisa'][$value->id] = $value->kuota - count($data_pendaftaran);
        }
        // print_r($data); exit;
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/JadwalAll", $data);
    }

    public function historyJadwal() {
        $data['user'] = $this->Penjadwalan_m->getAll();

        foreach ($data['user'] as $key => $value) {
            $data_pendaftaran = $this->Penjadwalan_m->getPendaftaranJadwal($value->id);
            $data['sisa'][$value->id] = $value->kuota - count($data_pendaftaran);
        }
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/jadwal/Historyjadwal", $data);
    }

    
}

?>