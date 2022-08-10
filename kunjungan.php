<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kunjungan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="wrap">
		<div class="badan">
			<!-- sidebar -->
			<?php require('sidebar.php'); ?>

			<h2 align="center">Daftar Kunjungan</h2>
			<p>

			<div class="content">
				<a class="tambah-data" href="form_kunjungan.php">Tambah Kunjungan</a></p>
				<div class="tabel">	
				
				<?php

//buat header table
				echo "<table>
				<tr>
				<th>Tanggal</th>
				<th>Nama</th>
				<th>indeks</th>
				<th>Keterangan</th>
				<th>Aksi</th>
				</tr>";
//ambil data dari database
				$q=$db->query("SELECT * from tb_kunjungan");
				$no=1;
				while($r=$q->fetch_array()){
					echo "<tr>
					<td>".$r['tanggal']."</td>
					<td>".$r['nama']."</td>
					<td>".$r['indeks']."</td>
					<td>".$r['ket']."</td>
					<td>
					<a href='edit_kunjungan.php?id=".$r['id']."'>Edit</a> |
					<a href='kunjungan_controllers.php?opsi=delete&id=".$r['id']."'>Hapus</a>
					</td>";
					$no++;
				}
				echo "</table>";
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
