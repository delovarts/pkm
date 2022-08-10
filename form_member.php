<!DOCTYPE html>
<html>
<head>
	<title>Form Rekam Medis</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="wrap">
	<?php require('sidebar.php'); ?>

	<h3>Tambah rekam Medis</h3>
	<form method="POST" action="member_controllers.php?opsi=input" class="form">
		<table width="600">
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>Nama KK</td>
				<td>:</td>
				<td><input type="text" name="nama_kk"></td>
			</tr>
			<tr>
				<td>Alamat KK</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="40" rows="6"></textarea>
				</td>
			</tr>
			<tr>
				<td>Index</td>
				<td>:</td>
				<td><input type="number" name="indeks"></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><input type="text" name="nama_pasien"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>&nbsp</td>
				<td>
					<input type="radio" name="jender" value="laki">Laki Laki
					<input type="radio" name="jender" value="perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="number" name="umur"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="number" name="nik"></td>
			</tr>
			<tr>
				<td>No Asuransi</td>
				<td>:</td>
				<td><input type="number" name="asuransi"></td>
			</tr>
			<tr>
				<td>Jenis Kunjungan</td>
				<td>:</td>
				<td>
					<select name="j_kunjungan">
						<option value="">- pilih</option>
						<option value="umum">UMUM</option>
						<option value="jknpbi">JKN PBI</option>
						<option value="jknnonpbi">JKN NON PBI</option>
						<option value="program">PROGRAM</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Poli</td>
				<td>:</td>
				<td>
					<select name="poli">
						<option value="">- pilih</option>
						<option value="bp">BP</option>
						<option value="kia">KIA</option>
						<option value="gigi">GIGI</option>
						<option value="dll">DLL</option>
					</select>
				</td>
			</tr>
		</table>

		<input type="submit" class="submit form" value="Simpan">

		<a href="list_member.php" class="btn-form">Kembali</a>
	</form>
</body>
</html>
