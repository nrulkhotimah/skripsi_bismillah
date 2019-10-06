<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Editprofil_m extends CI_Model {

    private $_table = "user";

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

    public function update_profil($post, $id_user) {
        $this->db->where('id', $id_user);
        $this->db->update('user', $post);
    }

}

?>