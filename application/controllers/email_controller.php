<?php

class email extends CI_Controller
{

	function kirim($email_user,$kode_booking){
		$this->email->from('loig.fried@gmail.com', 'Salon citra');
		$this->email->to($email_user);
		$this->email->subject('Kode Booking Salon Citra');
		$this->email->message("Berikut adalah kode booking anda '$kode_booking'");

		if($this->email->send()) 
        	$this->session->set_flashdata("email_sent","Email sent successfully."); 
        else 
         	$this->session->set_flashdata("email_sent","Error in sending Email."); 
	};
}
?>