<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Penjadwalan extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('K_Penjadwalan_m');
        $this->load->library('session');

        function hitungKuota($kuota) {
            $sisakuota = 10 - $kuota;
            return $sisakuota;
        }

        //check_not_login();
    }

    public function rules() {
        return [

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'
            ],

            ['field' => 'nomor_telepon',
            'label' => 'Nomor Telepon',
            'rules' => 'required'
            ],

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
        $data['user'] = $this->K_Penjadwalan_m->getAll();
        $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);

    }

    public function add() {
        $this->load->view("koordinator/jadwal/Inputjadwalkoor");
    }

    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        // if($validation->run()) {
            $id = $this->session->userdata('id');
            $this->K_Penjadwalan_m->save($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->K_Penjadwalan_m->getAll();
            $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);
        // } else {
        //     $error=validation_errors();
        //     $this->session->set_flashdata('errors', 'Gagal disimpan');
        //     $this->load->view("koordinator/jadwal/Inputjadwalkoor");
        // }
    }

    public function edit($id) {
        $data['user'] = $this->K_Penjadwalan_m->getById($id);
        // print_r($data);
        // exit();

        $this->load->view("koordinator/jadwal/Editpenjadwalanpsi", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('koordinator/jadwal/Penjadwalankoor');
        $post = $this->input->post();

        $user = $this->K_Penjadwalan_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            // echo "a";
            $this->K_Penjadwalan_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->K_Penjadwalan_m->getAll();
            $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);
        
        $data['user'] = $user->getById($id);

        if(!$data['user']) show_404();
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('penjadwalan');
        $data['user'] = $this->K_Penjadwalan_m->getAll();

        $this->load->view('koordinator/jadwal/Penjadwalankoor', $data);
    }

    public function seluruhJadwal() {
        $data['user'] = $this->K_Penjadwalan_m->getAll();
        // print_r($data); exit;
        $this->load->view("koordinator/jadwal/JadwalAll", $data);
    }

    
}

?>