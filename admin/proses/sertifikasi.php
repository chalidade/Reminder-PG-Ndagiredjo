<?php
include "koneksi.php";
$id         = $_REQUEST['id'];
$data       = $_REQUEST['data'];
if ($data   == "lingkungan") {
  $no       = $_POST['no'];
  $lama     = $_POST['lama'];
  $file     = $_POST['file'];
  $kategori = $_POST['kategori'];
  $jenis    = $_POST['jenis'];
  $tanggal  = $_POST['tanggal'];
  $date     = strtotime($tanggal);
  $newDate  = date("Y-m-d", strtotime("+$lama year", $date));

  $update = mysqli_query($connect, "UPDATE `lingkungan_kerja` SET `akhir_pemeriksaan` = '$newDate', `status` = '0', `pemeriksaan_terakhir` = '$tanggal' WHERE `lingkungan_kerja`.`no` = '$no';");
  echo "<script>alert('Sertifikasi kategori $kategori, jenis $jenis berhasil diperpanjang selama $lama tahun, berarkhir pada $newDate');window.location = '../index.php';</script>";
} else if($data == "sdm") {
   $no      = $_POST['no'];
   $nama    = $_POST['nama'];
   $keahlian= $_POST['keahlian'];
   $skp     = $_POST['skp'];
   $berlaku = $_POST['berlaku'];
   $lama    = $_POST['lama'];
   $file    = $_POST['file'];
   $date    = strtotime($berlaku);
   $newDate = date("Y-m-d", strtotime("+$lama year", $date));
   $update = mysqli_query($connect, "UPDATE `SDM` SET `berlaku` = '$newDate' WHERE `SDM`.`no` = '$no';");
    echo "<script>alert('Sertifikasi SDM atas nama $nama, no skp $skp berhasil diperpanjang selama $lama tahun, berarkhir pada $newDate');window.location = '../index.php';</script>";
} else if($data == "peralatan") {
  $no       = $_POST['no'];
  $nama     = $_POST['nama'];
  $stasiun  = $_POST['stasiun'];
  $ket      = $_POST['keterangan'];
  $ai       = $_POST['ai'];
  $periksa  = $_POST['pemeriksaan_terakhir'];
  $batas    = $_POST['batas'];
  $berlaku  = $_POST['berlaku'];
  $lama     = $_POST['lama'];
  $tanggal  = date('Y-m-d');
  $date    = strtotime($batas);
  $newDate = date("Y-m-d", strtotime("+$lama year", $date));
  $update = mysqli_query($connect, "UPDATE `peralatan` SET `pemeriksaan_terakhir` = '$tanggal', `batas_akhir` = '$newDate', `masa_berlaku` = '$lama Tahun' WHERE `peralatan`.`no` = '$no';");
  echo "<script>alert('Sertifikasi Peralatan $nama, no ai $ai berhasil diperpanjang selama $lama tahun, berarkhir pada $newDate');window.location = '../index.php';</script>";
}

 ?>
