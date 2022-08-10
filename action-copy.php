<?php
include "connection.php";

$id=$_GET['id'];

$query = "SELECT * FROM tb_member WHERE id=$id";
$result = mysqli_query($db,$query);

foreach ($result as $member) {
	$tanggal=$member['tanggal'];
	$indeks=$member['indeks'];
	$nama_pasien=$member['nama_pasien'];
}

$query = "INSERT INTO tb_kunjungan(tanggal, indeks, nama, ket) VALUES ('$tanggal','$indeks','$nama_pasien','')";

$insert = mysqli_query($db,$query);

if ($insert == "true") {
	?>
	<script type="text/javascript">
		alert('sukses copy data');
		window.location.href="list_member.php";
	</script>
	<?php
}else{
	echo "gagal copy data";

}
?>