<?php
include "connection.php";
require_once('cek_login.php');

//cek apakah sudah login
//jika belum login, akan di lempar ke form login 
// if ($sessionStatus==false) {
// 	header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Registrasi Akun</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	
</head>
<body>
	<div class="loginBox">
		<img src="LOGO PUSKESMAS.png" class="user">
			<form action="registrasi_controller.php?opsi=input" method="POST">
				<h2>Menu Registrasi Akun</h2>

				<p>Username</p>
				<input name="username" id="username" type="text" class="form-control bg-light" placeholder="Masukkan Username" required>

				<p>Password</p>
				<input name="password" id="password" type="password" class="form-control bg-light" placeholder="Masukkan Password Anda" required>

				<p>Konfirmasi Password</p>
				<input name="repassword" id="repassword" type="password" class="form-control bg-light" placeholder="Masukkan Ulang Password Anda" required>
				<p>
					<button>Registrasi</button>
				</p>
			</form>

			<div class="opsi-login mt-4 text-center">
				<p class="mb-0">---  jika sudah memiliki akun silahkan login ---</p>
				<a href="login.php" class="text-decoration-none">Login</a>
			</div>
		</div>
		
	</div>
</body>
</html>
