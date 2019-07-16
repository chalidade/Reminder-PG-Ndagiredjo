<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>User</h3>
        <p> Data User </p>
      </div>
    </div>
    <div class="row" style="margin-top:30px; padding:10px;font-size:12px;">
      <div class="col-md-12">
      <table class="table" width="100%">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jabatan</th>
        </tr>
        <?php
          include "proses/koneksi.php";
          $no   = 1;
          $a  = mysqli_query($connect, "SELECT * FROM `user` ORDER BY `id` DESC");
          while ($user = mysqli_fetch_array($a)) {
         ?>
        <tr>
          <td><?php echo $no;$no++; ?></td>
          <td>
            <a data-toggle="modal" data-target="#myModal<?php echo $user['id']; ?>"><?php echo $user['nama']; ?></a>
            <div class="modal fade" id="myModal<?php echo $user['id']; ?>" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <h5>Detail User</h5>
                    <table class="table">
                      <tr>
                        <td width="30%">Nama </td>
                        <td>: <?php echo $user['nama']; ?></td>
                      </tr>
                      <tr>
                        <td>Jabatan</td>
                        <td>: <?php echo $user['jabatan']; ?></td>
                      </tr>
                      <tr>
                        <td>Telpon</td>
                        <td>: <?php echo $user['telpon']; ?></td>
                      </tr>
                      <tr>
                        <td>Plant</td>
                        <td>: <?php echo $user['plant']; ?></td>
                      </tr>
                      <tr>
                        <td>Email </td>
                        <td>: <?php echo $user['email']; ?></td>
                      </tr>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
              </div>
          </td>
          <td><?php echo $user['jabatan']; ?></td>
        </tr>
      <?php } ?>
      </table>
    </div>
    <div class="col-md-12" style="margin-top:20px">
      <button type="button" data-toggle="modal" data-target="#adduser" class="btn btn-success" name="button" style="width:100%">Tambah User</button>
    </div>
    </div>
  </div>

  <div class="modal fade" id="adduser" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah User Baru</h4>
        </div>
        <form class="" action="proses/user.php?id=add" method="post">
        <div class="modal-body">
          <table>
            <tr>
              <td width="40%">Nama </td>
              <td width="1%">:</td>
              <td><input type="text" name="nama" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td width="1%">:</td>
              <td><input type="text" name="jabatan" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Nomor Telpon</td>
              <td width="1%">:</td>
              <td><input type="text" name="telpon" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Plant</td>
              <td width="1%">:</td>
              <td><input type="text" name="plant" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td width="1%">:</td>
              <td><input type="text" name="email" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td width="1%">:</td>
              <td><input type="password" name="password" value="" class="form-control"></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Simpan" class="btn btn-success" style="width:100%">
        </div>
      </form>
      </div>
    </div>
    </div>
</div>
</body>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
