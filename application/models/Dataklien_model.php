<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Dataklien_model extends CI_Model {

    private $_table = "user";
    //private $klien = "klien";

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

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('klien','klien.id_user=user.id');

        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id) {
        return $this->db->get_where($this->_table, ['id' => $id]) -> row();
    }

    public function save($post) {

        // $post = $this->input->post();
        // $this->nama = $this->input->post('nama');
        // $this->nomor_telepon = $this->input->post('nomor_telepon');
        // $this->jenis_kelamin = $this->input->post('jenis_kelamin');
        // $this->alamat = $this->input->post('alamat');
        // $this->email = $this->input->post('email');
        // $this->username = $this->input->post('username');

        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->alamat = $post['alamat'];
        $user->email = $post['email'];
        $user->username = $post['username'];
        // print_r($post($user));
        // exit();

        $this->db->insert($this->_table, $user);
     
        $klien = new stdClass();
        $id_user = $this->db->insert_id();
        //$klien->kode = $this->input->post('kode');
        // $klien->id_user = $id_user;
        // $klien->marital_status = $this->input->post('marital_status');
        // $klien->pekerjaan = $this->input->post('pekerjaan');
        // $klien->agama = $this->input->post('agama');
        // $klien->tanggal_lahir = $this->input->post('tanggal_lahir');

        $id_user = $this->db->insert_id();
       //$klien->kode = $post['kode']; 
        $klien->id_user = $id_user;
        $klien->tanggal_lahir = $post['tanggal_lahir'];
        $klien->marital_status = $post['marital_status'];
        $klien->pekerjaan = $post['pekerjaan'];
        $klien->agama = $post['agama'];

        $this->db->insert('klien', $klien);
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

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id)); 

    }

}

?>