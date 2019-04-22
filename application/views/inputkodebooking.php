<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="<?php echo base_url ('/css/inputkodebooking.css')?>">
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <title>Salon Citra</title>
  </head>
  <body>
    <form action="<?php echo base_url('/index.php/inputkodebooking_c/cekkode/');?>" method="POST" class="search-box">
      <input type="text" name="kode" class="search-txt" placeholder="Masukkan kode booking"/>
        <a class="search-btn" href="#">
          <i class="fas fa-search"></i>
        </a>
    </form>
  </body>
</html>