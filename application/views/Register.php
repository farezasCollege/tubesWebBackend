<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>REGISTER</title>

	<link rel="stylesheet" type="text/css" href="assets/css/welcome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/section2.css">
	<link rel="stylesheet" type="text/css" href="assets/css/section3.css">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/welcome.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/section2.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/section3.css')?>">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>

</head>
<body>
	<section id="pertama-banget">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light warna col-12 fixed-top" id="topnav2">
					<a class="navbar-brand" href="#">
						<!-- navbar branding -->
						<img src="<?php echo base_url ('assets/img/branding.png')?>">
					</a>				

					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url();?>">Home</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url();?>">Service</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a> 
						</li>
						<li class="nav-item" style="cursor: pointer;">
							<a href="<?php echo base_url ('index.php/Web/Register')?>" class="nav-link" id="signup-butt">Signup</a>
						</li>
						<li class="nav-item" style="cursor: pointer;">
							<a href="<?php echo base_url('index.php/booking_controller/')?>" class="nav-link" id="signup-butt">Booking</a>
						</li>
					</ul>
					
				</nav>
			</div>    
     
     
     
     <section class="signup">
            <div class="container">
                <div class="signup-content"> 
                    <div class="signup-form" style="margin-top:60px">
                        <h2 class="form-title" align="center">Sign up</h2>

                        <form action="" method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                                <input type="text" name="nama" id="name" placeholder="Full name" required/>
                            </div>
                            <div class="form-group"> 
                                <input type="Date" name="date" id="name" placeholder="Date Of Birth" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Username" id="name" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" style="background-color:#00848E"class="form-submit" value="Join Us"
                                  href="<?php echo base_url();?>"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">

                        <figure><img src="<?php echo base_url('assets/img/salon.png'); ?>" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>" class="signup-image-link">Sudah Punya Akun? Klik disini</a>
                        <a href="<?php echo site_url('Landing/thankyou'); ?>" class="signup-image-link">liat thankyou</a>

                        <figure><img src="<?php echo base_url('assets/img/salon.png'); ?>" alt="sign up image"></figure>
                        <a href="<?php echo base_url();?>" class="signup-image-link">Already Have Account? Click Here</a>
    

                    </div>
                </div>
            </div>
        </section>