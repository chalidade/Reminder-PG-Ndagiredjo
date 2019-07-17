<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Lingkungan</h3>
        <p> Inspeksi Lingkungan Kerja</p>
      </div>
    </div>
    <div class="row" style="margin-top:0px; padding:10px;font-size:12px;">
        <div class="col-md-12" style="margin-top:20px;margin-bottom:20px">
        </div>
        <div class="col-md-12">
        <table class="table" width="100%">
          <tr style="color:#000;font-size:12px">
            <th>Jenis</th>
            <th>Kategori</th>
            <th>Pemeriksaan Terakhir</th>
            <th>Batas Akhir</th>
          </tr>
          <?php
          $a    = mysqli_query($connect, "SELECT * FROM `lingkungan_kerja`");
          while ($lingkungan = mysqli_fetch_array($a)) {
            $id              = $lingkungan['no'];
            $akhir           = $lingkungan['akhir_pemeriksaan'];
            $date            = strtotime($akhir);
            $newDate         = date("Y-m-d", strtotime("-1 month", $date));
            $sebulansebelum  = date("Ym", strtotime("-1 month", $date));
            $bulanini        = date('Ym');
            $deadline        = date("Ym", strtotime($akhir));

            // echo "$bulanini - $deadline - $sebulansebelum<br>";
          ?>
          <?php
          if ($bulanini < $deadline && $bulanini == $sebulansebelum) {
           echo "<tr style='background:yellow;color:#000'>";
           $status          = mysqli_query($connect, "UPDATE `lingkungan_kerja` SET `status` = '1' WHERE `lingkungan_kerja`.`no` = '$id';");
         } elseif ($bulanini == $deadline) {
           echo "<tr style='background:yellow;color:#000'>";
           $status          = mysqli_query($connect, "UPDATE `lingkungan_kerja` SET `status` = '2' WHERE `lingkungan_kerja`.`no` = '$id';");
         } else if($bulanini > $deadline) {
           echo "<tr style='background:red;color:#fff'>";
           $status          = mysqli_query($connect, "UPDATE `lingkungan_kerja` SET `status` = '3' WHERE `lingkungan_kerja`.`no` = '$id';");
         } else {
           echo "<tr>";
         }
           ?>
            <td>
              <a data-toggle="modal" data-target="#myModal<?php echo $lingkungan['no']; ?>"><?php echo $lingkungan['jenis']; ?></a>
              <div class="modal fade" id="myModal<?php echo $lingkungan['no']; ?>" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content"  style="color:#000">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Detail Lingkungan</h4>
                    </div>
                    <div class="modal-body">
                      <table>
                        <tr>
                          <td width="40%" style="vertical-align:top;">Jenis</td>
                          <td width="1%" style="vertical-align:top;">:</td>
                          <td> <?php echo $lingkungan['jenis']; ?></td>
                        </tr>
                        <tr>
                          <td>Kategori</td>
                          <td style="vertical-align:top;">:</td>
                          <td> <?php echo $lingkungan['kategori']; ?></td>
                        </tr>
                        <tr>
                          <td>Pemeriksaan Terakhir</td>
                          <td style="vertical-align:top;">:</td>
                          <td> <?php echo $lingkungan['pemeriksaan_terakhir']; ?></td>
                        </tr>
                        <tr>
                          <td>Batas Pemeriksaan</td>
                          <td style="vertical-align:top;">:</td>
                          <td><?php echo $lingkungan['akhir_pemeriksaan']; ?></td>
                        </tr>
                        <tr>
                          <td>Masa Berlaku</td>
                          <td style="vertical-align:top;">:</td>
                          <td><?php echo $lingkungan['masa_berlaku']; ?> Tahun</td>
                        </tr>
                        <tr>
                          <td>Status</td>
                          <td style="vertical-align:top;">:</td>
                          <td>
                            <?php
                            $sebulansebelum = date("Ym", strtotime("-1 month", $date));
                            $bulanini       = date('Ym');
                            $deadline       = date("Ym", strtotime($akhir));
                            // echo "Bulan ini : $bulanini <br> Sebulan Sebelum = $sebulansebelum <br> Dealine : $deadline <br>";
                            if ($bulanini < $deadline && $bulanini > $sebulansebelum) {
                             echo "Lakukan Sertifikasi Sekarang";
                           } else if($bulanini > $deadline) {
                             echo "Kadaluarsa";
                           } else {
                             echo "Aktiv";
                           }
                             ?>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <a href="perpanjang.php?id=lingkungan_kerja&data=<?php echo $lingkungan['no']; ?>" class="btn btn-success" style="width:100%">Perpanjang Sertifikasi</a>
                    </div>
                  </div>
                </div>
                </div>
            </td>
            <td><?php echo $lingkungan['kategori']; ?></td>
            <td><?php echo $lingkungan['pemeriksaan_terakhir']; ?></td>
            <td>
              <?php
                echo $akhir;
              ?>
            </td>
          </tr>
          <?php
          }
           ?>
        </table>
      </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="tambahalat" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sertifikasi Baru</h4>
          </div>
          <div class="modal-body">
            <table>
              <tr>
                <td width="30%" style="vertical-align:top;">Nama</td>
                <td width="1%" style="vertical-align:top;">:</td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>SKP/SIO</td>
                <td style="vertical-align:top;">:</td>
                <td> <input type="text" class="form-control" name="" value=""></td>
              </tr>
              <tr>
                <td>Berlaku</td>
                <td style="vertical-align:top;">:</td>
                <td> <input type="date" class="form-control" name="" value=""></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal" style="width:100%">Tambah Alat</button>
          </div>
        </div>
      </div>
  </div>
</div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
