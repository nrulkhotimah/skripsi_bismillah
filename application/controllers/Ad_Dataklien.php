<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Ad_Dataklien extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Dataklien_model');
    }

    public function index() {
        $this->load->view('admin/Home');
    }

}


?>