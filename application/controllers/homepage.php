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
		$password = mb_substr(md5($this->input->post('pass-input')),0,10);

		//echo $password; 
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
				redirect(base_url('/index.php/homepage/homepage_cust/')); 
			}else{
				////tampilkan login gagal di view
				$this->load->view('gagal_login_cus');
			}

		}else{
			$this->load->view('gagal_login_cus');
		}
	}


	function homepage_cust(){
		$this->load->view('homepage_customer');
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
?>