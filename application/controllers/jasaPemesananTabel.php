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
			$this->load->view('daftar_pemesanan');
		}

		public function getDatabooking()
		{
			$data['judul'] = 'DaftarPemesanan';
			$data['pemesanan'] = $this->jasaPemesanan_model->getPemesanan()->result_array();
			$this->load->view('daftar_pemesanan', $data['pemesanan']);
		}
}


?>