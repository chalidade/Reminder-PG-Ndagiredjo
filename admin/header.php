<?php
session_start();
include "proses/koneksi.php";
 ?>

<!DOCTYPE html>
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="Colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Pabrik Gula Ngadiredjo</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
    <style media="screen" type="text/css">
    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    height: 40px;
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 8px 16px;
    transition: 0.3s;
    font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    }
      .gambar:hover {
        width:500px;
      }

      div.sticky {
        position: sticky;
        width: 90%;
        border-radius:5px;
        margin:auto;
        bottom: 0px;
        background: #fff;
      }

    </style>
  </head>
  <body>
    <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Notifikasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen" style="font-size: 15px;">Peralatan</button>
              <button class="tablinks" onclick="openCity(event, 'Paris')" style="font-size: 15px;">SDM</button>
              <button class="tablinks" onclick="openCity(event, 'Tokyo')" style="font-size: 15px;">Lingkungan</button>
            </div>

            <div id="London" class="tabcontent">
              <table width="100%">
                <?php
                $n  = mysqli_query($connect, "SELECT * FROM `peralatan` WHERE `status` = '3'");
                while ($tool = mysqli_fetch_array($n)) {
                 ?>
                <tr>
                  <td width="12%">
                    <img style="vertical-align: top;width:20px;" src="img/exclamation-mark.png" alt="">
                  </td>
                  <td>
                    <p style="color:#242424;font-size:11px;">
                      Nama <?php echo $tool['nama_alat']; ?>, no ai <?php echo $tool['no_Ai']; ?> telah melewati batas sertifikasi, <font color="red">Segera lakukan perpanjangan</font>
                    </p>
                  </td>
                </tr>
              <?php } ?>
              <?php
              $m  = mysqli_query($connect, "SELECT * FROM `peralatan` WHERE `status` = '2'");
              while ($tool1 = mysqli_fetch_array($m)) {
               ?>
              <tr>
                <td width="12%">
                  <img style="vertical-align: top;width:20px;" src="img/warning.png" alt="">
                </td>
                <td>
                  <p style="color:#242424;font-size:11px;">
                    Nama <?php echo $tool['nama_alat']; ?>, no ai <?php echo $tool['no_Ai']; ?> Sertifikasi bulan ini habis, <font color="red">Segera lakukan perpanjangan</font>
                  </p>
                </td>
              </tr>
            <?php } ?>
            <?php
            $l  = mysqli_query($connect, "SELECT * FROM `peralatan` WHERE `status` = '1'");
            while ($tool2 = mysqli_fetch_array($l)) {
             ?>
            <tr>
              <td width="12%">
                <img style="vertical-align: top;width:20px;" src="img/warning.png" alt="">
              </td>
              <td>
                Nama <?php echo $tool['nama_alat']; ?>, no ai <?php echo $tool['no_Ai']; ?> Sertifikasi habis bulan depan, <font color="red">Segera lakukan perpanjangan</font>
              </td>
            </tr>
          <?php } ?>
              </table>
            </div>

            <div id="Paris" class="tabcontent">
              <table width="100%">
                <?php
                $a  = mysqli_query($connect, "SELECT * FROM `SDM` WHERE `status` = '3'");
                while ($sdm = mysqli_fetch_array($a)) {
                 ?>
                <tr>
                  <td width="12%">
                    <img style="vertical-align: top;width:20px;" src="img/exclamation-mark.png" alt="">
                  </td>
                  <td>
                    <p style="color:#242424;font-size:11px;">
                      Nama <?php echo $sdm['nama']; ?>, no skp/sio <?php echo $sdm['skp_sio']; ?> telah melewati batas sertifikasi, <font color="red">Segera lakukan perpanjangan</font>
                    </p>
                  </td>
                </tr>
              <?php } ?>
              <?php
              $b  = mysqli_query($connect, "SELECT * FROM `SDM` WHERE `status` = '2'");
              while ($sdm1 = mysqli_fetch_array($b)) {
               ?>
              <tr>
                <td width="12%">
                  <img style="vertical-align: top;width:20px;" src="img/warning.png" alt="">
                </td>
                <td>
                  <p style="color:#242424;font-size:11px;">
                    Nama <?php echo $sdm1['nama']; ?>, no skp/sio <?php echo $sdm1['skp_sio']; ?> telah melewati batas sertifikasi, <font color="red">Segera lakukan perpanjangan</font>
                  </p>
                </td>
              </tr>
            <?php } ?>
            <?php
            $c  = mysqli_query($connect, "SELECT * FROM `SDM` WHERE `status` = '1'");
            while ($sdm2 = mysqli_fetch_array($c)) {
             ?>
            <tr>
              <td width="12%">
                <img style="vertical-align: top;width:20px;" src="img/warning.png" alt="">
              </td>
              <td>
                <p style="color:#242424;font-size:11px;">
                  Nama <?php echo $sdm2['nama']; ?>, no skp/sio <?php echo $sdm2['skp_sio']; ?> telah melewati batas sertifikasi, <font color="red">Segera lakukan perpanjangan</font>
                </p>
              </td>
            </tr>
          <?php } ?>
              </table>
            </div>

            <div id="Tokyo" class="tabcontent">
              <table width="100%">
                <?php
                $a  = mysqli_query($connect, "SELECT * FROM `lingkungan_kerja` WHERE `status` = '3'");
                while ($lingkungan = mysqli_fetch_array($a)) {
                 ?>
                <tr>
                  <td width="12%">
                    <img style="vertical-align: top;width:20px;" src="img/exclamation-mark.png" alt="">
                  </td>
                  <td>
                    <p style="color:#242424;font-size:11px;"><b style="color:#242424;font-weight:800;">Jenis <?php echo $lingkungan['jenis']; ?></b> kategori <?php echo $lingkungan['kategori']; ?> batas akhir perpanjangan <i style="color:#242424;"><?php echo $lingkungan['akhir_pemeriksaan']; ?></i> Status Kadaluarsa,<font color="red"> harap dilakukan perpanjangan sertifikasi</font></p>
                  </td>
                </tr>
              <?php } ?>
              <?php
              $b  = mysqli_query($connect, "SELECT * FROM `lingkungan_kerja` WHERE `status` = '2'");
              while ($lingkungan1 = mysqli_fetch_array($b)) {
               ?>
              <tr>
                <td width="12%">
                  <img style="vertical-align: top;width:20px;" src="img/warning.png" alt="">
                </td>
                <td>
                  <p style="color:#242424;font-size:11px;"><b style="color:#242424;font-weight:800;">Jenis <?php echo $lingkungan1['jenis']; ?></b> kategori <?php echo $lingkungan1['kategori']; ?> batas akhir perpanjangan <i style="color:#242424;"><?php echo $lingkungan1['akhir_pemeriksaan']; ?></i> Status Habis Bulan Ini,<font color="red"> harap dilakukan perpanjangan sertifikasi</font></p>
                </td>
              </tr>
            <?php } ?>
            <?php
            $c  = mysqli_query($connect, "SELECT * FROM `lingkungan_kerja` WHERE `status` = '1'");
            while ($lingkungan2 = mysqli_fetch_array($c)) {
             ?>
            <tr>
              <td width="12%">
                <img style="vertical-align: top;width:20px;" src="img/warning.png" alt="">
              </td>
              <td>
                <p style="color:#242424;font-size:11px;"><b style="color:#242424;font-weight:800;">Jenis <?php echo $lingkungan2['jenis']; ?></b> kategori <?php echo $lingkungan2['kategori']; ?> batas akhir perpanjangan <i style="color:#242424;"><?php echo $lingkungan2['akhir_pemeriksaan']; ?></i> Status Habis Bulan Depan,<font color="red"> harap dilakukan perpanjangan sertifikasi</font></p>
              </td>
            </tr>
          <?php } ?>
              </table>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </form>
  </div>
    <!-- Start Header Area -->
    <header class="default-header">
      <div class="container">
        <div class="header-wrap">
          <div class="header-top d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="index.php"> <img src="../images/logo.png" alt="" style="width:80px;">
                <!-- <h3 class="logo" style="float:right;margin-top:19px;margin-left:10px;">
                  <font style="color:#085f63">PG</font><font style="color:#085f63"> Ngadiredjo</font></h3> -->
              </a>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="" style="background:red;text-align:center;width:25px;position: absolute;z-index: 9;top: -6px;left: 20px;border-radius: 200px;font-size: 11px;font-weight: 800;color: #fff;padding: 2px;height: 25px;">
                  <?php
                      $jumlah     = 0;
                      $alat       = 0;
                      $lingkungan = 0;
                      $sdm        = 0;
                      $a 					= mysqli_query($connect, "SELECT count(`status`) FROM `peralatan` WHERE `status` = '3' ");
    									while ($a 	= mysqli_fetch_row($a)) {
    									$deadline		= $a[0];

    									$b 					= mysqli_query($connect, "SELECT count(`status`) FROM `peralatan` WHERE `status` = '2' ");
    									while ($b 	= mysqli_fetch_row($b)) {
    									$ini				= $b[0];

    									$c 					= mysqli_query($connect, "SELECT count(`status`) FROM `peralatan` WHERE `status` = '1' ");
    									while ($c 	= mysqli_fetch_row($c)) {
    									$kurang 		= $c[0];

    									$d 					= mysqli_query($connect, "SELECT count(`status`) FROM `peralatan` WHERE `status` = '0' ");
    									while ($d 	= mysqli_fetch_row($d)) {
    									$aman 	 		= $d[0];

                        $alat     = $deadline + $ini + $kurang + $aman;
												}
											}
										}
									}

                  $e 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '3' ");
                  while ($e 	= mysqli_fetch_row($e)) {
                  $deadlinea	= $e[0];

                  $f 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '2' ");
                  while ($f 	= mysqli_fetch_row($f)) {
                  $inia 			= $f[0];

                  $g 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '1' ");
                  while ($g 	= mysqli_fetch_row($g)) {
                  $kuranga 		= $g[0];

                  $h 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '0' ");
                  while ($h 	= mysqli_fetch_row($h)) {
                  $amana 	 		= $h[0];

                  $lingkungan = $deadlinea + $inia + $kuranga + $amana;
                    }
                  }
                }
              }

              $i 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '3' ");
              while ($i 	= mysqli_fetch_row($i)) {
              $deadlineb	= $i[0];

              $j 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '2' ");
              while ($j 	= mysqli_fetch_row($j)) {
              $inib 			= $j[0];

              $k 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '1' ");
              while ($k 	= mysqli_fetch_row($k)) {
              $kurangb 		= $k[0];

              $l 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '0' ");
              while ($l 	= mysqli_fetch_row($l)) {
              $amanb 	 		= $l[0];

              $sdm = $deadlineb + $inib + $kurangb + $amanb;
                }
              }
            }
          }
                  // echo $lingkungan;
                  $jumlah = $alat + $lingkungan + $sdm;
                  if ($jumlah > 21) {
                    echo "20+";
                  } else {
                    echo $jumlah;
                  }
                   ?>
              </div>
              <div class="col-6">
                  <img src="img/bell.png"  data-toggle="modal" data-target="#notif" alt="" style="width:25px;float:right;margin-top:10px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Area -->
