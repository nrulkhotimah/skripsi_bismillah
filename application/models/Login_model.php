<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Login_model extends CI_Model {

    private $user;

    public $username; 
    public $password;
    public $role;
    
    public function logged_in() {
        return $this->session->userdata('username');
    }



    public function validate($username, $password) {
        $this->load->database();

        $this->db->where('username', $username);
        $this->db->where('password', $password);
       $result = $this->db->get();
        print_r($this);
        exit();
        return $result;
    }

}



?>