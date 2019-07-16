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
    <div class="col-md-8 header-text">
      <h3>Home</h3>
      <p> Overview </p>
    </div>
  </div>
  <div class="row" style="margin-top:50px; padding:10px">
    <canvas id="pie-chart" width="800" height="450"></canvas>
    <p style="margin:10px;text-align:center">Data sertifikasi alat menunjukkan bahwa 85% sertifikasi masih aktif, 5% akan habis, 10% sudah kadaluarsa</p>
    <canvas id="pie-chart1" width="800" height="450"></canvas>
    <p style="margin:10px;text-align:center">Data sertifikasi sdm menunjukkan bahwa 60% sertifikasi masih aktif, 30% akan habis, 10% sudah kadaluarsa</p>
    <canvas id="pie-chart2" width="800" height="450"></canvas>
    <p style="margin:10px;text-align:center">Data sertifikasi linkungan menunjukkan bahwa 90% sertifikasi masih aktif, 5% akan habis, 5% sudah kadaluarsa</p>
  </div>
</div>
</body>
<script src="js/Chart.js"></script>
<script type="text/javascript">
new Chart(document.getElementById("pie-chart"), {
type: 'pie',
data: {
  labels: ["Aktif", "Warning", "Kadaluarsa"],
  datasets: [{
    label: "Sertifikasi Alat",
    backgroundColor: ["#0bb84e", "#d7d205", "#d70505"],
    data: [85,5,10]
  }]
},
options: {
  title: {
    display: true,
    text: 'Sertifikasi Alat'
  }
}
});

new Chart(document.getElementById("pie-chart1"), {
type: 'pie',
data: {
  labels: ["Aktif", "Warning", "Kadaluarsa"],
  datasets: [{
    label: "Sertifikasi SDM",
    backgroundColor: ["#0bb84e", "#d7d205", "#d70505"],
    data: [60,30,10]
  }]
},
options: {
  title: {
    display: true,
    text: 'Sertifikasi SDM'
  }
}
});

new Chart(document.getElementById("pie-chart2"), {
type: 'pie',
data: {
  labels: ["Aktif", "Warning", "Kadaluarsa"],
  datasets: [{
    label: "Sertifikasi Lingkungan",
    backgroundColor: ["#0bb84e", "#d7d205", "#d70505"],
    data: [90,5,5]
  }]
},
options: {
  title: {
    display: true,
    text: 'Sertifikasi Lingkungan'
  }
}
});
</script>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
