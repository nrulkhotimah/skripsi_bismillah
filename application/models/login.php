<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class UserLogin extends CI_CONTROLLER {
    public function get ($username) {
        $this->db->where ('username', $username);
        $result = $this->db->get('user')->row();
    }

}



?>