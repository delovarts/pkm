<?php
include "connection.php";

require_once('fpdf/fpdf.php');

$pdf = new FPDF('L','mm',array(210,305));
$pdf->SetMargins(20,20,20,20);

$pdf->AddPage();
$pdf->Image('LOGO PUSKESMAS.png',80,15,19,24);

$pdf->Cell(23);
$pdf->SetFont('Times','',14);
$pdf->Cell(0,6.8,"UPTD PUSKESMAS ASEMBAGUS",0,1,'C');
$pdf->Cell(23);
$pdf->Cell(0,6.8,"Alamat : Jl. Raya Banyuwangi  No. 01 Desa Mojosari",0,1,'C');
$pdf->Cell(23);
$pdf->Cell(0,6.8,"Kec. Asembagus Kab. Situbondo 68373, telp. 0338-453995",0,1,'C');

$pdf->SetLineWidth(1);
$pdf->Line(20,43,285,43);
$pdf->SetLineWidth(0);
$pdf->Line(20,44,285,44);

$pdf->Ln(10);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,6.8,"Laporan Retensi",0,1,'C');
$pdf->Ln(6);

$query = "SELECT * FROM tb_retensi";
$result = mysqli_query($db,$query);

$pdf->Cell(10,8,'No',1,0,'C');
$pdf->Cell(28,8,'Tanggal',1,0,'C');
$pdf->Cell(40,8,'Alamat',1,0,'C');
$pdf->Cell(25,8,'Indeks',1,0,'C');
$pdf->Cell(70,8,'Nama Pasien',1,0,'C');
$pdf->Cell(40,8,'Nik',1,0,'C');
$pdf->Cell(40,8,'Asuransi',1,0,'C');
$pdf->Cell(12,8,'Poli',1,1,'C');
$i=1;

$pdf->SetFont('Times','',12);
foreach ($result as $r) {
	
	$pdf->Cell(10,8,$i++,1,0,'C');
	$pdf->Cell(28,8,$r['tanggal'],1,0,'C');
	$pdf->Cell(40,8,$r['alamat'],1,0,'C');
	$pdf->Cell(25,8,$r['indeks'],1,0,'C');
	$pdf->Cell(70,8,$r['nama_pasien'],1,0,'C');
	$pdf->Cell(40,8,$r['nik'],1,0,'C');
	$pdf->Cell(40,8,$r['asuransi'],1,0,'C');
	$pdf->Cell(12,8,$r['poli'],1,1,'C');
}

$data = mysqli_fetch_assoc($result);
$tanggal = $data['tanggal'];
// tanggal Hari Ini
$tanggal = date('d-m-Y');
$tgl = explode("-", $tanggal);
$hari = $tgl[0]; 
$bulan = $tgl[1];
$tahun = $tgl[2];
switch ($bulan) {
	case '01':
	$bulan = "Januari";
	break;
	case '02':
	$bulan = "Februari";
	break;
	case '03':
	$bulan = "Maret";
	break;
	case '04':
	$bulan = "April";
	break;
	case '05':
	$bulan = "Mei";
	break;
	case '06':
	$bulan = "Juni";
	break;
	case '07':
	$bulan = "Juli";
	break;
	case '08':
	$bulan = "Agustus";
	break;
	case '09':
	$bulan = "September";
	break;
	case '10':
	$bulan = "Oktober";
	break;
	case '11':
	$bulan = "November";
	break;
	case '12':
	$bulan = "Desember";
	break;
	
}

$pdf->Ln(10);
$pdf->Cell(170);
$pdf->Cell(0,8,"Asembagus,$hari $bulan $tahun",0,1,'C');
$pdf->Cell(170);
$pdf->Cell(0,8,'Petugas Filing',0,1,'C');
$pdf->Ln(20);
$pdf->SetFont('Times','U',12);
$pdf->Cell(170);
$pdf->Cell(0,8,'................................',0,1,'C');


$pdf->Output();

?>