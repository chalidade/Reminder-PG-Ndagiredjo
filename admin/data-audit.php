<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">LAPORAN</h4>
            <p>DATA LAPORAN </p>
          </div>
        </div>
        <hr>
        <div class="row" style="background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <div class="col-2">
            No
          </div>
          <div class="col-6">
            Tanggal
          </div>
          <div class="col-4">
            Oleh
          </div>
        </div>
        <?php
          $no   = 1;
          $data = mysqli_query($connect, "SELECT * FROM `audit` ORDER BY `audit`.`tanggal` DESC ");
          while ($row=mysqli_fetch_row($data))
            {
         ?>
        <div class="row" style="border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;font-size:12px;">
          <div class="col-2" style="text-align:center">
            <?php echo $no;$no++; ?>
          </div>
          <div class="col-6">
            <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[2]; ?></font>
            <!-- Modal -->
            <div class="modal fade" id="nama<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Detail Data Audit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table width="100%">
                      <tr>
                        <td>Kode Audit</td>
                        <td>: <?php echo $row[0]; ?></td>
                      </tr>
                      <tr>
                        <td>Penanggung Jawab</td>
                        <td>: <?php echo $row[1]; ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal</td>
                        <td>: <?php echo $row[2]; ?></td>
                      </tr>
                      <tr>
                        <td>Bidang</td>
                        <td>: <?php echo $row[3]; ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Berlaku</td>
                        <td>: <?php echo $row[4]; ?></td>
                      </tr>
                      <tr>
                        <td>Diminta</td>
                        <td>: <?php echo $row[5]; ?></td>
                      </tr>
                      <tr>
                        <td>Pekerjaan</td>
                        <td>: <?php echo $row[6]; ?></td>
                      </tr>
                      <tr>
                        <td>Lokasi</td>
                        <td>: <?php echo $row[7]; ?></td>
                      </tr>
                      <tr>
                        <td>Pengerjaan Dari</td>
                        <td>: <?php echo $row[8]; ?></td>
                      </tr>
                      <tr>
                        <td>Pengerjaan Sampai</td>
                        <td>: <?php echo $row[9]; ?></td>
                      </tr>
                      <tr>
                        <td>Nomor WO</td>
                        <td>: <?php echo $row[10]; ?></td>
                      </tr>
                      <tr>
                        <td>Permit</td>
                        <td>: <?php echo $row[11]; ?></td>
                      </tr>
                    </table>
                    <hr>
                    <h4>Data Checklist</h4>
                    <hr>
                    <table width="100%">
                      <tr>
                        <td>No</td>
                        <td>Keterangan</td>
                        <td>Iya</td>
                        <td>Tidak</td>
                      </tr>

                      <?php
                      $no1 = 1;
                      $idcheck = $row['12'];
                      $data1 = mysqli_query($connect, "SELECT * FROM `checklist_audit` WHERE `id` = '$idcheck' ");
                      while ($row1=mysqli_fetch_row($data1))
                        { ?>
                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Pekerjaan yang dilakukan sudah sesuai JSA</td>
                        <td>
                        <?php
                        if($row1['1'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['1'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Checklist pekerjaan sudah di lakukan oleh pengawas</td>
                        <td>
                        <?php
                        if($row1['2'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['2'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>


                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Pengawas pekerjaan ada di tempat kerja</td>
                        <td>
                        <?php
                        if($row1['3'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['3'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Pelaksana pekerja sesuai dengan surat penunjukan</td>
                        <td>
                        <?php
                        if($row1['4'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['4'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>APD yang digunakan pekerja sesuai pekerjaan</td>
                        <td>
                        <?php
                        if($row1['5'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['5'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Peralatan kerja yang digunakan sesuai pekerjaan</td>
                        <td>
                        <?php
                        if($row1['6'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['6'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Kondisi pekerja dalam keadaan sehat</td>
                        <td>
                        <?php
                        if($row1['7'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['7'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Pekerjaan yang dilakukan sudah ada permit yang sesuai</td>
                        <td>
                        <?php
                        if($row1['8'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['8'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Permit masih berlaku / belum expired</td>
                        <td>
                        <?php
                        if($row1['9'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['9'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Safety sign masih terpasang sesuai dan dalam keadaan baik</td>
                        <td>
                        <?php
                        if($row1['10'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['10'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Penerangan di lokasi kerja memadai</td>
                        <td>
                        <?php
                        if($row1['11'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['11'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Lingkungan kerja aman, bebas dari bahaya pekerjaan lainya</td>
                        <td>
                        <?php
                        if($row1['12'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['12'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Sirkulasi udara di sekitar pekerjaan memadai</td>
                        <td>
                        <?php
                        if($row1['13'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['13'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>

                      <tr>
                        <td><?php echo $no1;$no1++; ?></td>
                        <td>Fire Watch ada di area kerja dan sesuai dengan surat penunjukan</td>
                        <td>
                        <?php
                        if($row1['14'] == 1) { ?>
                          <input type="radio" checked>
                        <?php } else { ?>
                          <input type="radio">
                        <?php } ?>
                        </td>
                        <td>
                        <?php
                        if($row1['14'] == 1) { ?>
                          <input type="radio">
                        <?php } else { ?>
                          <input type="radio" checked>
                        <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <?php echo $row['1'] ?>
          </div>
        </div>
      </form>
      <?php } ?>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <a href="menu-laporan.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
        </div>
      </div>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
