<?php
error_reporting();
session_start();
include "koneksi.php";

$email     = $_POST['username'];
$password  = $_POST['pass'];
$user      = "SELECT * FROM `user` where email = '$email' AND password = '$password' ";
$result    = mysqli_query($connect,$user);
if (mysqli_num_rows($result) != 0)
  {
  while ($row=mysqli_fetch_row($result))
    {
    $_SESSION['kode']   = $row[0];
    $_SESSION['nama']   = $row[3];
    $_SESSION['email']  = $row[1];
    $_SESSION['jabatan']= $row[3];
    $_SESSION['plant']  = $row[5];
    }

    echo "<script>window.location = '../index.php';</script>";
  } else {
    echo "<script>alert('Login Gagal, Pastikan Username dan Password Benar');window.location = '../../index.php';</script>";
  }


?>
