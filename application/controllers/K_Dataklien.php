<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Dataklien extends CI_Controller {

    public function index() {
        $this->load->view('koordinator/klien/Dataklien');
    }

    public function catkonsel() {
        $this->load->view('koordinator/klien/Catkonselkoor');
    }

    public function editdata() {
        $this->load->view('koordinator/klien/Editdataklien');
    }


}

?>