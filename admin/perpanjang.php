<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <?php
  include "proses/koneksi.php";
  $id   = $_REQUEST['id'];
  $data = $_REQUEST['data'];
   ?>
  <div id="div1">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8 pb-10 header-text">
          <h3>Perpanjang Sertifikasi</h3>
          <!-- <p> Overview </p> -->
        </div>
      </div>
      <div class="row" style="margin-top:50px; padding:10px">
        <div class="col-md-12">
          <form class="" action="proses/sertifikasi.php?id=<?php echo $id; ?>" method="post">
            <?php
            $a    = mysqli_query($connect, "SELECT * FROM `$id` WHERE `no` = '$data'");
            while ($lingkungan = mysqli_fetch_array($a)) {
            $no                = $lingkungan['no'];
            $jenis             = $lingkungan['jenis'];
            $kategori          = $lingkungan['kategori'];
            $periksa           = $lingkungan['pemeriksaan_terakhir'];
            $akhir_pemeriksaan = $lingkungan['akhir_pemeriksaan'];
            }
             ?>
             <p style="color:#000">Tanggal <br>
             <input type="date" disabled value="<?php echo date("Y-m-d"); ?>" class="form-control">
             <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
            </p>
            <p style="color:#000">Jenis <br>
            <input type="text" name="" disabled value="<?php echo $jenis; ?>" class="form-control">
            <input type="hidden" name="jenis" value="<?php echo $jenis; ?>" class="form-control">
            <input type="hidden" name="no" value="<?php echo $no; ?>">
            </p>
            <p style="color:#000">Kategori <br>
            <input type="text" name="" disabled  value="<?php echo $kategori; ?>" class="form-control">
            <input type="hidden" name="kategori" value="<?php echo $kategori; ?>" class="form-control">
          </p>
            <p style="color:#000">Batas Akhir Sertifikasi <br>
            <input type="text" name="" disabled  value="<?php echo $akhir_pemeriksaan; ?>" class="form-control"></p>
            <p style="color:#000">Lama Perpanjangan <br>
            <table>
              <tr>
                <td width="20%"><input type="text" name="lama" value="" class="form-control" placeholder="1"></td>
                <td> <font style="color:#000">Tahun</font></td>
              </tr>
            </table>
            </p>
            <p style="color:#000">Upload Dokumen <br>
            <input type="file" name="file" value="" class="form-control"></p>
            <p style="color:#000">
            <input type="submit" name="" class="btn btn-success" style="width:100%" value="Perpanjang"></p>
          </form>
        </div>
      </div>
    </div>
    </body>
    <script src="js/Chart.js"></script>
    </div>
  </div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
