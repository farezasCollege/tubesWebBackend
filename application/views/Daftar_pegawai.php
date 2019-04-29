<!DOCTYPE html>
<html>
<head>
	<title>daftar pegawai</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/daftar_customer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>
	<nav class="col-4">
		<a class="logo" href="#">
			<!-- navbar branding -->
			<img src="<?php echo base_url();?>assets/branding.png">
		</a>

		<div class="row navigation-nav">
			<ul>
				<li class="nav-item">
					<a class="nav-link cust" href="<?php echo base_url ('index.php/Web/index')?>">Lihat customer</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url ('index.php/Web/index2')?>" style="color:white">Lihat pegawai</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/jasaPemesananTabel');?>">Lihat data pembayaran</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Daftarkan pegawai</a>
				</li>
			</ul>
		</div>
	</nav>

	<table class="container content table mt-6 col-8">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">DATE OF BIRTH</th>
                        <th class="text-center" scope="col">EMAIL</th>
                        <th class="text-center" scope="col">USERNAME</th>
                        <th class="text-center" scope="col">ROLE</th>
						<th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($Pegawai as $Peg) : ?>
                        <td class="text-center"><?= $Peg['Nama']; ?></td>
                        <td class="text-center"><?= $Peg['Date']; ?></td>
                        <td class="text-center"><?= $Peg['Email']; ?></td>
                        <td class="text-center"><?= $Peg['Username']; ?></td>
						<td class="text-center"><?= $Peg['Role']; ?></td>
                        <td class="text-center">
						<a href="<?php echo anchor(base_url('index.php/Web/hapus/'.$Peg['Username'])); ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');">hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

	
</body>
</html>