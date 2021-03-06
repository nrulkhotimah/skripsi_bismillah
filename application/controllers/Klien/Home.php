<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->load->model('Klien_m/Editprofil_m');
        $this->load->model('Klien_m/Diagnosis_m');
		$this->load->model('Klien_m/Pendaftaran_m');
        $this->load->helper('url_helper');
		$this->load->library('session');
		
        check_not_login_klien();
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
			
			['field' => 'jenis_kelamin',
			'label' => 'Jenis Kelamin',
			'rules' => 'required'
			],

			['field' => 'marital_status',
			'label' => 'Marital Status',
			'rules' => 'required'
			],

			['field' => 'agama',
			'label' => 'Agama',
			'rules' => 'required'
			],

			['field' => 'pekerjaan',
			'label' => 'Pekerjaan',
			'rules' => 'required'
			],

			['field' => 'tanggal_lahir',
			'label' => 'Tanggal Lahir',
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

        ];
    }

	public function index() {
		$this->load->view('klien/Home.php');
	}

    public function editProfil() {
		$id = $this->session->userdata('id');
		$data['user'] = $this->Editprofil_m->getById($id);

		$this->load->view('klien/Editprofil', $data);
	}

	public function update($id) { //id ini adalah id user
        $post = $this->input->post();
        $data_lama = $this->Editprofil_m->getById($id);
        $post['id_klien'] = $data_lama->id;

        if(empty($post['password_lama'])) {
            unset($post['password_lama']);
            unset($post['password_baru']);
            unset($post['password_konfirmasi']);
            $post['password'] = $data_lama->password;
            $this->Editprofil_m->update($id, $post);
            $this->session->set_flashdata('alert', '<div class="alert alert-success">Perubahan berhasil disimpan</div>');
            redirect('Klien/Home/editProfil'); 
        } else {
            $password_asli = $data_lama->password;
            $post['password'] = md5($post['password_baru']);

            if(md5($post['password_lama'])==$password_asli) {
                if(!empty($post['password_baru'])) {
                    if($post['password_baru']==$post['password_konfirmasi']) {
                        unset($post['password_lama']);
                        unset($post['password_baru']);
                        unset($post['password_konfirmasi']);
                        $this->Editprofil_m->update($id, $post);
                        $this->session->set_flashdata('alert', '<div class="alert alert-success">Password telah diubah</div>');
                        redirect('Klien/Home/editProfil'); 
                    } else {
                        $this->session->set_flashdata('alert', '<div class="alert alert-danger">Konfirmasi password salah</div>');
                        redirect('Klien/Home/editProfil'); 
                    }
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-danger">Password baru tidak boleh kosong</div>');
                    redirect('Klien/Home/editProfil'); 
                }
            } else {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger">Password lama salah</div>');
                redirect('Klien/Home/editProfil'); 
            }
        }

    }

    public function datadiagnosis() {
        $data['pendaftaran'] = $this->Pendaftaran_m->pendaftaranKlien($this->session->userdata("id"));
        
        foreach ($data['pendaftaran'] as $key => $value) {
            $data['diagnosis'][$value->id_gangguan][$value->id_pendaftaran] = $this->Diagnosis_m->getIdDiagnosis($value->id_gangguan, $value->id_pendaftaran);
            $data['psikolog'] = $this->Pendaftaran_m->getIdPsi($value->id_user);

            if (isset($data['diagnosis'][$key]->id_gangguan)) {
                $data_id = $this->Diagnosis_m->getIdDiagnosis($data['diagnosis'][$key]->id_gangguan, $data['diagnosis'][$key]->id_pendaftaran);
                $id_diagnosis = $data_id->id;
                $data['fakta'][$key] = $this->Diagnosis_m->tampil_fakta_diagnosis($id_diagnosis);  
            } 
        }
        $this->load->view('klien/Datadiagnosis', $data);
        
    }

    public function catkonsel($id_diagnosis) {
        $data['diagnosis'] = $this->Diagnosis_m->detail_diagnosis($id_diagnosis);
        $this->load->view('klien/Catkonsel', $data);
        
    }

}