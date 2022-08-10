<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	
</head>
<body>
	<div class="loginBox">
	<img src="LOGO PUSKESMAS.png" class="user">
			<h2>SIRKAM</h2>
			<form action="action_login.php" method="POST">

			<p>Username</p>
			<input name="username" id="username" type="text" class="form-control bg-light" placeholder="Masukkan username Anda" required>

			<p>Password</p>
			<input name="password" id="password" type="password" class="form-control bg-light" placeholder="Masukkan Password Anda" required>

			<p>
				<button>Masuk</button>
			</p>
			</form>
		</div>
	</div>
</body>
</html>