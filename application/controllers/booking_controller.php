<?php

class booking_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('book');
	}

	function index(){
		$this->load->view('booking');
	}

	function getView(){
		$this->load->model('book');
		// $this->book->cekduplikat($kode_booking);
		$jasa=$_POST['service'];
		$id=$this->db->query("select id_layanan from jenis_jasa where nama_jasa='$jasa'")->result_array();
		
		$kode_booking = "psn-".rand(0,99);
		$kobook = $this->book->cekduplikat($kode_booking);

		if($kobook->num_rows()>0)
		{
			echo "error";
		} else {
			echo "bisa";
		// 	$arrData = array(
			
		// 	'username' => $_SESSION['uname'],
		// 	'id_layanan' => $id[0]['id_layanan'],
		// 	'tanggal_pelayanan' => $_POST['tgl'],
		// 	'jam_pelayanan' => $_POST['jam'],
		// 	'status_bayar' => false
		// );

		// $this->submit_pesan($arrData);
		}

		
	}

	function submit_pesan($arr_data){
		$mail=$_SESSION['email'];
		$kode=$arr_data['kode_booking'];

		$this->book->Getbooking($arr_data);
		//$this->kirim($mail,$kode);

		header("Location:".base_url('/index.php/Web/thankyou/'));

		//header("Location: ".base_url('/index.php/booking_controller/'));
	}

	function kirim(){ //$email_user,$kode_booking 
		$this->load->library('email');
		// $this->load->library('encrypt');
		$config = array(
    		'protocol'  => 'smtp',
    		'smtp_host' => 'smtp.gmail.com',
    		// 'smtp_crypto' => 'ssl',
    		'smtp_ssl' =>'auto',
    		'smtp_port' => 587,
    		'smtp_user' => 'loig.fried',
    		'smtp_pass' => 'siegfried1122',
    		'mailtype'  => 'html',
    		'charset'   => 'utf-8',
    		'crlf' => "\r\n"
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('loig.fried@gmail.com','admin');
		$this->email->to('fareza087@gmail.com');
		$this->email->subject('Kode Booking Salon Citra');
		$this->email->message("tes email");
		$this->email->set_newline("\r\n");

		$this->email->send();

		if($this->email->send()) 
		{//$this->session->set_flashdata("email_sent","Email sent successfully.");
			echo "sent";
		} 
		else 
		{//$this->session->set_flashdata("email_sent","Error in sending Email.");
			echo "not sent";
			echo "<br>";
			show_error($this->email->print_debugger());
		} 
	}
}
?>