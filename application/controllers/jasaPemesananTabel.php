<?php
	/**
	 * 
	 */
	class jasaPemesananTabel extends CI_Controller
	{
		
	//	function __construct(argument)
	//	{
	//		parent::__construct();
	//		$this->load->model('jasaPemesanan_model');
	//	}

	//	function index(){
	//		$this->load->view('daftar_pemesanan');
	//	}

	//	function getDataBooking(){
	//		$data=$this->jasaPemesanan_model->getPemesanan()->result_array(); //ini udah jadi array, kalo mau ambil datanya pake:         
		// function __construct(argument)
		// {
		// 	parent::__construct();
		// 	$this->load->model('jasaPemesanan_model');
		// }

		function index(){
			$this->load->view('');
		}

		function getDataBooking(){
			$data=$this->jasaPemesanan_model->getPemesanan()->result_array(); //ini udah jadi array, kalo mau ambil datanya pake:
			// $data[0]['nama_kolom']

			
	//	}
	
        
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
		$data['pemesanan'] = $this->jasaPemesanan_model->getPemesanan();
		$this->load->view('daftar_pemesanan', $data);
	}
}


?>