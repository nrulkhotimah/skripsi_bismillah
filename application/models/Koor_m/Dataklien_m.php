<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Dataklien_m extends CI_Model {

    private $_table = "user";

    public $id;
    public $id_user;
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
    public $password;
    public $approve;

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

            ['field' => 'agama',
            'label' => 'Agama',
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
            'label' => 'Pekerjaan',
            'rules' => 'required'
            ],

            ['field' => 'marital_status',
            'label' => 'Marital Status',
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

            ['field' => 'approve',
            'label' => 'Approve',
            'rules' => 'required'
            ],

            ['field' => 'catatan',
            'label' => 'Catatan',
            'rules' => 'required'
            ],

            ['field' => 'keluhan',
            'label' => 'Keluhan',
            'rules' => 'required'
            ],

        ];
    }

    public function getAll() { // untuk mengambil data seluruh klien 
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('klien','klien.id_user=user.id');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id) { //untuk mengambil data klien per id nya 
        $this->db->select('*');
        $this->db->from('klien');
        $this->db->join('user','user.id=klien.id_user');
        $this->db->where('id_user', $id);

        return $this->db->get()->first_row();
    }

    public function getPendaftaranPsikolog($id_psikolog) {  
        $this->db->join('user', 'user.id = pendaftaran.id_klien', 'left');
        $this->db->join('penjadwalan', 'penjadwalan.id = pendaftaran.id_penjadwalan', 'left');
        $this->db->join('klien', 'klien.id_user = pendaftaran.id_klien', 'left');
        $this->db->where('penjadwalan.id_user', $id_psikolog);
        $ambil = $this->db->get('pendaftaran');
        $data = $ambil->result();

        foreach ($data as $key => $value) {
            $pengelompokan[$value->id_klien][] = $value;
        }

        foreach ($pengelompokan as $id_klien => $value1) {
            foreach ($value1 as $key => $value2) {
                $jumlah = count($value1) - 1;
                if ($key==$jumlah) {
                    $data_fix[$id_klien] = $value2;
                }
            }
        }
        return $data_fix;
    }

    public function getPendaftaranSemua() {  
        $this->db->join('user', 'user.id = pendaftaran.id_klien', 'left');
        $this->db->join('penjadwalan', 'penjadwalan.id = pendaftaran.id_penjadwalan', 'left');
        $this->db->group_by('pendaftaran.id_klien');
        $ambil = $this->db->get('pendaftaran');
        return $ambil->result();
    }

    public function getPendaftaranPsiKlien($id_psikolog, $id_klien) { //mengambil data tanggal aja untuk di bagian lihat riwayat
        $this->db->join('user', 'user.id = pendaftaran.id_klien', 'left');
        $this->db->join('penjadwalan', 'penjadwalan.id = pendaftaran.id_penjadwalan', 'left');
        $this->db->where('penjadwalan.id_user', $id_psikolog);
        $this->db->where('pendaftaran.id_klien', $id_klien);
        $this->db->order_by('pendaftaran.waktu_daftar', 'desc');
        $ambil = $this->db->get('pendaftaran');
        return $ambil->result();
    }

    public function getPendaftaranKlien( $id_klien) { //mengambil data tanggal aja untuk di bagian lihat riwayat
        $this->db->join('user', 'user.id = pendaftaran.id_klien', 'left');
        $this->db->join('penjadwalan', 'penjadwalan.id = pendaftaran.id_penjadwalan', 'left');
        $this->db->where('pendaftaran.id_klien', $id_klien);
        $this->db->order_by('pendaftaran.waktu_daftar', 'desc');
        $ambil = $this->db->get('pendaftaran');
        return $ambil->result();
    }

    public function getIdPendaftaran($id_penjadwalan, $id_klien, $waktu_daftar) { //untuk mengambil satu data pendaftaran klien
        $this->db->where('id_penjadwalan', $id_penjadwalan);
        $this->db->where('id_klien', $id_klien);
        $this->db->where('waktu_daftar', $waktu_daftar);
        $ambil = $this->db->get('pendaftaran');
        return $ambil->row();

    }

    public function getDiagnosisPendaftaran($id_pendaftaran) { //untuk mengambil diagnosis berdasarkan id pendaftaran
        $this->db->join('deskripsi_gangguan', 'deskripsi_gangguan.id = diagnosis.id_gangguan', 'left');
        $this->db->where('diagnosis.id_pendaftaran', $id_pendaftaran);
        $ambil = $this->db->get('diagnosis');
        return $ambil->row();
    }

    public function getKeluhan() { //untuk mengambil data keluhan dan catatan konseling klien
        $this->db->select('*');
        $this->db->from('diagnosis');

        $query = $this->db->get();
        return $query->result();
    }

    public function update($post,$id) { //untuk menyimpan data klien yang telah di edit
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
        $klien->id_user = $id;
        $klien->tanggal_lahir = $post['tanggal_lahir'];
        $klien->agama = $post['agama'];
        $klien->marital_status = $post['marital_status'];
        $klien->pekerjaan = $post['pekerjaan'];

        $this->db->set($klien);
        $this->db->where('id_user', $id);
        $this->db->update('klien', $klien);
    }

    public function ubah_status($id_user, $status_konsel) { //untuk mengubah status sudah selesai konseling atau belum
        $this->db->where('id_user', $id_user);
        $this->db->update('klien', $status_konsel);
    }

    // public function tambahcat($post) {
    //     $this->db->insert('diagnosis', $post);
    // }

    // public function search($keyword, $where) {
    //    $this->db->select('*');
    //    $this->db->from('user');
    //    $this->db->join('klien','klien.id_user=user.id');
    //    $this->db->where($where);
    //    $this->db->like('nama', $keyword);
    //    return $this->db->get()->result();   
    // }

 



}

?>