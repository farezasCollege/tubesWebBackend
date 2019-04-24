<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Salon');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['judul'] = 'DaftarCustomer';
		$data['customer'] = $this->Salon->GetAllCustomer();
		$this->load->view('daftar_customer', $data);
	}

	public function view()
	{
		$this->load->view('viewdata');
	}

	public function booking()
	{
		$this->load->view('booking');
	}

	public function thankyou()
	{
		$this->load->view('thankyou');
	}

	public function Register()
	{
		$data['judul'] = 'Form Register';		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('pass','Password','required');

		if($this->form_validation->run() != false){
			$this->Salon->GetCustomer();
			header("Location:".base_url('/index.php/Web/thankyou'));
			header("refresh:5;Location: ".base_url('/index.php/Web/Register/'));
		}else{
			$this->load->view('Register',$data);
			$this->load->view('header');
			$this->load->view('footer');
		}


	}

	public function ubah()
	{ 
		$data['judul'] = 'Edit';
		//echo $_SESSION['uname']; echo "<br>";
		$data['User'] = $this->Salon->GetCustumerUser($_SESSION['uname']);
		//print_r($data['User']->result_array());

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('pass','Password');

		if($this->form_validation->run()==false){	
			$this->load->view('edit_profile');
		//$this->load->view('edit_profile');
		} else{
			$data = array (
				'Nama' => $this->input->post('nama'),
				'tgl' => $this->input->post('date'),
				'Email' => $this->input->post('email'),
				'Password' => $this->input->post('pass'),
				'Role' => 'customer'
			);

			$data_session = array(
				'uname' => $_SESSION['uname'],
				'nama' => $data['Nama'],
				'email' => $data['Email'],
				'status' => "login",
				'role' => $_SESSION['role']
			);

			$this->session->set_userdata($data_session);

			$this->Salon->UbahDataCustomer($data,$_SESSION['uname']); 
			$this->load->view('edit_profile');
		}
	}

	public function index2()
	{
		$data['judul'] = 'DaftarPegawai';
		$data['Pegawai'] = $this->Salon->GetAllPegawai();
		$this->load->view('daftar_pegawai', $data);
	}

	public function RegisterPeg()
	{
		$data['judul'] = 'Form Register Pegawai';		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('pass','Password');

		if($this->form_validation->run() != false){
			$this->Salon->GetPegawai();
		}else{
			$this->load->view('RegisterPeg',$data);
		}
	}

	public function search()
	{
		if ($this->input->post('kode')) {
			$data['pemesanan'] = $this->Salon->cariDatabooking();
		}else{
			$this->load->view('inputkodebooking');
		}
	}

	public function hapus($Username)
	{
		$hapus=$this->Salon->hapusDataPegawai($Username);
		redirect(base_url('/index.php/Web/view/'));
	}
}
