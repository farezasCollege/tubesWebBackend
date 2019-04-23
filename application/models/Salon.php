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
		$arrData = array(
			'Nama' => $_POST['nama'],
			'Date' => $_POST['date'],
			'Email' => $_POST['email'],
			'Username' => $_POST['Username'],
			'Password' => md5($_POST['pass']),
      		'Role' => 'customer'
	    );
		$this->db->insert('user',$arrData);
	}


	public function GetCustumerUser($Username)
	{
		// $this->db->where('Username', $Username);
		// return $this->db->get('user')->result_array();
		return $this->db->query("select * from user where Username='$Username'");
	}

	public function UbahDataCustomer($arrayCust,$uname)
	{
		//use query builder class to update data mahasiswa based on id
		$namaa=$arrayCust['Nama'];
		$tgl=$arrayCust['tgl'];
		$emaill=$arrayCust['Email'];
		$pass=md5($arrayCust['Password']);

		$this->db->query("UPDATE user SET Nama='$namaa', Date='$tgl',Email='$emaill',Password='$pass' WHERE Username='$uname'");
		// $this->db->where('Username',$uname);
		// $this->db->update('user',$arrayCust);
	}

	public function GetAllPegawai()
	{
		$peg='Pegawai';
		$query=$this->db->query("SELECT * FROM user WHERE Role='$peg'");
		return $query->result_array();
	}

	public function GetPegawai()
	{
		$data = [
			"Nama" => $this->input->post('nama', true),
			"Date" => $this->input->post('date', true),
			"Email" => $this->input->post('email', true),
			"Username" => $this->input->post('username', true),
			"Password" => $this->input->post('pass', true),
			"Role" => $this->input->post('role', true) 
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
	}



public function cariDatabooking()
{
	$kode = $this->input->post('kode', true);
	$this->db->from('pemesanan');
  $query=$this->db->get();
  return $query->result_array();

	//return data mahasiswa that has been searched
}
}
