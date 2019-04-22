<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salon extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	public function GetAllCustomer()
	{
		//use query builder to get data table "mahasiswa"
	  $cus='customer';
		$query=$this->db->query("SELECT * FROM user WHERE Role='$cus'");
		return $query->result_array();
		
	}

	public function GetCustomer(){
	    $data = [
			"Nama" => $this->input->post('nama', true),
			"Date" => $this->input->post('date', true),
			"Email" => $this->input->post('email', true),
			"Username" => $this->input->post('username', true),
			"Password" => $this->input->post('pass', true),
			"Role" => $this->input->post('role', true),
		];
		$arrData = array(
			'Nama' => $_POST['nama'],
			'Date' => $_POST['date'],
			'Email' => $_POST['email'],
			'Username' => $_POST['Username'],
			'Password' => $_POST['pass'],
      'Role' => 'customer'
	    );
	$this->db->insert('user',$arrData);
	}

	public function GetCustumerUser($Username)
	{
		$this->db->where('Username', $Username);
		return $this->db->get('user')->row_array();
	}

	public function UbahDataCustomer()
	{
		$data = array (
			'Nama' => $this->input->post('nama', true),
			'Date' => $this->input->post('date', true),
			'Email' => $this->input->post('email', true),
			'Password' => $this->input->post('pass', true),
			'Role' => 'customer',
		);
		//use query builder class to update data mahasiswa based on id
		$this->db->where('Username',$Username);
		$this->db->update('user',$data);
	}

public function GetAllPegawai()
	{
		$peg='Pegawai';
		$query=$this->db->query("SELECT * FROM user WHERE Role='$peg'");
		return $query->result_array();
	}

	public function GetPegawai(){
		$data = [
		"Nama" => $this->input->post('nama', true),
		"Date" => $this->input->post('date', true),
		"Email" => $this->input->post('email', true),
		"Username" => $this->input->post('username', true),
		"Password" => $this->input->post('pass', true),
		"Role" => $this->input->post('role', true),
	];
	$arrData = array(
		'Nama' => $_POST['nama'],
		'Date' => $_POST['date'],
		'Email' => $_POST['email'],
		'Username' => $_POST['Username'],
		'Password' => $_POST['pass'],
		'Role' => 'Pegawai'
		);
$this->db->insert('user',$arrData);
}}
