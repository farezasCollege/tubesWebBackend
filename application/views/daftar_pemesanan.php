<!DOCTYPE html>
<html>
<head>
	<title>SISFO manager</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daftar_customer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
	<!-- <nav class="col-4">
		<a class="logo" href="#">
			<!-- navbar branding 
			<img src="<?php echo base_url();?>assets/branding.png">
		</a>

		<div class="row navigation-nav">
			<ul>
				<li class="nav-item active">
					<a class="nav-link cust" href="<?php echo base_url ('index.php/Web/index1')?>">Lihat customer</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('index.php/Web/index2')?>">Lihat pegawai</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lihat data Pemesanan</a>
				</li>
			</ul>
		</div>
	</nav>
  -->
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
                    <tr><?php foreach ($pemesanan as $Pem) : ?>
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