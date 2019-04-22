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
    public function booking()
	{
		$this->load->view('daftar_customer');
	}

	  public function Register()
	{

		//Load page_header and page_index from views
		//nama field, nama kolom, 


		$data['judul'] = 'Form Register';		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('Username','Username','required');

		$this->form_validation->set_rules('pass','Password','required');
		

		$this->form_validation->set_rules('pass','Password');

 
		if($this->form_validation->run() != false){
			$this->Salon->GetCustomer();
			header("Location: ".base_url('/index.php/Register/'));
		}else{
			$this->load->view('Register',$data);
			$this->load->view('header');
			$this->load->view('footer');
		}


	}
	
	// public function Book()
	// {
	// 	// ("name-view","field-tabel database","required html")
	// 	//Load page_header and page_index from views
	// 	$username=$this->db->query("select username from user where Nama='$_POST['nama']'");
	// 	$id=$this->db->query("select id_layanan from jenis_jasa where nama_jasa='$_POST['service']'");

	// 	// $data['judul'] = 'Formbooking';		
	// 	// $this->form_validation->set_rules('nama','Nama','required');
	// 	// $this->form_validation->set_rules('email','Email','required');
	// 	// $this->form_validation->set_rules('phone','Phone','required');
	// 	// $this->form_validation->set_rules('gender','Gender','required');
	// 	// $this->form_validation->set_rules('ktp','KTP');
	// 	// $this->form_validation->set_rules('birth','Date');
	// 	// $this->form_validation->set_rules('tgl','Bdate');
	// 	// $this->form_validation->set_rules('time','Time');
	// 	// $this->form_validation->set_rules('service','Service');
 
	// 	// if($this->form_validation->run() != false){
	// 	// 	$this->Salon->Getbooking();
	// 	// }else{
	// 	// $this->load->view('booking',$data);
	// 	// $this->load->view('header');
	// 	// $this->load->view('footer');
	// 	// }



	// }
=======
	}

public function ubah($Username)
{
	$data['judul'] = 'Edit';

	$data['User'] = $this->Salon->GetCustumerUser($Username);
	$this->form_validation->set_rules('nama','Nama','required');
	$this->form_validation->set_rules('date','Date','required');
	$this->form_validation->set_rules('email','email','required');
	$this->form_validation->set_rules('Username','username','required');
	$this->form_validation->set_rules('pass','pass');


	if($this->form_validation->run()==false){	
		$this->load->view('', $data);
		$this->load->view('templates/footer');
	} else{
		$this->Mahasiswa_model->UbahDataCustomer();
		redirect('Web');
	}
}

public function index2()
{
	$data['judul'] = 'DaftarPegawai';
	$data['Pegawai'] = $this->Salon->GetAllPegawai();
	$this->load->view('Daftar_pegawai', $data);

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
		$this->load->view('header');
		$this->load->view('footer');
	}
}
}


