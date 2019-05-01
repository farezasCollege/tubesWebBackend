<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="<?php echo base_url ('/css/inputkodebooking.css')?>">
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <title>Masukkan Kode Booking</title>
  </head>
  <body>
    <button class="logout" href="<?php echo base_url ('/index.php/login_peg_control/')?>" style="
      background-color: #00848E; 
      float: right; 
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      border: none;
      display: inline-block;
      font-size: 16px;
      font-weight: bold;
      margin-top: 2%;
      margin-right: 2%;
      border-radius: 10px;
      cursor: pointer; ">Log out</button>
    <form action="<?php echo base_url('/index.php/inputkodebooking_c/cekkode/');?>" method="POST" class="search-box">
      <input type="text" name="kode" class="search-txt" placeholder="Masukkan kode booking"/>
        <a class="search-btn" href="#">
          <i class="fas fa-search"></i>
        </a>
    </form>
  </body>
</html>