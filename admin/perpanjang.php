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
        <?php
        if ($id == "lingkungan_kerja") {
        ?>
        <div class="col-md-12">
          <form class="" action="proses/sertifikasi.php?id=<?php echo $id; ?>&data=lingkungan" method="post">
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
      <?php } else if($id == "SDM") { ?>
          <div class="col-md-12">
              <?php
              $a    = mysqli_query($connect, "SELECT * FROM `$id` WHERE `no` = '$data'");
              while ($sdm = mysqli_fetch_array($a)) {
              $no         = $sdm['no'];
              $nama       = $sdm['nama'];
              $keahlian   = $sdm['keahlian'];
              $skp_sio    = $sdm['skp_sio'];
              $akhir      = date("d/m/Y", strtotime($sdm['berlaku']));
              }
               ?>
               <form class="" action="proses/sertifikasi.php?id=<?php echo $no; ?>&data=sdm" method="post">
               <p style="color:#000">Tanggal <br>
               <input type="date" disabled value="<?php echo date("Y-m-d"); ?>" class="form-control">
               <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
              </p>
              <p style="color:#000">Nama <br>
              <input type="text" name="" disabled value="<?php echo $nama; ?>" class="form-control">
              <input type="hidden" name="nama" value="<?php echo $nama; ?>" class="form-control">
              <input type="hidden" name="no" value="<?php echo $no; ?>">
              </p>
              <p style="color:#000">Keahlian <br>
              <input type="text" name="" disabled  value="<?php echo $keahlian; ?>" class="form-control">
              <input type="hidden" name="keahlian" value="<?php echo $keahlian; ?>" class="form-control">
              </p>
              <p style="color:#000">SKP / SIO <br>
              <input type="text" disabled  value="<?php echo $skp_sio; ?>" class="form-control">
              <input type="hidden" name="skp" value="<?php echo $skp_sio; ?>" class="form-control">
            </p>
              <p style="color:#000">Batas Berlaku<br>
              <input type="text" disabled  value="<?php echo $akhir; ?>" class="form-control">
              <input type="hidden" name="berlaku" value="<?php echo $akhir; ?>" class="form-control">
              </p>
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
        <?php } else { ?>
          <div class="col-md-12">
              <?php
              $a    = mysqli_query($connect, "SELECT * FROM `$id` WHERE `no` = '$data'");
              while ($tool   = mysqli_fetch_array($a)) {
              $no            = $tool['no'];
              $nama          = $tool['nama_alat'];
              $stasiun       = $tool['stasiun'];
              $keterangan    = $tool['keterangan'];
              $no_ai         = $tool['no_ai'];
              $akhir_periksa = $tool['pemeriksaan_terakhir'];
              $batas_akhir   = $tool['batas_akhir'];
              $masa_berlaku  = $tool['masa_berlaku'];
              $akhir         = $tool['batas_akhir'];
              }
               ?>
               <form class="" action="proses/sertifikasi.php?id=<?php echo $no; ?>&data=peralatan" method="post">
               <p style="color:#000">Tanggal <br>
               <input type="date" disabled value="<?php echo date("Y-m-d"); ?>" class="form-control">
               <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
              </p>
              <p style="color:#000">Nama <br>
              <input type="text" name="" disabled value="<?php echo $nama; ?>" class="form-control">
              <input type="hidden" name="nama" value="<?php echo $nama; ?>" class="form-control">
              <input type="hidden" name="no" value="<?php echo $no; ?>">
              </p>
              <p style="color:#000">Stasiun <br>
              <input type="text" name="" disabled  value="<?php echo $stasiun; ?>" class="form-control">
              <input type="hidden" name="stasiun" value="<?php echo $stasiun; ?>" class="form-control">
              </p>
              <p style="color:#000">Keterangan <br>
              <input type="text" disabled  value="<?php echo $keterangan; ?>" class="form-control">
              <input type="hidden" name="keterangan" value="<?php echo $keterangan; ?>" class="form-control">
            </p>
              <p style="color:#000">No AI<br>
              <input type="text" disabled  value="<?php echo $no_ai; ?>" class="form-control">
              <input type="hidden" name="ai" value="<?php echo $no_ai; ?>" class="form-control">
              </p>
              <p style="color:#000">Pemeriksaan Terakhir<br>
              <input type="text" disabled  value="<?php echo $akhir_periksa; ?>" class="form-control">
              <input type="hidden" name="pemeriksaan_terakhir" value="<?php echo $akhir_periksa; ?>" class="form-control">
              </p>
              <p style="color:#000">Batas Akhir<br>
              <input type="text" disabled  value="<?php echo $akhir; ?>" class="form-control">
              <input type="hidden" name="batas" value="<?php echo $akhir; ?>" class="form-control">
              </p>
              <p style="color:#000">Masa Berlaku<br>
              <input type="text" disabled  value="<?php echo $masa_berlaku; ?>" class="form-control">
              <input type="hidden" name="berlaku" value="<?php echo $masa_berlaku; ?>" class="form-control">
              </p>
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
        <?php } ?>

      </div>
    </div>
    </body>
    <script src="js/Chart.js"></script>
    </div>
  </div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
