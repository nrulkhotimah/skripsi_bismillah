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
	
	// public function rules() {
    //     return [
    //         ['field' => 'id',
    //         'label' => 'ID',
    //         ],

    //         ['field' => 'nama',
    //         'label' => 'Nama',
    //         'rules' => 'required'
    //         ],

    //         ['field' => 'nomor_telepon',
    //         'label' => 'Nomor Telepon',
    //         'rules' => 'numeric', 'required'
    //         ],

    //         ['field' => 'alamat',
    //         'label' => 'Alamat',
    //         'rules' => 'required'
    //         ],

    //         ['field' => 'email',
    //         'label' => 'Email',
    //         'rules' => 'valid_email', 'required'
    //         ],

    //         ['field' => 'username',
    //         'label' => 'Username',
    //         'rules' => 'required'
    //         ],

    //         ['field' => 'password',
    //         'label' => 'Password',
    //         'rules' => 'required'
    //         ],

    //     ];
    // }

	public function index() {
		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Home');
	}

	public function editProfil() {
		$id = $this->session->userdata('id');
		$data['user'] = $this->Editprofil_m->getById($id);
		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Editprofil', $data);
	}

	public function update($id) {
        $post = $this->input->post();

        if(empty($post['password_lama'])) {
            unset($post['password_lama']);
            unset($post['password_baru']);
            unset($post['password_konfirmasi']);
            $this->Editprofil_m->update_profil($post, $id);
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
                        $this->session->set_flashdata('success', 'password telah diubah');
                        redirect('Ang/Home/editProfil', 'refresh'); 
                    } else {
                        $this->session->set_flashdata('success', 'konfirmasi password salah');
                        redirect('Ang/Home/editProfil', 'refresh'); 
                    }
                } else {
                    $this->session->set_flashdata('success', 'password baru tidak boleh kosong');
                    redirect('Ang/Home/editProfil', 'refresh'); 
                }
            } else {
                $this->session->set_flashdata('success', 'password lama salah');
                redirect('Ang/Home/editProfil', 'refresh'); 
            }
        }

    }

	public function kriteria() {
		$this->load->view('anggota/template/header');
        $this->load->view('anggota/template/footer');
		$this->load->view('anggota/Kriteriakeputusan');
	}
    
}

?>