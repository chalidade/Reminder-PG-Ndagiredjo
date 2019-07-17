<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>SDM</h3>
        <p> Data Sertifikasi Sumber Daya Manusia </p>
        <!-- <button type="button" data-toggle="modal" data-target="#tambahalat" class="btn btn-success" name="button" style="width:100%">Tambah Sertifikasi Baru</button> -->
      </div>
    </div>
    <div class="row" style="margin-top:0px; padding:10px;font-size:12px;">
        <div class="col-md-12" style="margin-top:20px;margin-bottom:20px">
        </div>
        <div class="col-md-12">
        <table class="table" width="100%">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>SKP/SIO</th>
            <th>Batas Akhir</th>
          </tr>
          <?php
          $no                = 1;
          $a                 = mysqli_query($connect, "SELECT * FROM `SDM` ORDER BY `SDM`.`berlaku` ASC ");
          while ($sdm        = mysqli_fetch_array($a)) {
            $id              = $sdm['no'];
            $akhir           = $sdm['berlaku'];
            $date            = strtotime($akhir);
            $newDate         = date("Y-m-d", strtotime("-1 month", $date));
            $sebulansebelum  = date("Ym", strtotime("-1 month", $date));
            $bulanini        = date('Ym');
            $deadline        = date("Ym", strtotime($akhir));
           ?>
           <?php
           if ($bulanini < $deadline && $bulanini == $sebulansebelum) {
            echo "<tr style='background:yellow;color:#000'>";
            $status          = mysqli_query($connect, "UPDATE `SDM` SET `status` = '1' WHERE `SDM`.`no` = '$id';");
          } elseif ($bulanini == $deadline) {
            echo "<tr style='background:yellow;color:#000'>";
            $status          = mysqli_query($connect, "UPDATE `SDM` SET `status` = '2' WHERE `SDM`.`no` = '$id';");
          } else if($bulanini > $deadline) {
            echo "<tr style='background:red;color:#fff'>";
            $status          = mysqli_query($connect, "UPDATE `SDM` SET `status` = '3' WHERE `SDM`.`no` = '$id';");
          } else {
            echo "<tr>";
          }
            ?>
            <td><?php echo $no;$no++; ?></td>
            <td>
              <a data-toggle="modal" data-target="#myModal"><?php echo $sdm['nama']; ?> </a>
              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content" style="color:#000">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Detail SDM</h4>
                    </div>
                    <div class="modal-body">
                      <table>
                        <tr>
                          <td width="30%" style="vertical-align:top;">Nama</td>
                          <td width="1%" style="vertical-align:top;">:</td>
                          <td> <?php echo $sdm['nama']; ?></td>
                        </tr>
                        <tr>
                          <td>SKP/SIO</td>
                          <td style="vertical-align:top;">:</td>
                          <td> <?php echo $sdm['skp_sio']; ?></td>
                        </tr>
                        <tr>
                          <td>Berlaku</td>
                          <td style="vertical-align:top;">:</td>
                          <td> <?php echo $sdm['berlaku']; ?></td>
                        </tr>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal" style="width:100%">Perpanjang Sertifikasi</button>
                    </div>
                  </div>
                </div>
                </div>
            </td>
            <td><?php echo $sdm['skp_sio']; ?></td>
            <td><?php echo date("d/m/Y", strtotime($akhir)); ?></td>
          </tr>
        <?php } ?>
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
</section>
</body>
<!-- End service Area -->
<?php include "footer.php"; ?>
