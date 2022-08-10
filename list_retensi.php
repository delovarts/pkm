<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Retensi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrap">
		<div class="badan">
			<!-- sidebar -->
			<? require('sidebar.php'); ?>
			<h2 align="center">Laporan Retensi Rekam Medis</h2>
			<p>
			<div class="content">
				<a class="tambah-data" href="cetak.php">Cetak</a>
			</p>
			<div class="tabel">
				<?php

//buat header table
				echo "<table align=center>
				<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama KK</th>
				<th>Alamat</th>
				<th>Indeks</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
				<th>NIK</th>
				<th>Asuransi</th>
				<th>Kunjungan</th>
				<th>Poli</th>
				<th>Aksi</th>
				</tr>";
//ambil data dari database
				$q=$db->query("SELECT * from tb_retensi");
				$no=1;
				while($r=$q->fetch_array()){
					echo "<tr>
					<td>".$no."</td>
					<td>".$r['tanggal']."</td>
					<td>".$r['nama_kk']."</td>
					<td>".$r['alamat']."</td>
					<td>".$r['indeks']."</td>
					<td>".$r['nama_pasien']."</td>
					<td>".$r['jender']."</td>
					<td>".$r['umur']."</td>
					<td>".$r['nik']."</td>
					<td>".$r['asuransi']."</td>
					<td>".$r['kunjungan']."</td>
					<td>".$r['poli']."</td>
					<td><a href='del_retensi.php?id=".$r['id']."'>Hapus</a></td>

					</tr>";
					$no++;
				}
				echo "</table>";
				?>
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>
