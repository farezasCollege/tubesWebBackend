<?php
	
	class login_peg_control extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_pg');
		}

		function index(){
			$this->load->view('login_pegawai');
		}

		function login(){
			$un=$_POST['uname'];
			$pass=$_POST['pass'];

			$dbase=$this->login_pg->get_pg($un,$pass);

			if($un=="manager" && $pass=="manager123"){
				//redirect(base_url('/index.php/  ')); //redirect ke dashboard manager

			}else if($dbase->num_rows()>0){
				$akun=$dbase->result_array();

				$peg_session=array(
					'uname' => $username,
					'nama' => $q[0]['Nama'],
					'status' => "login",
					'role' => $q[0]['Role']
				);

				$this->session->set_userdata($peg_session);

				if($akun[0]['Role']=="pegawai"){
					//redirect(base_url('/index.php/  ')) //redirect ke page pegawai
					
				}else{
					echo "anda tidak bisa login disini";
				}
			}else{
				echo "maaf username atau password salah";
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('/index.php/login_peg_control/'));
		}
	}

?>