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
    <table class="container content table mt-6 col-8">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">USERNAME</th>
                        <th class="text-center" scope="col">SERVICE</th>
                        <th class="text-center" scope="col">STATUS</th>
                        <th class="text-center" scope="col">TIME</th>
                        <th class="text-center" scope="col">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pemesanan as $pem) : ?>
                        <td class="text-center"><?= $Pem['username']; ?></td>
                        <td class="text-center"><?= $Pem['id_layanan']; ?></td>
                        <td class="text-center"><?= $Pem['status_bayar']; ?></td>
                        <td class="text-center"><?= $Pem['jam_pelayanan']; ?></td>
						<td class="text-center"><?= $Pem['tanggal_pelayanan']; ?></td>
                        <td class="text-center">
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
  </body>
</html>