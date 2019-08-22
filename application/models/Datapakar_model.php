<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Datapakar_model extends CI_Model {

    private $_table = "user";

    public $id;
    public $nama;
    public $nomor_telepon;
    public $jenis_kelamin;
    public $alamat;
    public $email; 
    public $username;
    public $role;
    public $password;

    public function getAll () {
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        // $this->db->where('role !=', 'admin');
        // $this->db->or_where('role !=', 'klien');

        $query = $this->db->get();
        return $query->result();
        // print_r('_table');
        // exit();
    }

    public function getById() {
        return $this->db->get_where($this->_table, ["id" => $id])->first_row();
    }


    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id));
    }







}