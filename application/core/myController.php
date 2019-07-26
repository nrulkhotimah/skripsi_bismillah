<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');

class myController extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (! $this->session->userdata('authenticated')) {
            redirect('Login');
        }
    }
}



?>