<?php
	
	class login_peg_control extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_pg');
		}

		function index(){
			$this->session->sess_destroy();
			$this->load->view('login_pegawai');
		}

		function login(){
			$un=$_POST['uname'];
			$pass=mb_substr(md5($_POST['pass']),0,10);

			$dbase=$this->login_pg->get_pg($un,$pass);

			if($un=="manager" && $pass=="0795151def"){ //master password for manager= manager123
				redirect(base_url('/index.php/Web/view/')); //redirect ke dashboard manager

			}else if($dbase->num_rows()>0){
				$akun=$dbase->result_array();

				$peg_session=array(
					'uname' => $un,
					'nama' => $akun[0]['Nama'],
					'status' => "login",
					'role' => $akun[0]['Role']
				);

				$this->session->set_userdata($peg_session);

				if($akun[0]['Role']=="Pegawai"){
					redirect(base_url('/index.php/inputkodebooking_c/')); //redirect ke page pegawai
					echo "masuk";
				}else{
					//tampilkan login gagal di view
					$this->load->view('gagal_login_peg');
				}
			}else{
				//tampilkan login gagal di view
				$this->load->view('gagal_login_peg');
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('/index.php/login_peg_control/'));
		}
	}

?>