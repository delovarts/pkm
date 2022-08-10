<?php
include "connection.php";
// require_once('cek_login.php');

//cek apakah sudah login
//jika belum login, akan di lempar ke form login 
// if ($sessionStatus==false) {
// 	header("Location: login.php");
// }
// dapatken variable opsi
$opsi = $_GET['opsi'];

if ($opsi == "input") {

	if (isset($_POST['username'])) {
		$username=$_POST['username'];
	}
	else{
		echo "error username <a href='registrasi.php'>Kembali</a>"; //status error
	}

	if (isset($_POST['password'])) {
		$password=$_POST['password'];
	}
	else{
		echo "error password <a href='registrasi.php'>Kembali</a>";
	}

	if (isset($_POST['repassword'])) {
		$repassword=$_POST['repassword'];
	}
	else{
		echo "error re-password <a href='registrasi.php'>Kembali</a>";
	}

// pengecekan password dan konfirmasi password
	if ($password != $repassword) {
		echo "password tidak sama, ulangi mengisi pendaftaran <a href='registrasi.php'>Kembali</a>";
		exit();
	}
	else{
		$password=hash("sha256", $password);
	}

// menyiapkan Query MySQL untuk dieksekusi
	$query = "INSERT INTO tb_akun (username,password) VALUES ('$username','$password')";
// mengeksekusi MySQL Query
	$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
	if ($insert == false) {
		echo "Error Dalam Eksekusi Query. <a href='registrasi.php'>Kembali</a>";
	}else{
		header("Location: index.php");
	}
}

?>