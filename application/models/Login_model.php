<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Login_model extends CI_Model {

    private $user;

    public $username; 
    public $password;
    public $role;
    
    public function login($post) {
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        print_r($post);
        exit();
        $query = $this->db->get();
        return $query;
    }

}

?>