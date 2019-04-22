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
			// print_r($_POST);
			// echo $_POST['kode'];
			$kodee = $_POST['kode'];
			$query = $this->inputkodebooking_m->cek_kode($kodee);

			//tinggal nampilin tabel ke view
		}

	}
?>