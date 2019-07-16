<?php
  include "koneksi.php";

  $id      = $_REQUEST['id'];
  $nama    = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $telpon  = $_POST['telpon'];
  $plant   = $_POST['plant'];
  $email   = $_POST['email'];
  $pass    = $_POST['password'];

  if ($id == "add") {
    $add     = mysqli_query($connect, "INSERT INTO `user` (`id`, `email`, `password`, `jabatan`, `nama`, `plant`, `telpon`) VALUES (NULL, '$email', '$pass', '$jabatan', '$nama', '$plant', '$telpon');");
    echo "<script>alert('Data User Berhasil Disimpan');window.location = '../index.php';</script>";
  }

 ?>
