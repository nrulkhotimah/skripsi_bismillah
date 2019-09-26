<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Penjadwalan_m extends CI_Model {

    private $_table = "user";

    public $id;
    public $id_user;
    public $nama;
    public $nomor_telepon;
    public $waktu;
    public $tanggal;
    public $kuota;

    public function rules() {
        return [
            ['field' => 'id',
            'label' => 'ID',
            ],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'
            ],

            ['field' => 'nomor_telepon',
            'label' => 'Nomor Telepon',
            'rules' => 'numeric', 'required'
            ],

            ['field' => 'waktu',
            'label' => 'Waktu',
            'rules' => 'required'
            ],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'
            ],

            ['field' => 'kuota',
            'label' => 'Kuota',
            'rules' => 'required'
            ],
        ];
    }

    public function getAll() {
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('penjadwalan','penjadwalan.id_user=user.id');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id) {

        $this->db->select('*');
        $this->db->from('penjadwalan');
        $this->db->join('user','user.id=penjadwalan.id_user');
        $this->db->where('id_user', $id);

        return $this->db->get()->first_row();
    }

    public function save($post) {
        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->nomor_telepon = $post['nomor_telepon'];

        $this->db->insert($this->_table, $user);
     
        $penjadwalan = new stdClass();
        $id_user = $this->db->insert_id();
        $penjadwalan->id_user = $id_user;
        $penjadwalan->waktu = $post['waktu'];
        $penjadwalan->tanggal = $post['tanggal'];
        $penjadwalan->kuota = $post['kuota'];

        $this->db->insert('penjadwalan', $penjadwalan);
    }

    public function update($post,$id) {
        $user = new stdClass(); //ini adalah objek
        $user->nama = $post['nama']; //ini adalah variabel. dimana variabelnya ada dua $user dengn atribut nama dan $post dg atribut 'nama'
        $user->nomor_telepon = $post['nomor_telepon'];

        $this->db->set($user);
        $this->db->where('id', $id);

        $this->db->update($this->_table, $user);
     
        $penjadwalan = new stdClass();
        $penjadwalan->id_user = $id;
        $penjadwalan->waktu = $post['waktu'];
        $penjadwalan->tanggal = $post['tanggal'];
        $penjadwalan->kuota = $post['kuota'];

        $this->db->set($penjadwalan);
        $this->db->where('id_user', $id);
        $this->db->update('penjadwalan', $penjadwalan);
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id));
    }

    public function search($keyword) {
       $this->db->select('*');
       $this->db->from('user');
       $this->db->join('klien','klien.id_user=user.id');
       $this->db->like('nama', $keyword);
       return $this->db->get()->result();   
    }

    public function tambah_user($post) {
        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->role = "4";
        $user->alamat = $post['alamat'];
        $user->email = $post['email'];
        $user->username = $post['username'];
        $user->password = md5($post['password']);

        $this->db->insert($this->_table, $user);
     
        $klien = new stdClass();
        $id_user = $this->db->insert_id();
       //$klien->kode = $post['kode']; 
        $klien->id_user = $id_user;
        $klien->tanggal_lahir = $post['tanggal_lahir'];
        $klien->marital_status = $post['marital_status'];
        $klien->pekerjaan = $post['pekerjaan'];
        $klien->agama = $post['agama'];

        $this->db->insert('klien', $klien);
        return $this->db->insert_id();
    }



}

?>