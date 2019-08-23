<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Datakliencari_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Dataklien_model');
        $this->model = $this->Dataklien_model;
    }

    public function index() {
        // membuat data yang akan dikirim ke view dalam bentuk array asosiatif
        $data['user'] = $this->Dataklien_model->getAll();
        // print_r($data);
        // exit();
        $this->load->view("admin/klien/Dataklien", $data);
    }



}

?>