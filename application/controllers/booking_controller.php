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

		function submit_pesan(){
			print_r($_POST);
			// echo "<br>";
			// echo $_POST['service'];

			$jasa=$_POST['service'];
			$id=$this->db->query("select id_layanan from jenis_jasa where nama_jasa='$jasa'")->result_array();

			// print_r($id);
			// echo "<br>";
			// echo $id[0]['id_layanan'];
		
			$arrData = array(
				'kode_booking' => "psn-".rand(10,99),
				'username' => $_SESSION['uname'],
				'id_layanan' => $id[0]['id_layanan'],
				'tanggal_pelayanan' => $_POST['tgl'],
				'jam_pelayanan' => $_POST['jam'],
				'status_bayar' => false
			);

			// print_r($arrData);

			$this->book->Getbooking($arrData);
			
		}
	}
?>