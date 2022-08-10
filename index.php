<?php
include "connection.php";
//cek apakah sudah login
require_once('cek_login.php');
//jika belum login, akan di lempar ke form login 
if ($sessionStatus==false) {
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="badan">
			<?php require('sidebar.php'); ?>
			<h2 align="center">Hello Mili Insiyatul Kurnia</h2>

			</div>
		</div>
	</div>
</body>
</html>
