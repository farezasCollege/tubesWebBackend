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
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		// $cek = $this->homepage_model->cek_login("user",$where) ->num_rows(); //cek_login(nama_tabel, where)

		$q = $this->homepage_model->cek_login("user",$where)->result_array();

		if($q->num_rows() > 0){ 
			$data_session = array(
				'uname' => $username,
				'nama' => $q[0]['nama'],
				'status' => "login",
				'role' => $q[0]['role'];
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("redirect_homepage"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index(2)'));
	}
}

?>