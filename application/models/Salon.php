<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salon extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function GetCustomer(){
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
}
