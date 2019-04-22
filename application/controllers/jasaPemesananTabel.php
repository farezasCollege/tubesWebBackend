<?php
	/**
	 * 
	 */
	class jasaPemesananTabel extends CI_Controller
	{
		
		function __construct(argument)
		{
			parent::__construct();
			$this->load->model('jasaPemesanan_model');
		}

		function index(){
			$this->load->view('');
		}

		function getDataBooking(){
			$data=$this->jasaPemesanan_model->getPemesanan()->result_array();

			
		}
	}

?>