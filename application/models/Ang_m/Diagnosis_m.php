
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis_m extends CI_Model {

    public function pt_pertama() { //untuk mengambil pertanyaan pertama
        $this->db->where('pertanyaan_pertama', 1);
        $ambil = $this->db->get('pengetahuan');
        return $ambil->row();
    }

    public function jawaban($inputan) { 
        foreach ($inputan as $id_pengetahuan => $jawaban) {
            // untuk menyimpan jawaban ke dalam session
            $_SESSION['jawaban'][$id_pengetahuan] = $jawaban;
        }
    }

    public function detail_pertanyaan($id_pengetahuan) { //untuk mengambil pertanyaan 
        $this->db->where('id', $id_pengetahuan);
        $ambil = $this->db->get('pengetahuan');
        return $ambil->row();
    }

    public function getIdDiagnosis($id_gangguan, $id_pendaftaran) { //untuk mengambil pertanyaan 
        $this->db->where('id_gangguan', $id_gangguan);
        $this->db->where('id_pendaftaran', $id_pendaftaran);
        return $this->db->get('diagnosis')->row();
    }

    public function pt_selanjutnya() {
        //pertanyaan selanjutnya berdasarkan session terakhir 
        //menjadikan index (id_pengetahuan menjadi value)
        $pertanyaan_terakhir = array_keys($_SESSION['jawaban']);
        //mengambil id pengetahuan terakhir
        $id_pengetahuan_terakhir = end($pertanyaan_terakhir);
        //mengambil jawaban terakhir
        $jawaban_terakhir = end($_SESSION['jawaban']);

        $data_terakhir = $this->detail_pertanyaan($id_pengetahuan_terakhir);
        if ($jawaban_terakhir=="Ya") {
            if ($data_terakhir->jawaban_ya==0) {
                $data['status'] = "selesai";
            } else {
                $data['status'] = "lanjut";
                $data['pertanyaan_selanjutnya'] = $this->detail_pertanyaan($data_terakhir->jawaban_ya);
            }
        } else {
            if ($data_terakhir->jawaban_tidak==0) {
                $data['status'] = "selesai";
            } else {
                $data['status'] = "lanjut";
                $data['pertanyaan_selanjutnya'] = $this->detail_pertanyaan($data_terakhir->jawaban_tidak);
            }
        }
        return $data;
    }

    public function simpan_diagnosis($id_pendaftaran) {
        $pertanyaan_terakhir = array_keys($_SESSION['jawaban']);
        $id_pengetahuan_terakhir = end($pertanyaan_terakhir);
        $jawaban_terakhir = end($_SESSION['jawaban']);

        $data_terakhir = $this->detail_pertanyaan($id_pengetahuan_terakhir);
        if ($jawaban_terakhir=="Ya") {
            $diagnosis['id_gangguan'] = $data_terakhir->deskripsi_ya;
        } else {
            $diagnosis['id_gangguan'] =$data_terakhir->deskripsi_tidak;
        }

        $diagnosis['id_pendaftaran'] = $id_pendaftaran;
        $diagnosis['keluhan'] = "";
        $diagnosis['catatan'] = "";

        $this->db->insert('diagnosis', $diagnosis);

        //mengambil id_diagnosis yang baru selesai disimpan dengan fungsi insert_id
        $fakta_diagnosis['id_diagnosis_fd'] = $this->db->insert_id();

        foreach ($_SESSION['jawaban'] as $id_pengetahuan => $jawaban_pengetahuan) {
            $data_pengetahuan = $this->detail_pertanyaan($id_pengetahuan);
            if ($jawaban_pengetahuan=="Ya") {
                if (!empty($data_pengetahuan->fakta_ya)) {
                    $id_fakta_fd[] = $data_pengetahuan->fakta_ya;
                }
            } else {
                if (!empty($data_pengetahuan->fakta_tidak)) {
                    $id_fakta_fd[] = $data_pengetahuan->fakta_tidak;
                }
            }
        }

        if (isset($id_fakta_fd)) {
            foreach ($id_fakta_fd as $key => $fakta_diagnosis['id_fakta_fd']) {
                $this->db->insert('fakta_diagnosis', $fakta_diagnosis);
            }
        }

        unset($_SESSION['jawaban']);
        return $fakta_diagnosis['id_diagnosis_fd'];
    }

    public function ambil_diagnosis($id_diagnosis) {
        $this->db->join('deskripsi_gangguan', 'deskripsi_gangguan.id = diagnosis.id_gangguan', 'left');
        $this->db->join('pendaftaran', 'pendaftaran.id = diagnosis.id_pendaftaran');
        $this->db->where('diagnosis.id', $id_diagnosis);
        $ambil = $this->db->get('diagnosis');
        return $ambil->row();
    }

    public function tampil_fakta_diagnosis($id_diagnosis) { //untuk menampilkan fakta diagnosis
        $this->db->join('fakta', 'fakta.id = fakta_diagnosis.id_fakta_fd', 'left');
        $this->db->where('fakta_diagnosis.id_diagnosis_fd', $id_diagnosis);
        $ambil = $this->db->get('fakta_diagnosis');
        return $ambil->result();
    }

    public function ubah_catkonsel($inputan, $id_diagnosis) { //untuk mengubah catatan konseling di menu dataklien
        $this->db->where('id', $id_diagnosis);
        $this->db->update('diagnosis', $inputan);

    }
}



/* End of file ModelName.php */



?>