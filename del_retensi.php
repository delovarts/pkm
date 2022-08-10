<?php
include "connection.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}else{
	echo "error dari id";
}

$query = "DELETE FROM tb_retensi WHERE id=$id";

$delete = mysqli_query($db,$query);

if ($delete == 0) {
	echo "Gagal delete <a href='list_retensi.php'>Kembali</a>";
}else{
	header('Location: list_retensi.php');
}

?>