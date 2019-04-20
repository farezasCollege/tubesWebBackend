<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/welcome.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/section2.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/section3.css')?>">
  
</head>
<body>

<div class="container">
      <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    REGISTER HERE!
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                            
                        </div>
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
           
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="DKV">DKV</option>
                                <option value="MBTI">MBTI</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 

     <nav class="navbar navbar-expand-lg navbar-light warna col-12 fixed-top" id="topnav2">
                    <a class="navbar-brand" href="#">
                        <!-- navbar branding -->
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
                </nav>

           