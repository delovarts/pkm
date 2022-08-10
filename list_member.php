<?php
include "connection.php";

// untuk paging
$halaman = 10; //batasan halaman
$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

// filter get nik
if (empty($_GET['cari'])) {
	$cari = "ORDER BY `indeks` LIMIT $mulai, $halaman";
	$navPage = "ada";
}
else{
	$result_cari = $_GET['cari'];
	$cari = "WHERE indeks LIKE '$result_cari' OR tanggal LIKE '%$result_cari%'";
	$navPage = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrap">
	<? require('sidebar.php'); ?>
	<p>
		<h3 align="center">Search By Indeks and Date</h3 >
		<form action="cari_medis.php" method="POST" class="form-cari">
			<div class="cari">


				<input type="text" name="cari" placeholder="cari...">

				<input type="submit" class="submit" name="submit" value="Temukan">
			</div> 
		</form>
	</p>

	<p>
		<a class="tambah-data" href="form_member.php">Tambah Rekam Medis</a> </p>	
		<div class="tabel">
			<?
//buat header table
			echo "<table>
			<tr>
			<th>Tanggal</th>
			<th>Nama KK</th>
			<th>Alamat</th>
			<th>indeks</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>NIK</th>
			<th>Asuransi</th>
			<th>Kunjungan</th>
			<th>Poli</th><th>Aksi</th>
			</tr>";
//ambil data dari database
			$q=$db->query("SELECT * FROM `tb_member` $cari");
			$no=1;
			while($r=$q->fetch_array()){
				echo "<tr>
				<td>".$r['tanggal']."</td>
				<td>".$r['nama_kk']."</td>
				<td>".$r['alamat']."</td>
				<td>".$r['indeks']."</td>
				<td>".$r['nama_pasien']."</td>
				<td>".$r['jender']."</td>
				<td>".$r['umur']."</td>
				<td>".$r['nik']."</td>
				<td>".$r['asuransi']."</td>
				<td>".$r['kunjungan']."</td>
				<td>".$r['poli']."</td>
				<td>
				<a href='edit_member.php?id=".$r['id']."'>Edit</a> |
				<a href='member_controllers.php?opsi=retensi&id=".$r['id']."'>Retensi</a> | <a href='action-copy.php?id=".$r['id']."'>Copy</a>
				</td>
				</tr>";
				$no++;
			}
			echo "</table>";
			?>
		</div>

		<!-- footer konten -->
		<div class="layerPage m-3">
			<?php
			$sql = mysqli_query($db,"SELECT * FROM tb_member");
			$total = mysqli_num_rows($sql);
			$pages = ceil($total/$halaman);

				// batas page tampil
			$limitpageshow = $page+3;

				// kondisi disable tombol sebelumnya
			$previouspage = $page-1;
			if ($page == 1) {
				$hilangP = 'disabled';
				$nav_hilang = "";
			}else{
				$hilangP = '';
				$nav_hilang = "?halaman=$previouspage";
			}

			$nextpage = $page+1;
			if ($pages == 1) {
				$hilangN = 'disabled';
				$nav_hilang2 = ""; 
			}else{
				$nav_hilang2 = "?halaman=$nextpage"; 
			}

				// kondisi disable tombol selanjutnya
			if ($page == $pages-3) {
				$hilangN = 'disabled';
				$limitpageshow = $page+3;
			}elseif ($page == $pages-2) {
				$hilangN = 'disabled';
				$limitpageshow = $page+2;
			}elseif ($page == $pages-1) {
				$hilangN = 'disabled';
				$limitpageshow = $page+1;
			}elseif($page == $pages){
				$hilangN = 'disabled';
				$limitpageshow = $page;
			}
			else{
				$hilangN = '';
			}

			if ($navPage == "ada") {

				?>
				<nav aria-label="pagging">
					<ul class="pagination">
						<?php if ($page > 1) {?>
							<li class="page-item">
								<a class="page-link" href="?halaman=1">Awal</a>
							</li>
						<?php } ?>

						<li class="page-item">
							<a class="page-link <?php echo $hilangP?>" href="<?php echo $nav_hilang ?>" aria-disabled="true"><</a>
						</li>

						<li class="page-item">
							<a class="page-link <?php echo $hilangN; ?>" href="<?php echo $nav_hilang2;?>">></a>
						</li>

						<?php if ($page < $pages OR $page == $pages) { ?>
							<li class="page-item">
								<a class="page-link <?php echo $hilangN; ?>" href="?halaman=<?php echo $pages?>">Akhir</a>
							</li>
						<?php } ?>

					</ul>
					<p>Page: <?php echo $page?> of <?php echo $pages?></p>
				</nav>
			<?php } ?>

		</div>
	</body>
	</html>
