<?php
	class inputkodebooking_m extends CI_Model
	{
		function cek_kode($a)
		{
			return $this->db->query("select status_bayar from pemesanan where kode_booking='$a'");
		}

		function updateBayar($kode){
			$this->db->set('status_bayar',true,false);
			$this->db->where('kode_booking',$kode);
			$this->db->update('pemesanan');
		}
	}
?>