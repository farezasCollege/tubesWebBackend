<?php

class homepage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('homepage_model');
	}

	function index(){
		$this->load->view('index(2)'); //ganti php duls
	}

	function login_action(){
		$username = $this->input->post('uname-input');
		$password = $this->input->post('pass-input');

		//print_r($_POST);

		$q = $this->homepage_model->cek_login($username,$password)->result_array();

		$cek=$this->homepage_model->cek_login($username,$password)->num_rows();

		if($cek > 0){ 
			$data_session = array(
				'uname' => $username,
				'nama' => $q[0]['Nama'],
				'email' => $q[0]['Email'],
				'status' => "login",
				'role' => $q[0]['Role']
			);


			$this->session->set_userdata($data_session);
			// browsing cara retrieve session data

			if ($q[0]['Role']=='customer') {
				//redirect(base_url('index.php/')); //redirect ke dashboard customer
				echo "customer";
			}else{
				//redirect(base_url(''));  redirect ke homepage pegawai
				echo "pegawai";
			}

		}else{
			$this->session->set_flashdata("confirm","gagal");
			echo "gagal";
		}
	}

	function homepage_cust(){
		$this->load->view('homepage_customer');
	}

	function cek_login(){
		echo $this->input->post('uname-input');
		echo $this->input->post('pass-input');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

?>