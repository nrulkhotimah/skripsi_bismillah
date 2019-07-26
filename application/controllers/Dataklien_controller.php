<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Dataklien_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model("Dataklien_model");
        $this->load->library('form_validation');
    }

    public function index() {
        $data["user"] = $this->Dataklien_model->getAll();
        print_r($data);
        // exit();
        $this->load->view("admin/klien/Dataklien", $data);
    }

    public function add() {
        $klien = $this->Dataklien;
        $validation = $this->form_validation;
        $validation->set_rules($klien->rules());

        if($validation->run()) {
            $klien->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/klien/Tambahklien");
    }

    public function edit($id = null) {
        if(!isset($id)) redirect('admin/klien/Dataklien');

        $klien = $this->Dataklien;
        $validation = $this->form_validation;
        $validation->set_rules($klien->rules());

        if($validation->run()) {
            $klien->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["klien"] = $klien->getById($id);
        if(!data["klien"]) show_404();

        $this->load->view("admin/klien/Editdataklien", $data);
    }

    public function delete ($id=null) {
        if(!isset($id)) show_404();

        if ($this->Dataklien->delete($id)) {
            redirect(site_url('admin/klien/Dataklien'));
        }


    }
    


   
}

?>