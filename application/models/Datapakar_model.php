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

    public function getAll () {
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        // $this->db->where('role !=', 'admin');
        // $this->db->or_where('role !=', 'klien');

        $query = $this->db->get();
        return $query->result();
        // print_r('query');
        // exit();
    }

    public function getById($id) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
// print_r($id);
//         exit();
        return $this->db->get()->first_row();
    }

    public function update($post,$id) {
        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->role = $post['role'];
         print_r('user');
        exit();

        $this->db->set($user);
        $this->db->where('id', $id);

        $this->db->update($this->_table, $user);

    }


    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id));
    }







}