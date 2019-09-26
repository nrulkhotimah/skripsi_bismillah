<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Editprofil_m extends CI_Model {

    private $_table = "user";
    // private $tabel = "klien";

    public $id;
    public $id_user;
    public $nomor_telepon;
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

            [
            'field' => 'password_konfirmasi',
            'label' => 'Konfirmasi Password',
            'rules' => 'trim', 'required', 'matches[password]'
            ]

        ];
    }

    public function getById($id) {

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
      
        return $this->db->get()->first_row();
    }

    public function update($id) {
        $post = $this->input->post();
        $user = new stdClass(); //ini adalah objek
        $user->nama = $post['nama']; //ini adalah variabel. dimana variabelnya ada dua $user dengn atribut nama dan $post dg atribut 'nama'
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->alamat = $post['alamat'];
        $user->email = $post['email'];
        $user->username = $post['username'];
        if($post['password_baru'] !== '') $user->password = md5($post['password_baru']);

        $this->db->set($user);
        $this->db->where('id', $id);

        $this->db->update($this->_table, $user);
    }

}

?>