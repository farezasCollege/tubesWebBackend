<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
    
    <title>Booking Page</title>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url ('/assets/css/booking.css')?>">
    
</head> 
<body style="background-color: #b7ecec">

    <nav class="navbar navbar-expand-lg navbar-light warna col-12 fixed-top">
        <a class="navbar-brand" href="#">
            <!-- navbar branding -->
            <img src="<?php echo base_url();?>/assets/branding.png">
        </a>                

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/homepage/homepage_cust/'); ?>">Home</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/booking_controller/'); ?>">Booking</a> 
            </li>
            <li class="nav-item dropdown" style="cursor: pointer;">
                <button type="button" class="btn dropdown-toggle", data-toggle="dropdown">Akun</button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" ><?php echo $_SESSION['nama'] ?></a>

                    <!-- ini ke controller edit profile -->
                    <a class="dropdown-item" href="<?php echo base_url(''); ?>">Edit profile</a> 

                    <a class="dropdown-item" href="<?php echo base_url('/index.php/homepage/logout/'); ?>">Logout</a>
                </div>

            </li>
        </ul>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-light warna col-12 fixed-top" id="topnav2">
        <a class="navbar-brand" href="#">
             navbar branding 
            <img src="<?php echo base_url ('assets/img/branding.png')?>">
        </a>                

        <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="cursor: pointer;">
                <a href="<?php echo base_url ('index.php/Web/fareza')?>" class="nav-link" id="signup-butt">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">Service</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a> 
            </li>
            <li class="nav-item" style="cursor: pointer;">
                <a href="<?php echo base_url ('index.php/Web/Register')?>" class="nav-link" id="signup-butt">Signup</a>
            </li>
            <li class="nav-item" style="cursor: pointer;">
                <a href="<?php echo base_url ('index.php/Web/booking')?>" class="nav-link" id="signup-butt">Booking</a>
            </li>
        </ul>

    </nav> -->

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <div class="row">

                        <img src="<?php echo base_url ('assets/img/hair.jpg')?>" style="width: 100%; height: 850px">

                        <!-- <div class="column">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">

                        </div>
                        <div class="column">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">

                        </div>  
                        <div class="column">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">
                            <img src="creambath.jpg" style="width:100%">

                        </div> -->

                    </div>
                </div>

                <div class="booking-form">
                <form action="<?php echo base_url('index.php/booking_controller/getView/'); ?>" method="POST" id="booking-form">

                        <h2>Booking for Service</h2>
                        <h3>Customer Profile</h3>
                        <div class="form-group form-input">
                            <input type="text" name="nama" id="name" value="<?php echo $_SESSION['uname']; ?>" readonly/>
                            <label for="name" class="form-label">username</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" required/>
                            <label for="email" class="form-label">Your Email</label>
                        </div>
                        <!-- <div class="form-group form-input">
                            <input type="text" name="phone" id="phone" value="" required/>
                            <label for="name" class="form-label">Phone Number</label>
                        </div> -->
                        <br>
                        <!-- <div class="form-group">
                            <div class="select-list">
                                <select name="gender" id="Gender" required>
                                    <option value="">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group form-input">
                            <input type="text" name="ktp" id="ktp" value="" required/>
                            <label for="name" class="form-label">KTP/Student Card</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="birth" id="birth" value="" required/>
                            <label for="name" class="form-label">Birth Date</label>
                        </div> -->
                        <!-- <br> -->
                        <h4>Booking Date</h4>
                        <div class="form-group form-input">
                            <input type="Date" name="tgl" id="tgl" required/>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="time" name="jam">
                            <!-- <div class="select-list">
                                <select name="time" id="time" required>
                                    <option value="">Time</option>
                                    <option value="6pm">6:00 PM</option>
                                    <option value="7pm">7:00 PM</option>
                                </select>
                            </div> -->
                            <br>
                            <div class="select-list">
                                <select name="service" id="service" required>
                                    <option value="Nail Art">Nail Art</option>
                                    <option value="Creambath">Creambath</option>
                                    <option value="Smooting">Smooting</option>
                                    <option value="Spa">Spa</option>
                                    <option value="Hair Cut">Hair Cut</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-submit">
                            <input type="submit" class="submit" id="submit" name="submit" />
                            <a href="#" class="vertify-booking"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>



</body>
</html>