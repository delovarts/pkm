<?php
require_once("connection.php");

$opsi=$_GET['opsi'];
//start input
if($opsi=="input"){

	$tanggal=$_POST['tanggal'];
	$nama_kk=$_POST['nama_kk'];
	$alamat=$_POST['alamat'];
	$indeks=$_POST['indeks'];
	$nama_pasien=$_POST['nama_pasien'];
	$jender=$_POST['jender'];
	$umur=$_POST['umur'];
	$nik=$_POST['nik'];
	$asuransi=$_POST['asuransi'];
	$kunjungan=$_POST['j_kunjungan'];
	$poli=$_POST['poli'];


	$query = "INSERT INTO `tb_member`(`tanggal`, `nama_kk`, `alamat`, `indeks`, `nama_pasien`, `jender`, `umur`, `nik`, `asuransi`, `kunjungan`, `poli`) VALUES ('$tanggal','$nama_kk','$alamat','$indeks','$nama_pasien','$jender','$umur','$nik','$asuransi','$kunjungan','$poli')";

	$insert = mysqli_query($db,$query);

	if ($insert == "true") {
		header('location: list_member.php');
	} else {
		echo "maaf terjadi kesalahan";
	}
}

//end kondisi input

//start kondisi delete
elseif ($opsi=="retensi") {
	$id=$_GET['id'];

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

		$query = "INSERT INTO `tb_retensi`(`tanggal`, `nama_kk`, `alamat`, `indeks`, `nama_pasien`, `jender`, `umur`, `nik`, `asuransi`, `kunjungan`, `poli`) VALUES ('$tanggal','$nama_kk','$alamat','$indeks','$nama_pasien','$jender','$umur','$nik','$asuransi','$kunjungan','$poli')";

		$insert = mysqli_query($db,$query);

		if ($insert == "true") {
			$query2 ="DELETE FROM tb_member WHERE id=$id";

			$delete = mysqli_query($db,$query2);

			if ($delete == "true") {
				header('location: list_member.php');
			} else {
				echo "maaf terjadi kesalahan delete";
			}
		} else {

			$query2 ="DELETE FROM tb_member WHERE id=$id";

			$delete = mysqli_query($db,$query2);

			if ($delete == "true") {
				header('location: list_member.php');
			} else {
				echo "maaf terjadi kesalahan delete";
			}

		}
	}
}
//end kondisi delete

//start kondisi update
elseif ($opsi=="update") {

	$id = $_POST['id'];
	$tanggal=$_POST['tanggal'];
	$nama_kk=$_POST['nama_kk'];
	$alamat=$_POST['alamat'];
	$indeks=$_POST['indeks'];
	$nama_pasien=$_POST['nama_pasien'];
	$jender=$_POST['jender'];
	$umur=$_POST['umur'];
	$nik=$_POST['nik'];
	$asuransi=$_POST['asuransi'];
	$kunjungan=$_POST['j_kunjungan'];
	$poli=$_POST['poli'];

	$query = "UPDATE `tb_member` SET `tanggal`='$tanggal',`nama_kk`='$nama_kk',`alamat`='$alamat',`indeks`='$indeks',`nama_pasien`='$nama_pasien',`jender`='$jender',`umur`='$umur',`nik`='$nik',`asuransi`='$asuransi',`kunjungan`='$kunjungan',`poli`='$poli' WHERE id = '$id'";

	$update = mysqli_query($db,$query);

	if ($update == "true") {
		header('location: list_member.php');
	} else {
		echo "maaf terjadi kesalahan";
	}

}
//end kondisi update

?>

