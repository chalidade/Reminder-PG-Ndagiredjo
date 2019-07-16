<?php
include "koneksi.php";
$id       = $_REQUEST['id'];
$no       = $_POST['no'];
$lama     = $_POST['lama'];
$file     = $_POST['file'];
$kategori= $_POST['kategori'];
$jenis    = $_POST['jenis'];
$tanggal  = $_POST['tanggal'];
$date     = strtotime($tanggal);
$newDate  = date("Y-m-d", strtotime("+$lama year", $date));

$update = mysqli_query($connect, "UPDATE `lingkungan_kerja` SET `akhir_pemeriksaan` = '$newDate', `status` = '0', `pemeriksaan_terakhir` = '$tanggal' WHERE `lingkungan_kerja`.`no` = '$no';");
echo "<script>alert('Sertifikasi kategori $kategori, jenis $jenis berhasil diperpanjang selama $lama tahun, berarkhir pada $newDate');window.location = '../index.php';</script>";
 ?>
