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
		$this->load->view('fareza');


	}
    public function booking()
	{
		//Load page_header and page_index from views
		$this->load->view('booking');
	}

	  public function Register()
	{
		//Load page_header and page_index from views
		$data['judul'] = 'Form Register';		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('Username','username','required');
		$this->form_validation->set_rules('pass','pass');
 
		if($this->form_validation->run() != false){
			$this->Salon->GetCustomer();
		}else{
		$this->load->view('Register',$data);
		$this->load->view('header');
		$this->load->view('footer');
		}

	}
	public function Book()
	{
		//Load page_header and page_index from views
		$data['judul'] = 'Formbooking';		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('ktp','KTP');
		$this->form_validation->set_rules('birth','Date');
		$this->form_validation->set_rules('tgl','Bdate');
		$this->form_validation->set_rules('time','Time');
		$this->form_validation->set_rules('service','Service');
 
		if($this->form_validation->run() != false){
			$this->Salon->Getbooking();
		}else{
		$this->load->view('booking',$data);
		$this->load->view('header');
		$this->load->view('footer');
		}

	}
	public function RegisterPeg()
	{
		$this->load->view('RegisterPeg');
	}

	public function mahasiswa()
	{
		$data_mahasiswa = $this->M_web->Getmahasiswa_nim();
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header',['dataJ'=>$data_jurusan]);
		$this->load->view('page_mahasiswa',['data'=>$data_mahasiswa]);
	}

	public function jurusan()
	{
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header');
		$this->load->view('page_jurusan',['data'=>$data_jurusan]);
	}


	#lengkapi FUNCTION BERIKUT
	public function hapusmahasiswa($nim)
	{

		//Load function hapus_mahasiswa from M_web
		// make it to index.php/web/mahasiswa after delete complete
		$this->M_web->hapus_mahasiswa($nim);
		// $data['data'] = $this->M_web->hapus_mahasiswa($nim);
		Redirect('index.php/Web/mahasiswa');

	}


	public function tambahmahasiswa()
	{
		
		// Create variabel and use it for input data to database.
		// Load tambah_mahasiswa($data) from M_web
		// Redirect to index.php/web/mahasiswa after add data.
		$data = [
			"nim" => $this->input->post('nim'),
			"nama" => $this->input->post('nama'),
			"kelas" => $this->input->post('kelas'),
			"id_jurusan" => $this->input->post('jurusan'),
		];

	$this->M_web->tambah_mahasiswa($data);
	Redirect('index.php/Web/mahasiswa');

	}

	public function editmahasiswa()
	{

		// Create variabel and use it for edit data from database.
		// Load edit_mahasiswa($nim,$data) from M_web
		// Redirect to index.php/web/mahasiswa after edit data.
		


	}


	#lengkapi FUNCTION BERIKUT UNTUK PAGE JURUSAN



	public function tambahjurusan()
	{

		// Create variabel and use it for add data from database.
		// Load tambah_jurusan($data) from M_web
		// Redirect to index.php/web/jurusan after add data.


	

	}

	public function editjurusan()
	{

		// Create variabel and use it for add data from database.
		// Load edit_jurusan($id_jurusan,$data) from M_web
		// Redirect to index.php/web/jurusan after add data.


	
	}

	public function hapusjurusan($id_jurusan)
	{

		// Create variabel and use it for add data from database.
		// Load hapus_jurusan($id_jurusan) from M_web
		// Redirect to index.php/web/jurusan after add data.

	}
}
