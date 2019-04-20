<?php
	class homepage_model extends CI_Model
	{
		function cek_login($uname,$pass){
			return $this->db->query("select * from user where username='$uname' and password='$pass'");
		}
	}
?>