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

            ['field' => 'hari',
            'label' => 'Hari',
            'rules' => 'required'
            ],

            ['field' => 'kuota',
            'label' => 'Kuota',
            'rules' => 'required'
            ],
        ];
    }

    public function getAll() { //untuk mengambil seluruh data penjadwalan
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('penjadwalan','penjadwalan.id_user=user.id');
        $this->db->order_by('penjadwalan.hari', 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    public function getById($id) { //untuk mengambil data jadwal per id nya 

        $this->db->select('*');
        $this->db->from('penjadwalan');
        $this->db->where('id', $id); //mengambil id penjadwalan

        return $this->db->get()->first_row();        
    }

    public function getJadwalPsi($id_user) { // untuk mengambil data jadwal psikolog berdasarkan session psikolog yg login
        $this->db->where('penjadwalan.id_user', $id_user);
        $query = $this->db->get('penjadwalan');
        return $query->result();
    }

    public function getJadwalAng($id_user) { // untuk mengambil data jadwal anggota psikolog
        $this->db->join('user', 'user.id = penjadwalan.id_user', 'left' );
        $this->db->where('penjadwalan.id_user ', $id_user);
        $query = $this->db->get('penjadwalan');
        return $query->result();
    }

    public function getPendaftaranBaru($id_klien) { // untuk mengambil data pendaftaran klien, ketika klien mendaftar konseling dan memilih jadwal
        $this->db->order_by('pendaftaran.id', 'desc');
        $this->db->limit(1);
        $this->db->where('pendaftaran.id_klien', $id_klien);
        $query = $this->db->get('pendaftaran');
        return $query->row_array();
    }

    public function getPendaftaranJadwal($id_penjadwalan) { //untuk mengambil data jadwal yang telah di pilih oleh klien
        $this->db->where('id_penjadwalan', $id_penjadwalan);
        $query = $this->db->get("pendaftaran");
        return $query->result();
    }
    
    public function get_diagnosis_terbaru($id_pendaftaran) { //untuk mengambil diagnosis yang paling terbaru di menu dataklien       
        $this->db->where("diagnosis.id_pendaftaran", $id_pendaftaran);
        $this->db->order_by("diagnosis.id", 'desc');
        $ambil = $this->db->get("diagnosis",1,0);
        return $ambil->row_array();
    }
    
    public function get_gangguan_daftar($id_diagnosis) { //untuk mengambil nama gangguan pada tabel deskripsi_gangguan, yang di tampilkan di menu dataklien
        $this->db->join("deskripsi_gangguan", "deskripsi_gangguan.id=diagnosis.id_gangguan");        
        $this->db->where("diagnosis.id", $id_diagnosis);
        $ambil = $this->db->get("diagnosis");
        return $ambil->row_array();
    }
    
    public function get_jadwal_daftar($id_pendaftaran) { //untuk mengambil jadwal terbaru klien
        $this->db->join("penjadwalan", "penjadwalan.id=pendaftaran.id_penjadwalan");        
        $this->db->where("pendaftaran.id", $id_pendaftaran);
        // $this->db->order_by('pendaftaran.id', 'desc');
        
        $ambil = $this->db->get("pendaftaran");
        return $ambil->row_array();
    }
    
    public function save($post) { //untuk menyimpan jadwal yang di inputkan psikolog
        $this->db->insert('penjadwalan', $post);
    }
    
    public function update($post,$id) { // untuk menyimpan data jadwal yang telah di edit     
        $penjadwalan = new stdClass();
        $penjadwalan->waktu = $post['waktu'];
        $penjadwalan->hari = $post['hari'];
        $penjadwalan->kuota = $post['kuota'];
    
        $this->db->set($penjadwalan);
        $this->db->where('id', $id);
        $this->db->update('penjadwalan', $penjadwalan);
    }
    
    public function delete($id){ //untuk menghapus data jadwal 
        $this->db->where('id', $id);
        return $this->db->delete('penjadwalan', array('id' => $id));
    }
    
}

?>