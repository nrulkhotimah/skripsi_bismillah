<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Angpsi_m extends CI_Model {

    private $_table = "user";

    public $id;
    public $nama;
    public $nomor_telepon;
    public $jenis_kelamin;
    public $alamat;
    public $email;
    public $username; 
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

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
            ],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'valid_email', 'required'
            ],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
            ],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
            ],
        ];
    }

    public function getAll() { // untuk mengambil data anggota psikolog
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role =', '3');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id) { //untuk mengambil data anggota psikolog bper id nya 
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);

        return $this->db->get()->first_row();
    }

    public function getByRole($role) { // untuk mengambil data jadwal anggota psikolog
        $this->db->where('role', $role);
        $query = $this->db->get('user');
        return $query->result();
    }

    public function save($post) { //untuk menyimpan data anggota psikolog yang baru ditambahkan (membuat akun untuk ang psikolog)
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; 
        $password = array(); //untuk password random
        $alpha_length = strlen($alphabet) - 1;
        for ($i = 0; $i<8; $i++) {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        $data_password = implode($password);

        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->role = "3";
        $user->alamat = $post['alamat'];
        $user->email = $post['email'];
        $user->username = $post['username'];
        $user->password = md5($data_password);

        $this->db->insert($this->_table, $user);
        return $data_password;
    }

    public function update($post,$id) { //untuk menyimpan data anggota psikolog yang telah di edit
        $user = new stdClass(); //ini adalah objek
        $user->nama = $post['nama']; //ini adalah variabel. dimana variabelnya ada dua $user dengn atribut nama dan $post dg atribut 'nama'
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->alamat = $post['alamat'];
        $user->email = $post['email'];
        $user->username = $post['username'];

        $this->db->set($user);
        $this->db->where('id', $id);

        $this->db->update($this->_table, $user);
    }

    public function delete($id) { //untuk menghapus data anggota psikolog
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id));
    }

}

?>