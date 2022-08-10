<!DOCTYPE html>
<html>
<head>
	<title>Form Kunjungan</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="wrap">
	<?php require('sidebar.php');?>
	<h2 align="center">Pendaftaran Kunjungan Pasien</h2>
	<form method="POST" action="kunjungan_controllers.php?opsi=input"  class="form">
		<table width="200" border="0">
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>indeks</td>
				<td>:</td>
				<td><input type="number" name="indeks"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td>
					<select name="ket">
						<option value="">- pilih</option>
						<option value="ADA">ADA</option>
						<option value="BUAT BARU">BUAT BARU</option>
					</select>
				</td>
			</tr>

		</table>

		<input type="submit" class="submit form" value="Simpan">
		<a href="kunjungan.php" class="btn-form">Kembali</a>

	</form>
</body>
</html>
