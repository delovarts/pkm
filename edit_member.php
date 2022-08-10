<?php
include "connection.php";

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="wrap">
		<div class="badan">
			<!-- sidebar -->
			<?php require('sidebar.php'); ?>
	<?php

	$query = "SELECT * FROM tb_member WHERE id=$id";
	$result = mysqli_query($db,$query);

	foreach ($result as $member) {
		$tanggal=$member['tanggal'];
		$nama_kk=$member['nama_kk'];
		$alamat=$member['alamat'];
		$indeks=$member['indeks'];
		$nama_pasien=$member['nama_pasien'];
		$jender=$member['jender'];
		$umur=$member['umur'];
		$nik=$member['nik'];
		$asuransi=$member['asuransi'];
		$kunjungan=$member['kunjungan'];
		$poli=$member['poli'];


	}
	?>
	<h3>Edit rekam Medis</h3>

	<form method="POST" action="member_controllers.php?opsi=update" class="form">
		<table width="600" border="0">
			<input type="text" name="id" value="<?php echo $id; ?>" hidden>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>"></td>
			</tr>
			<tr>
				<td>Nama KK</td>
				<td>:</td>
				<td><input type="text" name="nama_kk" value="<?php echo $nama_kk; ?>"></td>
			</tr>
			<tr>
				<td>Alamat KK</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="40" rows="6"><?php echo $alamat; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Index</td>
				<td>:</td>
				<td><input type="number" name="indeks" value="<?php echo $indeks; ?>"></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><input type="text" name="nama_pasien" value="<?php echo $nama_pasien; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>&nbsp</td>
				<td>
					<?php
					if ($jender == "laki") {
						$s_laki = "checked";
						$s_perempuan = "";
					} elseif ($jender == "perempuan"){
						$s_laki = "";
						$s_perempuan = "checked";
					}
					?>
					<input type="radio" name="jender" value="laki" <?php echo $s_laki; ?>>Laki Laki
					<input type="radio" name="jender" value="perempuan" <?php echo $s_perempuan; ?> >Perempuan
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="number" name="umur" value="<?php  echo $umur; ?>"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="number" name="nik" value="<?php echo $nik; ?>"></td>
			</tr>
			<tr>
				<td>No Asuransi</td>
				<td>:</td>
				<td><input type="number" name="asuransi" value="<?php echo $asuransi; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kunjungan</td>
				<td>:</td>
				<td>
					<select name="j_kunjungan">
						<?php 
						if($kunjungan == "umum"){
							$umum = "selected";
							$jknpbi = "";
							$jknnonpbi = "";
							$program = "";
						}elseif ($kunjungan == "jknpbi") {
							$umum = "";
							$jknpbi = "selected";
							$jknnonpbi = "";
							$program = "";
						}elseif ($kunjungan == "jknnonpbi") {
							$umum = "";
							$jknpbi = "";
							$jknnonpbi = "selected";
							$program = "";
						}elseif ($kunjungan == "program") {
							$umum = "";
							$jknpbi = "";
							$jknnonpbi = "";
							$program = "selected";
						}

						?>
						<option value="">- pilih</option>
						<option value="umum" <?php echo $umum; ?> >UMUM</option> 
						<option value="jknpbi" <?php echo $jknpbi; ?> >JKN PBI</option>
						<option value="jknnonpbi" <?php echo $jknnonpbi; ?> >JKN NON PBI</option>
						<option value="program" <?php echo $program; ?> >PROGRAM</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Poli</td>
				<td>:</td>
				<td>
					<select name="poli">
						<?php 
						if($poli == "bp"){
							$bp = "selected";
							$kia = "";
							$gigi = "";
							$dll = "";
						}elseif ($poli == "kia") {
							$bp = "";
							$kia = "selected";
							$gigi = "";
							$dll = "";
						}elseif ($poli == "gigi") {
							$bp = "";
							$kia = "";
							$gigi = "selected";
							$dll = "";
						}elseif ($poli == "dll") {
							$bp = "";
							$kia = "";
							$gigi = "";
							$dll = "selected";
						} 
						?>

						<option value="">- pilih</option>
						<option value="bp" <?php echo $bp; ?>>BP</option>
						<option value="kia" <?php echo $kia; ?> >KIA</option>
						<option value="gigi" <?php echo $gigi; ?> >GIGI</option>
						<option value="dll" <?php echo $dll; ?> >DLL</option>
					</select>
				</td>
			</tr>
			
		</table>
		<input type="submit" class="submit form" value="Perbarui">
		<a href="list_member.php" class="btn-form">Kembali</a>
	</form>
</body>
</html>
