<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Dataklien_model extends CI_Model {

    private $_table = "user";
    private $klien = "klien";

    public $id;
    public $kode;
    public $nama;
    public $nomor_telepon;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $marital_status;
    public $agama;
    public $alamat;
    public $pekerjaan;
    public $email;
    public $username; 


    public function getAll() {
        $this->load->database();
        // return $this->db->get($this->_table)->result();
        // return $this->db->get('user')->result();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('klien','user.id=klien.id');
        // $data = $this->db->from('klien');
        // return $data->get()->row();
        $query = $this->db->get();
        return $query->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ['id' => $id]) -> row();
    }

    public function save($post) {
        // print_r($post['nomor_telepon']);
        // exit();
        // $post = $this->input->post();
       $this->id =  $post["id"];
        $this->nama = $post["nama"];
        $this->nomor_telepon = $post["nomor_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->username = $post["username"];

        $this->db->insert($this->_table, $this);

        $id_user = $this->db->insert_id();
       // $this->kode = $post["kode"]; 
        $this->marital_status = $post["marital_status"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->agama = $post["agama"];
        $this->db->insert('klien', $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kode = $post["kode"];
        $this->nama = $post["nama"];
        $this->nomor_telepon = $post["nomor_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->email = $post["email"];
        $this->username = $post["username"];

        $this->db->update($this->_table, $this, ['id'=>$this->id]);
    }

    public function delete(){
        $this->db->delete($this->_table, $this, ['id'=>$this->id]);
    }

}

?>