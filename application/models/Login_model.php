<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Login_model extends CI_Model {

    public function validate($username, $password) {
        $this->load->database();

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user', 1);
        return $result;
    }

}



?>