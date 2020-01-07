<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Lupa_password_m extends CI_Model {


    public function kirim($inputan) {
        
        $this->db->where('email', $inputan['email']);
        $cek = $this->db->get('user');
        $data_user = $cek->row();
        $hitung = $cek->num_rows();
        if ($hitung==1) {
            require "./assets/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer();

            $length = 8;
            $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

            //menyimpan ke DB
            $data_inputan['password'] = md5($randomString);
            $this->db->where('email', $inputan['email']);
            $this->db->update('user', $data_inputan);

            $body = "
            <h3>Lupa Password Sistem Diagnosis Afektif</h3>
            <p> Password baru Anda adalah ".$randomString." </p>
            <p> Setelah login, segera ubah password sesuai keinginan anda </p>
            ";

            $mail->IsSMTP();

            $mail->SMTPOptions = array(
                'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			$mail->Host = "smtp.gmail.com"; // SMTP server 
			$mail->SMTPDebug = 1; // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only 
			$mail->SMTPAuth = true; // enable SMTP authentication 
			$mail->SMTPSecure = "tls"; // sets the prefix to the servier 
			$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server 
			$mail->Port = 587; // set the SMTP port for the GMAIL server 
			$mail->Username = "nrulkhotimh@gmail.com"; // GMAIL username 
			$mail->Password = "nurul0910"; // GMAIL password
			$mail->SetFrom('nrulkhotimh@gmail.com', 'Admin');
			$mail->AddReplyTo("nrulkhotimh@gmail.com","Admin");
			$mail->Subject = "Lupa Password";
			$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			$address = $inputan['email']; 
            $mail->AddAddress($address, $data_user->nama);
            
			if(!$mail->Send())
			{
				echo "<pre>";
				echo "Mailer Error: " . $mail->ErrorInfo;
				echo "</pre>";
			} 
			else
			{
				return "sukses";
			}
        } else {
            return "email salah";
        }
    }
}

?>