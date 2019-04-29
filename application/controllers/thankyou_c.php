<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class thankyou_c extends CI_Controller {

	public function gagal_login_peg()
	{
		$this->load->view('gagal_login_peg');
	}

	public function gagal_login_cus()
	{
		$this->load->view('gagal_login_cus');
	}

	public function gagal_kobook()
	{
		$this->load->view('gagal_kobook');
	}

	public function sukses_kobook()
	{
		$this->load->view('sukses_kobook');
	}

	public function sukses_signup_pegawai()
	{
		$this->load->view('sukses_signup_pegawai');
	}

	public function sudahkonf_kobook()
	{
		$this->load->view('sudahkonf_kobook');
	}



}