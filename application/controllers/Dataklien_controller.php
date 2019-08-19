<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Dataklien_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Dataklien_model');
        $this->model = $this->Dataklien_model;
        $this->load->library('session');
    }

  

    public function index() {
        // membuat data yang akan dikirim ke view dalam bentuk array asosiatif
        $data['user'] = $this->Dataklien_model->getAll();
        // print_r($data);
        // exit();
        $this->load->view("admin/klien/Dataklien", $data);
    }

    public function add() {
        $this->load->view("admin/klien/Tambahklien");
    }

    public function save() {
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        // untuk pengaksesan atribut maupun metode dari objek model yang telah dimuat
        // maka dibuatlah variabel $klien untuk menunjuk ke objek dari model yang dimaksud
        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Dataklien_model->save($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
           $this->load->view("admin/klien/Dataklien", $data);
        } else {
            $error=validation_errors();
            $this->session->set_flashdata('errors', 'Gagal disimpan');
            $this->load->view("admin/klien/Tambahklien");
        }

    }

    public function edit($id) {
        $data['user'] = $this->Dataklien_model->getById($id);
        
        $this->load->view("admin/klien/Editdataklien", $data);
        // print_r($data);
        // exit();

    }

    public function update($id) {
        if(!isset($id)) redirect('admin/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
      
        if($validation->run()) {
            $this->Dataklien_model->update($post);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_model->getAll();
            $this->load->view("admin/klien/Dataklien", $data);
        } 
        // else {
        //     $error=validation_errors();
        //     $this->session->set_flashdata('errors', 'Gagal disimpan');
        //     $this->load->view("admin/klien/Editdataklien");
        // }
     
        $data['user'] = $user->getById($id);
      
        if(!$data['user']) show_404();

        // $this->load->view("admin/klien/Dataklien", $data);
    }

    public function delete ($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $data['user'] = $this->Dataklien_model->getAll();
        $this->load->view("admin/klien/Dataklien", $data);
    }

    // public function search() {
    //     //$this->load->view('search');

    //     $output = '';
    //     $nama = '';

    //     $this->load->model('Dataklien_model');

    //     if($this->input->post('query')) {
    //         $query = $this->input->post('query');
    //     }
    //     $data = $this->Dataklien_model->search($nama);
    //     $data = $this->Dataklien_model->search($jenis_kelamin);
    //     $data = $this->Dataklien_model->search($marital_status);
    //     $data = $this->Dataklien_model->search($tanggal_lahir);
    //     $data = $this->Dataklien_model->search($nomor_telepon);

        
    //     $output .= '
    //     <table
    //     class="table table-sm table-bordered"
    //     style="margin-top:20px;"
    //     id="result">
    //     <thead class="text-center">
    //         <tr>
    //             <th class="align-middle" rowspan="2">No</th>
    //             <th class="align-middle" rowspan="2">Nama Klien</th>
    //             <th class="align-middle" rowspan="2">JK</th>
    //             <th class="align-middle" rowspan="2">Status</th>
    //             <th class="align-middle" rowspan="2">Tanggal Lahir</th>
    //             <th class="align-middle" rowspan="2">Nomor Telepon</th>
    //             <th colspan="3">Aksi</th>
    //         </tr>
    //         <tr>
    //             <th>Approve</th>
    //             <th>Edit</th>
    //             <th>Hapus</th>
    //         </tr>
    //     </thead>
    //     ';
    //     if($data->num_rows() > 0) {
    //         foreach($data->result() as $DataKlien) {
    //             $output .= '
    //             <tr>
    //             <th class="align-middle" rowspan="2">No</th>
    //             <th class="align-middle" rowspan="2">Nama Klien</th>
    //             <th class="align-middle" rowspan="2">JK</th>
    //             <th class="align-middle" rowspan="2">Status</th>
    //             <th class="align-middle" rowspan="2">Tanggal Lahir</th>
    //             <th class="align-middle" rowspan="2">Nomor Telepon</th>
    //             <th colspan="3">Aksi</th>
    //         </tr>
    //         <tr>
    //             <th>Approve</th>
    //             <th>Edit</th>
    //             <th>Hapus</th>
    //         </tr>
    //             ';
    //         }
    //     } else {
    //         $output .= '
    //         <th class="align-middle" rowspan="2">No Data Found</th>
    //         ';
    //     }
    //     $output .= '</table>';
    //     echo $output;
    // }

    // public function hasil() {
    //     $data['cari']=$this->Dataklien_model->search();
    //     $this->load->view('result', $data);
    // }

}



?>