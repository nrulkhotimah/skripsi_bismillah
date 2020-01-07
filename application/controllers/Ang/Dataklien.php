<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataklien extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('Ang_m/Dataklien_m');
        $this->load->model('Ang_m/Penjadwalan_m');
        $this->load->model('Ang_m/Diagnosis_m');
        $this->load->library('session');

        check_not_login_anggota();
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
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));

        foreach ($data['user'] as $key => $value) { //untuk menampilkan jadwal konseling klien yang terbaru
            $jadwal = $this->Penjadwalan_m->getPendaftaranBaru($value->id_user);
            $data['jadwal'][$value->id_user] = $jadwal;
            $data['diagnosis'][$value->id_user] = $this->Penjadwalan_m->get_diagnosis_terbaru($jadwal['id']);
            $data['gangguan'][$value->id_user] = $this->Penjadwalan_m->get_gangguan_daftar($data['diagnosis'][$value->id_user]['id']);
            $data['penjadwalan'][$value->id_user] = $this->Penjadwalan_m->get_jadwal_daftar($jadwal['id']);
            
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/klien/Dataklien', $data);
    }

    public function edit($id) { //open page edit data klien
        $data['user'] = $this->Dataklien_m->getById($id);
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view("anggota/klien/Editdataklien", $data);
    }

    public function update($id) { //proses untuk menyimpan data klien yang telah di edit
        if(!isset($id)) redirect('anggota/klien/Dataklien');
        $post = $this->input->post();

        $user = $this->Dataklien_m;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        $this->Dataklien_m->update($post,$id);
        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>'); 
        $data['user'] = $this->Dataklien_m->getAll();
        redirect('Ang/Dataklien/index', 'refresh');

        $data['user'] = $user->getById($id);
        if(!$data['user']) show_404();
    }

    public function catkonsel($id_diagnosis) { //open page catatan konseling
         $data['diagnosis'] =  $this->Diagnosis_m->ambil_diagnosis($id_diagnosis);
        $inputan = $this->input->post();
        if ($inputan) {
            $this->Diagnosis_m->ubah_catkonsel($inputan, $id_diagnosis); 
            $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>');  
            redirect('Ang/Dataklien/catkonsel/'.$id_diagnosis);
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/klien/Catkonselkoor', $data);
    }

    public function detailcatkonsel($id_diagnosis) { //open page catatan konseling dan proses menyimpan catkonsel yang telah di edit
        $data['diagnosis'] =  $this->Diagnosis_m->ambil_diagnosis($id_diagnosis);
        
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
        $this->load->view('anggota/klien/Detailcatkonsel', $data);
    }

    public function lihatRiwayat($id_klien) { //open page lihat riwayat perklien berdasarkan klien yang dipilih
        $data['user'] = $this->Dataklien_m->getById($id_klien);
        $data['riwayat'] = $this->Dataklien_m->getPendaftaranPsiKlien($this->session->userdata('id'), $id_klien);

        $pendaftaran_terbaru = $this->Penjadwalan_m->getPendaftaranBaru($id_klien);
        $data['id_pendaftaran_terbaru'] = $pendaftaran_terbaru['id'];

        foreach ($data['riwayat'] as $key => $value) { //untuk mendapatkan data pendaftaran dan diagnosis klien
            $data_pendaftaran =  $this->Dataklien_m->getIdPendaftaran($value->id_penjadwalan, $value->id_klien, $value->waktu_daftar);
            $id_pendaftaran = $data_pendaftaran->id;
            $data['diagnosis'][$key] = $this->Dataklien_m->getDiagnosisPendaftaran($id_pendaftaran);

            if (!empty($data['diagnosis'][$key])) {
                $data_id = $this->Diagnosis_m->getIdDiagnosis($data['diagnosis'][$key]->id_gangguan, $data['diagnosis'][$key]->id_pendaftaran);
                $id_diagnosis = $data_id->id;
                $data['fakta'][$key] = $this->Diagnosis_m->tampil_fakta_diagnosis($id_diagnosis);  
            } 
        }

        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Lihatriwayat', $data);
	}

	public function riwayat() { //open page riwayat yang di tangani oleh koor
        $data['user'] = $this->Dataklien_m->getPendaftaranPsikolog($this->session->userdata('id'));
        $this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view("anggota/Riwayatdiagnosis", $data);
    }
    
    public function ubah_status($id_user, $status_konsel=null) { //proses untuk mengubah status user telah selesai melakukan treatment konseling atau belum
        if($status_konsel == NULL) $status_konsel = $this->input->get();
        else $status_konsel = array('status_konsel' => $status_konsel);

        $this->Dataklien_m->ubah_status($id_user, $status_konsel);
        redirect('Ang/Dataklien/index', 'refresh');
    }

}

?>