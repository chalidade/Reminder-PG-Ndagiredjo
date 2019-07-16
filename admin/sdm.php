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
      <h3>SDM</h3>
      <p> Data Sertifikasi Sumber Daya Alam </p>
      <button type="button" data-toggle="modal" data-target="#tambahalat" class="btn btn-success" name="button" style="width:100%">Tambah Sertifikasi Baru</button>
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
        <tr>
          <td>1</td>
          <td><a data-toggle="modal" data-target="#myModal">Hari Setiyo Wahyudi, ST </a></td>
          <td>No.13.10896/AK3/U/XI/2014</td>
          <td>25/02/2016</td>
        </tr>
        <tr>
          <td>2</td>
          <td><a data-toggle="modal" data-target="#myModal">M. Nurofiq</a></td>
          <td>No.Ser.13.13506/AK3/U/VI/2015</td>
          <td>25/02/2016</td>
        </tr>
        <tr style="background:yellow;">
          <td>3</td>
          <td><a data-toggle="modal" data-target="#myModal">Busthaniel Achwan, ST</a></td>
          <td>No.12/AK3/PUBT/XI/2010</td>
          <td>25/02/2016</td>
        </tr>
        <tr style="background:red;">
          <td>4</td>
          <td><a data-toggle="modal" data-target="#myModal">Moentolip</a></td>
          <td>Srt.Dir.XM-22100/FAX/15.038</td>
          <td>25/02/2016</td>
        </tr>
        <tr>
          <td>5</td>
          <td><a data-toggle="modal" data-target="#myModal">Heri Waskito</a></td>
          <td>No.Ser.839/OPK3/B.I/VII/2014</td>
          <td>25/02/2016</td>
        </tr>
        <tr>
          <td>6</td>
          <td><a data-toggle="modal" data-target="#myModal">Johar</a></td>
          <td>No.Ser.838/OPK3/B.I/VII/2014</td>
          <td>25/02/2016</td>
        </tr>
        <tr>
          <td>7</td>
          <td><a data-toggle="modal" data-target="#myModal">Sunawan Dwi Ratsongko</a></td>
          <td>No.Ser.837/OPK3/B.I/VII/2014</td>
          <td>25/02/2016</td>
        </tr>
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
        <h4 class="modal-title">Detail SDM</h4>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td width="30%" style="vertical-align:top;">Nama</td>
            <td width="1%" style="vertical-align:top;">:</td>
            <td> Hari Setiyo Wahyudi, ST </td>
          </tr>
          <tr>
            <td>SKP/SIO</td>
            <td style="vertical-align:top;">:</td>
            <td> No.13.10896/AK3/U/XI/2014</td>
          </tr>
          <tr>
            <td>Berlaku</td>
            <td style="vertical-align:top;">:</td>
            <td> 25/02/2016</td>
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
</body>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
