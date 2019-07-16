<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8 header-text">
      <h3>Sertifikasi Alat</h3>
      <p> Data Sertifikasi Alat </p>
      <!-- <button type="button" data-toggle="modal" data-target="#tambahalat" class="btn btn-success" name="button" style="width:100%">Tambah Alat Baru</button> -->
    </div>
  </div>
  <div class="row" style="margin-top:0px; padding:0px;font-size:12px;">
      <div class="col-md-12" style="margin-top:0px;margin-bottom:20px">
      </div>
      <div class="col-md-12">
      <table class="table" width="100%" style="font-size:10px;">
        <tr>
          <th>No</th>
          <th>Nama Alat</th>
          <th>Pemeriksaan Terakhir</th>
          <th>Batas Perpanjangan</th>
        </tr>
        <?php
        include "proses/koneksi.php";
        $no          = 1;
        $a           = mysqli_query($connect, "SELECT * FROM `peralatan` ORDER BY `peralatan`.`batas_akhir` ASC ");
        while ($tool = mysqli_fetch_array($a)) {
          $id              = $tool['no'];
          $akhir           = $tool['batas_akhir'];
          $date            = strtotime($akhir);
          $newDate         = date("Y-m-d", strtotime("-1 month", $date));
          $sebulansebelum  = date("Ym", strtotime("-1 month", $date));
          $bulanini        = date('Ym');
          $deadline        = date("Ym", strtotime($akhir));

          echo "$bulanini - $deadline - $sebulansebelum<br>";
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
          <td><?php echo $no;$no++; ?></td>
          <td><a data-toggle="modal" data-target="#myModal"><?php echo $tool['nama_alat']; ?></a></td>
          <td><?php echo $tool['pemeriksaan_terakhir']; ?></td>
          <td>
            <?php
            $startDate = $tool['batas_akhir'];
            echo $startDate;
             ?>
          </td>
        </tr>
      <?php } ?>
      </table>
    </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Alat</h4>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td width="50%" style="vertical-align:top;">Nama Alat</td>
            <td width="1%" style="vertical-align:top;">:</td>
            <td> Over Head Travelling Crane 25T Area Penggilingan</td>
          </tr>
          <tr>
            <td>Stasiun</td>
            <td style="vertical-align:top;">:</td>
            <td> Gilingan</td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td style="vertical-align:top;">:</td>
            <td> Pesawat Angkat dan Angkut</td>
          </tr>
          <tr>
            <td>No AI.</td>
            <td style="vertical-align:top;">:</td>
            <td> 566/135/418.54/IV/2015</td>
          </tr>
          <tr>
            <td>Pemeriksaan Terakhir </td>
            <td style="vertical-align:top;">:</td>
            <td> 25/02/2015</td>
          </tr>
          <tr>
            <td>Batas Perpanjangan </td>
            <td style="vertical-align:top;">:</td>
            <td> 25/02/2016</td>
          </tr>
          <tr>
            <td>Masa Berlaku</td>
            <td style="vertical-align:top;">:</td>
            <td> 1 Tahun</td>
          </tr>
          <tr>
            <td>Status</td>
            <td style="vertical-align:top;">:</td>
            <td>Kadaluarsa</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" style="width:100%">Perpanjang Sertifikasi</button>
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
          <h4 class="modal-title">Alat Baru</h4>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td width="50%" style="vertical-align:top;">Nama Alat</td>
              <td width="1%" style="vertical-align:top;">:</td>
              <td> <input type="text" class="form-control" name="" value=""> </td>
            </tr>
            <tr>
              <td>Stasiun</td>
              <td style="vertical-align:top;">:</td>
              <td> <input type="text" class="form-control" name="" value=""> </td>
            </tr>
            <tr>
              <td>Keterangan</td>
              <td style="vertical-align:top;">:</td>
              <td> <input type="text" class="form-control" name="" value=""> </td>
            </tr>
            <tr>
              <td>No AI.</td>
              <td style="vertical-align:top;">:</td>
              <td> <input type="text" class="form-control" name="" value=""> </td>
            </tr>
            <tr>
              <td>Pemeriksaan Terakhir </td>
              <td style="vertical-align:top;">:</td>
              <td> <input type="date" class="form-control" name="" value=""> </td>
            </tr>
            <tr>
              <td>Batas Perpanjangan </td>
              <td style="vertical-align:top;">:</td>
              <td> <input type="date" class="form-control" name="" value=""></td>
            </tr>
            <tr>
              <td>Masa Berlaku</td>
              <td style="vertical-align:top;">:</td>
              <td><input type="text" class="form-control" name="" value=""> </td>
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
<!-- End service Area -->
<?php include "footer.php"; ?>
