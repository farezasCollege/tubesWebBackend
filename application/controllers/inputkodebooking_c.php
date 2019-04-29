<?php
	/**
	 * 
	 */
	class inputkodebooking_c extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('inputkodebooking_m');
		}

		function index() 
		{
			$this->load->view('inputkodebooking');
		}

		function cekkode()
		{
			$kodee = $_POST['kode'];
			$query = $this->inputkodebooking_m->cek_kode($kodee);
			$cekStatus = $query->result_array();

			if($query->num_rows()>0 && $cekStatus[0]['status_bayar']==0){
				$this->inputkodebooking_m->updateBayar($kodee);
				$this->load->view('sukses_kobook');
			}else if($query->num_rows()>0 && $cekStatus[0]['status_bayar']==1){
				echo "sudah bayar";
			}else{
				$this->load->view('gagal_kobook');
			}

		}

	}
?>