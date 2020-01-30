<?php if (!defined ('BASEPATH')) exit ('No direct script access allowed');

class Dataklien_m extends CI_Model {

    private $_table = "user";

    public $id;
    public $id_user;
    public $kode;
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

            ['field' => 'kode',
            'label' => 'Kode',
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

            ['field' => 'keluhan',
            'label' => 'Keluhan',
            ],

            ['field' => 'catatan',
            'label' => 'Catatan',
            ],

        ];
    }

    public function getAll() { //fungsi untuk mengambil data seluruh klien
        $this->load->database();

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('klien','klien.id_user=user.id');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id) { //fungsi untuk mengambil data klien per id nya 
        $this->db->select('*');
        $this->db->from('klien');
        $this->db->join('user','user.id=klien.id_user');
        $this->db->where('id_user', $id);

        return $this->db->get()->first_row();
    }

    public function getByUsername($username) { //fungsi untuk mengambil data klien per id nya 
        $this->db->select('*');
        $this->db->from('klien');
        $this->db->join('user','user.id=klien.id_user');
        $this->db->where('username', $username);

        return $this->db->get()->first_row();
    }

    public function tambah_user($post) { //fungsi untuk menyimpan data user yang melakukan registrasi
        require "./assets/phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer();

        $body = '
        <h3>Selamat bergabung di Sistem Diagnosis Banding Gangguan Afektif</h3>
        <p>Silahkan klik link dibawah ini untuk mengaktivasi akun Anda </p>
        <a href="http://localhost/skripsi/Admin/Register/aktivasi/'.$post["username"].'" type:button; style=color: #fff; background-color: #42a4f5; display: inline-block; padding: 6px 12px; font-size:14px; font-weight:400; border-radius: 25px;
        border: 2px solid #42a4f5;> Aktivasi Akun</a>';

        $mail->IsSMTP();

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Host = "smtp.gmail.com"; // SMTP server 
        // $mail->SMTPDebug = 1; // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only 
        $mail->SMTPAuth = true; // enable SMTP authentication 
        $mail->SMTPSecure = "tls"; // sets the prefix to the servier 
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server 
        $mail->Port = 587; // set the SMTP port for the GMAIL server 
        $mail->Username = "diagnosis121@gmail.com"; // GMAIL username .. pakai gmail pribadi
        $mail->Password = "diagnosisuii12"; // GMAIL password .. pass email gmail pribadi
        $mail->SetFrom('diagnosis121@gmail.com', 'Admin');
        $mail->AddReplyTo("diagnosis121@gmail.com","Admin");
        $mail->Subject = "Aktivasi";
        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail->MsgHTML($body);

        $address = $post['email']; 
        $mail->AddAddress($address, "");
        
        if(!$mail->Send())
        {
           return "gagal";
        } 
        else
        {
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
            $klien->id_user = $id_user;
            $klien->tanggal_lahir = $post['tanggal_lahir'];
            $klien->marital_status = $post['marital_status'];
            $klien->pekerjaan = $post['pekerjaan'];
            $klien->agama = $post['agama'];
    
            $this->db->insert('klien', $klien);

            return "sukses";
        }
    }

    public function update($post,$id) { //fungsi untuk menyimpan data klien yang di edit
        $user = new stdClass(); 
        $user->nama = $post['nama'];
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

    public function delete($id){ //fungsi untuk menghapus data klien
        $this->db->where('id', $id);
        return $this->db->delete($this->_table, array('id' => $id));
    }

    
    public function approve($username) {
        $inputan['approve'] = "1";
        $data_user = $this->getByUsername($username);
        $this->db->where('id_user', $data_user->id_user);
        $this->db->update('klien', $inputan);
    }
    
}

?>