<?php
	/**
	 * 
	 */
	class jasaPemesananTabel extends CI_Controller
	{        
		public function __construct()
		{
			parent::__construct();

			$this->load->model('jasaPemesanan_model');
			$this->load->library('form_validation');

		}

		public function index()
		{
			$data['judul'] = 'DaftarPemesanan';
			$data['pemesanan'] = $this->jasaPemesanan_model->getPemesanan()->result();
			// print_r($data['pemesanan']);
			$this->load->view('daftar_pemesanan', $data);
		}
	}

?>