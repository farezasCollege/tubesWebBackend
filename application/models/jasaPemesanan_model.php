<?php
	/**
	 * 
	 */
	class jasaPemesanan_model extends CI_Model
	{
		
		public function getPemesanan()
		{
			return $this->db->query("SELECT Nama, nama_jasa, harga, jam_pelayanan, tanggal_pelayanan FROM user JOIN pemesanan USING(Username) JOIN jenis_jasa USING(id_layanan)");
		}
	
	    // public function getPemesanan1()
        // {
		// 	$this->db->select('*');
		// 	$this->db->from('pemesanan');
		// 	$this->db->join('user','user.id_ju= mahasiswa.id_jurusan');
		// 	$query=$this->db->get();
			
		// 	return $query->result_array();
		// }
	}
?>