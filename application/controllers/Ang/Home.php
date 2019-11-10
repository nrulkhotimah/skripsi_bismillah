<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('Admin_m/Editprofil_m');
        $this->load->helper('url_helper');
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

	public function index() { //untuk menampilkan page home

		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Home');
	}

	public function editProfil() { //untuk open edit profil
		$id = $this->session->userdata('id'); //untuk mengambil data profil dari id user yang login
		$data['user'] = $this->Editprofil_m->getById($id); //get id user yang login

		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Editprofil', $data);
	}

	public function update($id) {  //proses update untuk edit profil
        $post = $this->input->post();

        if(empty($post['password_lama'])) { //jika pass lama kosong ..
            unset($post['password_lama']);
            unset($post['password_baru']);
            unset($post['password_konfirmasi']);
            $this->Editprofil_m->update_profil($post, $id);
            $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Perubahan berhasil disimpan</div>');
            redirect('Ang/Home/editProfil', 'refresh'); 
        } else {
            $data_lama = $this->Editprofil_m->getById($id);
            $password_asli = $data_lama->password;
            $post['password'] = md5($post['password_baru']);

            if(md5($post['password_lama'])==$password_asli) {
                if(!empty($post['password_baru'])) {
                    if($post['password_baru']==$post['password_konfirmasi']) {
                        unset($post['password_lama']);
                        unset($post['password_baru']);
                        unset($post['password_konfirmasi']);
                        $this->Editprofil_m->update_profil($post, $id);
                        $this->session->set_flashdata('sukses', '<div class= "alert alert-success">Password telah diubah</div>');
                        redirect('Ang/Home/editProfil', 'refresh'); 
                    } else {
                        $this->session->set_flashdata('sukses', '<div class= "alert alert-danger">Konfirmasi password salah</div>');
                        redirect('Ang/Home/editProfil', 'refresh'); 
                    }
                } else {
                    $this->session->set_flashdata('sukses', '<div class= "alert alert-danger">Password baru tidak boleh kosong</div>');
                    redirect('Ang/Home/editProfil', 'refresh'); 
                }
            } else {
                $this->session->set_flashdata('sukses', '<div class= "alert alert-danger">Password lama salah</div>');
                redirect('Ang/Home/editProfil', 'refresh'); 
            }
        }

    }

    
}

?>