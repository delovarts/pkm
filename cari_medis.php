<?php
if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
}else{
	$cari = "";
}

header("Location: list_member.php?cari=$cari");

?>