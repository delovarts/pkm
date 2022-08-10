<?php
include "connection.php";

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Kunjungan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="wrap">
		<div class="badan">
			<!-- sidebar -->
			<?php require('sidebar.php'); ?>
	<?php

	$query = "SELECT * FROM tb_kunjungan WHERE id=$id";
	$result = mysqli_query($db,$query);

	foreach ($result as $k) {
		$tanggal=$k['tanggal'];
		$nama=$k['nama'];
		$indeks=$k['indeks'];
		$ket=$k['ket'];
	}
	?>
	<h4>Edit Kunjungan</h4>
	<form method="POST" action="kunjungan_controllers.php?opsi=update" class="form">
		<table width="300" border="0">
			<input type="text" name="id" value="<?php echo $id; ?>" hidden>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>indeks</td>
				<td>:</td>
				<td><input type="number" name="indeks" value="<?php echo $indeks; ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td>
					<select name="ket">
						<?php 
						if($ket == "ADA"){
							$ada = "selected";
							$baru = "";
						}elseif ($ket == "BUAT BARU") {
							$ada = "";
							$baru = "selected";
						}

						?>
						<option value="">- pilih</option>
						<option value="ADA" <?php echo $ada; ?> >ADA</option> 
						<option value="BUAT BARU" <?php echo $baru; ?> >BUAT BARU</option>
					</select>
				</td>
			</tr>
			
		</table>
		<input type="submit" class="submit form" value="Perbarui">
		<a href="kunjungan.php" class="btn-form">Kembali</a>

	</form>
</body>
</html>
