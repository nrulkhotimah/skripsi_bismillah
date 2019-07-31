<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Datapakar_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model("Datapakar_model");
    }

    public function index() {
        $data["user"] = $this->Datapakar_model->getAll();
        $this->load->view("admin/klien/Datapakar", $data);
    }

    public function add() {
        $pakar = $this->Datapakar_model;
        $validation = $this->form_validation;
        $validation->set_rules($pakar->rules());
    }


}





?>