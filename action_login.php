<?php
require_once('connection.php');

// mamvalidasi inputan
if (isset($_POST['username'])) {
	$username=$_POST['username'];
}
else{
	echo "username error";
}

if (isset($_POST['password'])) {
	$password=$_POST['password'];
}
else{
	echo "password error";
}

// hasing password
$password=hash("sha256", $password);

// menyiapkan Query MySQL untuk dieksekusi
$query="SELECT * FROM tb_akun WHERE username='{$username}'";

// mengekesekusi MySQL Query
$result=mysqli_query($db,$query);

// karena pemanggilan data hanya satu, maka menggunakan syntax di bawah ini. (intinya tidak menggunkan perulangan foreach)
$data=mysqli_fetch_assoc($result);

if (is_null($data)) {
	echo "Data akun masih kosong <a href='login.php'>Kembali</a>";
	exit();
}
else if( $data['password'] != $password){
	echo "password salah <a href='login.php'>Kembali</a>";
	exit();
}
else{
	// memulai fungsi SESSION, session hanya dapat digunakan setelah fungsi ini
	session_start();

	// status login dikonfirmasi benar
	$_SESSION['status']=true;
	
	header('Location: index.php');
}

?>