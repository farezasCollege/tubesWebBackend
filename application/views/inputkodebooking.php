<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="<?php echo base_url ('/css/inputkodebooking.css')?>">
 <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

 <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
 <title>Salon Citra</title>

</head>
<body>
  <form action="" method="POST" class="search-box row">
    <input type="text" name="kode" class="search-txt" placeholder="Masukkan kode booking"/>
    <a class=" search-btn" >
      <i class="btn fas fa-search" id="seek"></i>
    </a>
  </form>

  <div class="modal" id="mymodal">
    <span class="close">&times;</span>
  </div>
</body>
</html>