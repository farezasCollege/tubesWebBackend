<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salon extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function GetCustomer(){
	    $data = [
			"Nama" => $this->input->post('nama', true),
			"Date" => $this->input->post('date', true),
			"email" => $this->input->post('email', true),
			"Username" => $this->input->post('username', true),
			"pass" => $this->input->post('pass', true),
		];
		$arrData = array(
			'Nama' => $_POST['nama'],
			'Date' => $_POST['date'],
			'email' => $_POST['email'],
			'Username' => $_POST['Username'],
			'pass' => $_POST['pass']
	    );
	$this->db->insert('tb_user',$arrData);
	}

	public function Getuser()
	{
		$this->db->select('*');
		$this->db->from('jurusan');
		$query = $this->db->get();
		return $query->result();
	}

	public function Getbooking(){
		$data = [
		"Nama" => $this->input->post('nama', true),
		"Email" => $this->input->post('email', true),
		"Phone" => $this->input->post('phone', true),
		"Gender" => $this->input->post('gender', true),
		"KTP" => $this->input->post('ktp', true),
		"Date" => $this->input->post('birth', true),
		"Bdate" => $this->input->post('tgl', true),
		"Time" => $this->input->post('time', true),
		"Service" => $this->input->post('service', true),
	];
	$arrData = array(
		'Nama' => $_POST['nama'],
		'Email' => $_POST['email'],
		'Phone' => $_POST['phone'],
		'Gender' => $_POST['gender'],
		'KTP' => $_POST['ktp'],
		'Date' => $_POST['birth'],
		'Bdate' => $_POST['pass'],
		'Time' => $_POST['time'],
		'Service' => $_POST['service']
		);
$this->db->insert('booking',$arrData);
}
}
