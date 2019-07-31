<?php 
if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Dataklien_model extends CI_Model {

    private $_table = "user";

    public $id;
    public $nama; 
    public $nomor_telepon;
    public $jenis_kelamin;
    public $alamat; 
    public $hak_akses;
    public $email;
    public $username;

    public function getAll() {
        $this->load->database();
        return $this->db->get($this->_table)->result();
    }

    public function getById() {
        return $this->db->get_where($this->_table, ["id" => $id]) -> row();
    }

    public function rules() {
        return [
            ['field' => 'id',
            'label' => 'ID',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nomor_telepon',
            'label' => 'Nomor Telepon',
            'rules' => 'numeric', 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Hak Akses',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
        ];
    }

    public function save() {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->nomor_telepon = $post["nomor_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->username = $post["username"];
        $this->role = $post["role"];

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->nomor_telepon = $post["nomor_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->username = $post["username"];
        $this->role = $post["role"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id) {
        return $this->db->delete($this->_table, array("id" => id));
    }

}

?>