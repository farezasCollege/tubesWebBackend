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
		// echo implode("", $_POST["username"]);

		// print_r($_POST);

		// echo $_POST["uname-input"];
		// echo $_POST["pass-input"];

		// echo $username;
		// echo $password;

		$q = $this->homepage_model->cek_login($username,$password)->result_array();

		$cek=$this->homepage_model->cek_login($username,$password)->num_rows();
		//echo $cek;

		// $query= $this->db->query("select role from user where username='$username' and password='$password'")->result_array();ini bisa

		// print_r($this->homepage_model->cek_login($username,$password)->result_array()); ini juga bisa

		if($cek > 0){ 
			//echo "masuk kontol"; bisa masuk
			//print_r($q[0]['nama']);
			$data_session = array(
				'uname' => $username,
				'nama' => $q[0]['nama'],
				'email' => $q[0]['email'],
				'status' => "login",
				'role' => $q[0]['role']
			);

			// print_r($data_session);

			$this->session->set_userdata($data_session);
			// browsing cara retrieve session data

			//redirect(site_url('redirect_homepage')); ini masih ragu
			if ($q[0]['role']=='customer') {
				//$this->load->view(''); //redirect ke dashboard customer
				echo "kontol";
			}else{
				$this->load->view('inputkodebooking'); //redirect ke homepage pegawai
			}

		}else{
			// echo $username;
			// echo "0 ";
			// echo $password;
			echo "Username dan password salah !";
		}
	}

	function cek_login(){
		echo $this->input->post('uname-input');
		echo $this->input->post('pass-input');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('index(2)'));
	}
}

?>