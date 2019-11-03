<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataklien extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Koor_m/Dataklien_m');
        $this->load->model('Koor_m/Penjadwalan_m');
        $this->load->library('session');

        check_not_login_koordinator();
    }

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
            'label' => 'pekerjaan',
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

            ['field' => 'keluhan',
            'label' => 'Keluhan',
            'rules' => 'required'
            ],

            ['field' => 'catatan',
            'label' => 'Catatan',
            'rules' => 'required'
            ],
        ];
    }

    public function index() {
        $data['user'] = $this->Dataklien_m->getAll();

        foreach ($data['user'] as $key => $value) { //untuk menampilkan jadwal konseling klien yang terbaru
            $jadwal = $this->Penjadwalan_m->getPendaftaranBaru($value->id_user);
            $data['jadwal'][$value->id_user] = $jadwal;
            $data['diagnosis'][$value->id_user] = $this->Penjadwalan_m->get_diagnosis_terbaru($jadwal['id']);
            $data['gangguan'][$value->id_user] = $this->Penjadwalan_m->get_gangguan_daftar($data['diagnosis'][$value->id_user]['id']);
            $data['penjadwalan'][$value->id_user] = $this->Penjadwalan_m->get_jadwal_daftar($jadwal['id']);
        }
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Dataklien', $data);
    }

    public function lihatseluruh() { //untuk melihat seluruh data klien
        $data['user'] = $this->Dataklien_m->getAll();

        foreach ($data['user'] as $key => $value) {
            $jadwal = $this->Penjadwalan_m->getPendaftaranBaru($value->id);
            $data['jadwal'][$value->id] = $jadwal;
        }
        
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Dataklien2', $data);
    }

    public function edit($id) { //open page edit data klien
        $data['user'] = $this->Dataklien_m->getById($id);
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view("koordinator/klien/Editdataklien", $data);
    }

    public function update($id) { //proses untuk menyimpan data klien yang telah di edit
        if(!isset($id)) redirect('koordinator/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

            $this->Dataklien_m->update($post,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $data['user'] = $this->Dataklien_m->getAll();
            redirect('Koor/Dataklien/index', 'refresh');
        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function catkonsel() { //open page catatan konseling
        $data['diagnosis'] =  $this->Dataklien_m->getKeluhan();



        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Catkonselkoor', $data);
    }

    public function catkonselseluruh() { //open page catatan konseling
        $data['diagnosis'] =  $this->Dataklien_m->getKeluhan();

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Catkonsel2', $data);
    }



    public function editcatkonsel() { //open page edit catatan konseling
        $data['diagnosis'] =  $this->Dataklien_m->getKeluhan();

        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
        $this->load->view('koordinator/klien/Editcatkonsel', $data);
    }

    public function tambahcat() { // tambah catatan konseling - data nya baru sampai di post 
        $post = $this->input->post();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $validation = $this->form_validation;
        $validation->set_rules($this->rules());

        if($validation->run()) {
            $this->Penjadwalan_m->tambahcat($post);
            $this->session->set_flashdata('success', 'Berhasil di simpan');
            redirect('koor/dataklien/catkonsel','refresh');
        } else {
            $error = validation_errors();
            $this->session->set_flashdata('errors', 'Gagal menyimpan');
            $this->load->view('koordinator/template/header');
            $this->load->view('koordinator/template/footer');
            $this->load->view('koordinator/klien/Tambahcatkonsel');
        }
        
    }
    public function lihatRiwayat($id_klien) { //open page lihat riwayat perklien berdasarkan klien yang dipilih
        $data['user'] = $this->Dataklien_m->getById($id_klien);
        $data['riwayat'] = $this->Dataklien_m->getPendaftaranPsiKlien($this->session->userdata('id'), $id_klien);
        foreach ($data['riwayat'] as $key => $value) {
            $data_pendaftaran =  $this->Dataklien_m->getIdPendaftaran($value->id_penjadwalan, $value->id_klien, $value->waktu_daftar);
            $id_pendaftaran = $data_pendaftaran->id;
            $data['diagnosis'][$key] = $this->Dataklien_m->getDiagnosisPendaftaran($id_pendaftaran);
            
            // echo "<pre>";
            // print_r ($data_pendaftaran);
            // echo "</pre>";
            
        }
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view('koordinator/Lihatriwayat', $data);
	}

	public function riwayat() { //open page riwayat yang di tangani oleh koor
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view("koordinator/Riwayatdiagnosis", $data);
    }

    public function seluruhriwayat() { //open page riwayat seluruh klien
        $data['user'] = $this->Dataklien_m->getPendaftaranSemua();
        $this->load->view('koordinator/template/header');
        $this->load->view('koordinator/template/footer');
		$this->load->view("koordinator/Seluruhriwayat", $data);
    }
    
    public function ubah_status($id_user) { //proses untuk mengubah status user telah selesai melakukan treatment konseling atau belum
        $status_konsel = $this->input->get();
        $this->Dataklien_m->ubah_status($id_user, $status_konsel);
        redirect('Koor/Dataklien', 'refresh');
    }

}

?>