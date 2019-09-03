<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class K_Angpsi_m extends CI_Model {

    private $_table = "user";
    // private $tabel = "klien";

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

    public function getAll() {
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role >=', '2');
        $this->db->where('role <=', '3');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id) {

        $this->db->select('*');
        $this->db->from('klien');
        $this->db->where('id', $id);
        // print_r($id);
        // exit();

        return $this->db->get()->first_row();
    }

    public function save($post) {
        $user = new stdClass();
        $user->nama = $post['nama'];
        $user->nomor_telepon = $post['nomor_telepon'];
        $user->jenis_kelamin = $post['jenis_kelamin'];
        $user->role = "3";
        $user->alamat = $post['alamat'];
        $user->email = $post['email'];
        $user->username = $post['username'];

        $this->db->insert($this->_table, $user);
    }

    public function update($post,$id) {
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
     
        $klien = new stdClass();
        //$id_user = $this->db->id();
       //$klien->kode = $post['kode']; 
        $klien->id_user = $id;
        $klien->tanggal_lahir = $post['tanggal_lahir'];
        $klien->agama = $post['agama'];
        $klien->marital_status = $post['marital_status'];
        $klien->pekerjaan = $post['pekerjaan'];

        $this->db->set($klien);
        $this->db->where('id_user', $id);
        $this->db->update('klien', $klien);
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

    public function approve($id) {
        $klien = new stdClass();
        $klien->approve = '1';
  
        $this->db->where('id', $id);
        $this->db->update('klien', $klien);
        $query = $this->db->get_where('klien', array('id' => $id))->first_row();

        // print_r($query);
        // exit();

        //return $query->result();   
      
    
       
        

    }


}

?>