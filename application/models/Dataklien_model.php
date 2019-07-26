<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Dataklien_model extends CI_Model {

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Dataklien_model');

    // }

    private $_table = "user";

    public $id;
    public $nama;
    public $nomor_telepon;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $alamat;
    public $pekerjaan;
    public $email;
    public $username; 

    public function getAll() {
        //  $this->load->database();
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id" => $id]) -> row();
    }

    public function rules() {
        return [
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

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'
            ],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
            ],

            ['field' => 'pekerjaan',
            'label' => 'pekerjaan',
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
        ];
    }

    public function save() {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->nomor_telepon = $post["nomor_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->email = $post["email"];
        $this->username = $post["username"];

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->nomor_telepon = $post["nomor_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->email = $post["email"];
        $this->username = $post["username"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id" => id));
    }

}

?>