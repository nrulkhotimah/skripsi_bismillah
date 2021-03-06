<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Datapakar_m extends CI_Model {

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

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'
            ],

            ['field' => 'role',
            'label' => 'Hak Akses',
            'rules' => 'required'
            ],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
            ],
        ];
    }

    public function getAll () { //fungsi untuk mengambil data seluruh pakar berdasarkan role nya 
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role >=', '2');
        $this->db->where('role <=', '3');

        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id) { //fungsi untuk mengambil data pakar berdasarkan idnya saja
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);

        return $this->db->get()->first_row();
    }

    public function update($post,$id) { //fungsi untuk melakukan edit data pakar
        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->nomor_telepon = $post['nomor_telepon'];

        $this->db->set($user);
        $this->db->where('id', $id);

        $this->db->update($this->_table, $user);
    }

    public function delete($id) { //fungsi untuk menghapus data pakar
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id));
    }

}