<?php
require_once("connection.php");

$opsi=$_GET['opsi'];
//start input
if($opsi=="input"){

	$tanggal=$_POST['tanggal'];
	$nama=$_POST['nama'];
	$indeks=$_POST['indeks'];
	$ket=$_POST['ket'];
	
	$query = "INSERT INTO `tb_kunjungan`(`tanggal`,`nama`, `indeks`, `ket`) VALUES ('$tanggal','$nama','$indeks','$ket')";

	$insert = mysqli_query($db,$query);

	if ($insert == "true") {
		header('location: kunjungan.php');
	} else {
		echo "maaf terjadi kesalahan input";
	}
}

//end kondisi input

//start kondisi delete
elseif ($opsi=="delete") {
	$id=$_GET['id'];


	$query ="DELETE FROM tb_kunjungan WHERE id=$id";

	$delete = mysqli_query($db,$query);

	if ($delete == "true") {
		header('location: kunjungan.php');
	} else {
		echo "maaf terjadi kesalahan delete";
	}
	
}

//end kondisi delete

//start kondisi update
elseif ($opsi=="update") {

	$id = $_POST['id'];
	$tanggal=$_POST['tanggal'];
	$nama=$_POST['nama'];
	$indeks=$_POST['indeks'];
	$ket=$_POST['ket'];

	$query = "UPDATE `tb_kunjungan` SET `tanggal`='$tanggal',`nama`='$nama',`indeks`='$indeks',`ket`='$ket' WHERE id = '$id'";

	$update = mysqli_query($db,$query);

	if ($update == "true") {
		header('location: kunjungan.php');
	} else {
		echo "maaf terjadi kesalahan";
	}

}
//end kondisi update

?>

