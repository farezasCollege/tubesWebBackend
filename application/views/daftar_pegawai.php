<!DOCTYPE html>
<html>
<head>
	<title>daftar_pegawai</title>

	<link rel="stylesheet" type="text/css" href="css/daftar_pegawai.css">
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
			<img src="assets/branding.png">
		</a>

		<div class="row navigation-nav">
			<ul>
				<li class="nav-item">
					<a class="nav-link cust" href="#">Lihat customer</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Lihat pegawai</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lihat data pembayaran</a>
				</li>
			</ul>
		</div>
	</nav>


	<div class="container col-8 content">
		<h2>DATA PEGAWAI</h2>
		<table id="tab-pegawai" class="display" width="100%">
			<thead>
				<tr>
					<th>Nama</th>
					<th>NIK</th>
					<th>Tanggal lahir</th>
					<th>Alamat email</th>
					<th>Nomor telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Fahreza</td>
					<td>123</td>
					<td>01-02-34</td>
					<td>fahreza@gmail.com</td>
					<td>081234567</td>
				</tr>
				<tr>
					<td>Yoga</td>
					<td>123</td>
					<td>01-02-34</td>
					<td>yoga@gmail.com</td>
					<td>081234567</td>
				</tr>
				<tr>
					<td>Nabil</td>
					<td>123</td>
					<td>01-02-34</td>
					<td>nabil@gmail.com</td>
					<td>081234567</td>
				</tr>
				<tr>
					<td>Annisa</td>
					<td>123</td>
					<td>01-02-34</td>
					<td>annisa@gmail.com</td>
					<td>081234567</td>
				</tr>
				<tr>
					<td>Nurul</td>
					<td>123</td>
					<td>01-02-34</td>
					<td>nurul@gmail.com</td>
					<td>081234567</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tab-pegawai").DataTable();
		})
	</script>
</body>
</html>