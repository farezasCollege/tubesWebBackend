<?php
	/**
	 * 
	 */
	class jasaPesan extends CI_Model
	{
		
		function getPemesanan()
		{
			return $this->db->query("select Nama, nama_jasa, harga, jam_pelayanan, tanggal_pelayanan from user join pemesanan using(Username) join jenis_jasa using(id_layanan)");
		}
	}
?>