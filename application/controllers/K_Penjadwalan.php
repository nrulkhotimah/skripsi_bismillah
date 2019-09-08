<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Penjadwalan extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('K_Penjadwalan_m');
        $this->load->library('session');

        check_not_login();
    }

    public function rules() {
        return [
            ['field' => 'id',
            'label' => 'ID',
            ],

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
        $params['user'] = $this->K_Penjadwalan_m->getId($id);
        $params = array(
            'id' => $row->id,
            'nama' => $row->nama,
            'nomor_telepon' => $row->nomor_telepon
        );
        $this->session->set_userdata($params);
       // $data['user'] = $this->K_Penjadwalan_m->getId($id);     

        $this->load->view("koordinator/jadwal/Inputjadwalkoor", $params);
    }

    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->K_Penjadwalan_m->save($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->K_Penjadwalan_m->getAll();
            $this->load->view("koordinator/jadwal/Penjadwalankoor", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("koordinator/jadwal/Inputjadwalkoor");
        }
    }

    public function edit($id) {
        $data['user'] = $this->K_Penjadwalan_m->getById($id);

        $this->load->view("koordinator/jadwal/Editpenjadwalanpsi", $data);
    }

    public function update($id) {
        if(!isset($id)) redirect('koordinator/jadwal/Penjadwalankoor');
        $post = $this->input->post();

        $user = $this->K_Penjadwalan_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            echo "a";
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
    public function daftarjadwal() {
        $this->load->view('koordinator/jadwal/Daftarjadwalkonsel.php');
    }

    
}

?>