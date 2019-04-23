<?php
	class redirect_homepage extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if($this->session->userdata('status') != "login"){
				redirect(base_url("homepage"));
			}
		}

		function index(){
			if ('role'=='customer') {
				//$this->load->view(''); //redirect ke dashboard customer
				echo "test";
			}else{
				$this->load->view('inputkodebooking'); //redirect ke homepage pegawai
			}
		}
	}
?>