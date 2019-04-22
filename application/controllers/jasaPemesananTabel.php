<?php
	/**
	 * 
	 */
	class jasaPemesananTabel extends CI_Controller
	{
		
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

			
		}
	}

?>