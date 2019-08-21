<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Datakliencari_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Dataklien_model');
        $this->model = $this->Dataklien_model;
    }

    public function search() {
        $keyword = $this->input->post('user');
        $data['user'] = $this->Dataklien_model->search($keyword);
         
        $this->load->view('Dataklien', $data);
    }

}

?>