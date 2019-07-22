			<?php include "header.php"; ?>

			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
				<div id="div1">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-md-8 pb-10 header-text">
								<h3>Home</h3>
								<p> Overview </p>
							</div>
						</div>
						<div class="row" style="margin-top:50px; padding:10px">
					    <center style="width:500px">
							<canvas id="pie-chart"></canvas>
					    <p style="margin:10px;text-align:center">Data sertifikasi alat menunjukkan bahwa 85% sertifikasi masih aktif, 5% akan habis, 10% sudah kadaluarsa</p>
						</center>

						<center style="width:500px">
							<canvas id="pie-chart1"></canvas>
					    <p style="margin:10px;text-align:center">Data sertifikasi sdm menunjukkan bahwa 60% sertifikasi masih aktif, 30% akan habis, 10% sudah kadaluarsa</p>
						</center>
						
						<center style="width:500px">
							<canvas id="pie-chart2"></canvas>
					    <p style="margin:10px;text-align:center">Data sertifikasi linkungan menunjukkan bahwa 90% sertifikasi masih aktif, 5% akan habis, 5% sudah kadaluarsa</p>
						</center>
					</div>
					</body>
					<script src="js/Chart.js"></script>
					<script type="text/javascript">
					new Chart(document.getElementById("pie-chart"), {
					type: 'pie',
					data: {
					  labels: ["Kadaluarsa", "Habis Bulan Ini", "Kurang Satu Bulan", "Aktif"],
					  datasets: [{
					    label: "Sertifikasi Alat",
					    backgroundColor: ["#d70505",  "#d7d205", "#ff840c", "#0bb84e"],
					    data: [
								<?php
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
												echo "$deadline, $ini, $kurang, $aman";
												}
											}
										}
									}
								 ?>
							]
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
					  labels: ["Kadaluarsa", "Habis Bulan Ini", "Kurang Satu Bulan", "Aktif"],
					  datasets: [{
					    label: "Sertifikasi Alat",
					    backgroundColor: ["#d70505",  "#d7d205", "#ff840c", "#0bb84e"],
					    data: [
								<?php
								 	$a 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '3' ");
									while ($a 	= mysqli_fetch_row($a)) {
									$deadline		= $a[0];

									$b 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '2' ");
									while ($b 	= mysqli_fetch_row($b)) {
									$ini				= $b[0];

									$c 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '1' ");
									while ($c 	= mysqli_fetch_row($c)) {
									$kurang 		= $c[0];

									$d 					= mysqli_query($connect, "SELECT count(`status`) FROM `SDM` WHERE `status` = '0' ");
									while ($d 	= mysqli_fetch_row($d)) {
									$aman 	 		= $d[0];
												echo "$deadline, $ini, $kurang, $aman";
												}
											}
										}
									}
								 ?>
							]
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
					  labels: ["Kadaluarsa", "Habis Bulan Ini", "Kurang Satu Bulan", "Aktif"],
					  datasets: [{
					    label: "Sertifikasi Alat",
					    backgroundColor: ["#d70505",  "#d7d205", "#ff840c", "#0bb84e"],
					    data: [
								<?php
								 	$a 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '3' ");
									while ($a 	= mysqli_fetch_row($a)) {
									$deadline		= $a[0];

									$b 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '2' ");
									while ($b 	= mysqli_fetch_row($b)) {
									$ini				= $b[0];

									$c 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '1' ");
									while ($c 	= mysqli_fetch_row($c)) {
									$kurang 		= $c[0];

									$d 					= mysqli_query($connect, "SELECT count(`status`) FROM `lingkungan_kerja` WHERE `status` = '0' ");
									while ($d 	= mysqli_fetch_row($d)) {
									$aman 	 		= $d[0];
												echo "$deadline, $ini, $kurang, $aman";
												}
											}
										}
									}
								 ?>
							]
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
					</div>
				</div>
			</section>
			<!-- End service Area -->
		<?php include "footer.php"; ?>
