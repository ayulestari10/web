<!DOCTYPE html>
<html>
<head>
	<title>Struktur Organisasi | SMK Muhammadiyah 2 Palembang</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
	<?php include "style.css" ; ?>
	<?php include "script.js" ; ?>
	<style type="text/css">
		.bigso{
			width: 1100px; height: 843px; margin-left: 2%; 
			background-image: url('<?= base_url("images/3.jpg") ?>'); background-size: cover;
		}
		.bigContentso{
			border-radius: 5%;
			background-color: rgb(57,167,141);
			width: 855px; height: 660px; margin-left: 30px;
		}
		.headerso{
			width: 1045px; height: 150px; margin-top: 5px; 
			margin-left: 2%; border-radius: 5%; 
			margin-bottom: -10px;
		}
		.headerso img{width: 100%; height: 100%; border-radius: 5%;}
		.sidebarso{margin-top: 2%;}
		.boxes{background-color: rgb(102, 204, 0);}
		.contentso{
			margin-left: 170px; width: 600px; height: 560px;
		}
		.contentso img{margin-top: 20px;}
		.kalenderso{
			height: 280px; width: 170px; margin-left: 870px;
			margin-top: -460px;
		}
		.jamso{
			margin-top: -600px; margin-left: 900px; border-radius: 50%;
		}
		.footerso{text-align: center; margin-top: 180px;}
	</style>
</head>
<body class="yui3-skin-sam" onload="init();">

<div class="bigso">
	<div class="row">
		<div class="col-md-12">
			<div class="headerso">
				<img src="<?= base_url('images/depan.jpg') ?>" style="height: 150px; margin-right: 15px;" />
			</div>
		</div>
	</div>

	<div class="row">
		<div class="bigContentso">
			<!-- Sidebar -->
				<div class="sidebarso">
					<div class="col-md-2">
						<a href="<?= base_url('home') ?>">
							<div class="boxes">
								Home
							</div>
						</a><br>
						<a href="<?= base_url('home/visi_misi') ?>">
							<div class="boxes">
								Visi Misi				
							</div>
						</a><br>

						<a href="<?= base_url('home/struktur_organisasi') ?>">
							<div class="boxes" style="height: 50px;">
								Struktur<br>Organisasi
							</div>
						</a><br>

						<a href="<?= base_url('home/sejarah') ?>">
							<div class="boxes">
								Sejarah
							</div>
						</a><br>


						<a href="<?= base_url('register') ?>">
							<div class="boxes">
								Pendaftaran
							</div>
						</a><br>
						
						<a href="<?= base_url('login/siswa') ?>">
							<div class="boxes">
								Login
							</div>
						</a><br>

						<a href="<?= base_url('home/hasil_seleksi') ?>">
							<div class="boxes">
								Pengumuman
							</div>
						</a><br>
					</div>
				</div>
			<!-- End of sidebar -->

			<!-- Content -->
			<div class="contentso">
				<div class="col-md-10" style="margin: 0 auto;">
					<h3>Struktur Organisasi<br>SMK Muhammadiyah 2 Palembang</h3>
					<img src="<?= base_url('images/so.jpg') ?>" width="600" height="560" style="border-radius: 10%;" />
				</div>
			</div>

			<!-- End of content -->			
		</div>
	</div>

	<!-- Clock & Calendar -->
	<div id="clock" class="jamso">
		
	</div>

	<div class="kalenderso">
		<div id="mycalendar">
			
		</div>
	</div>
	<!-- Ended Clock and Calendar-->	

	<div class="row">
		<div class="footerso">
			<h6>Copyright &copy; 2016 SMK Muhammadiyah 2 Palembang</h6> 
		</div>
	</div>

</div>


<script type="text/javascript">
	YUI().use('calendar', function (Y) {

	  // Create a new instance of Calendar, setting its width
	  // and height, allowing the dates from the previous
	  // and next month to be visible and setting the initial
	  // date to be November, 1982.
	  var calendar = new Y.Calendar({
	          contentBox: "#mycalendar",
	          height:'200px',
	          width:'200px',
	          showPrevMonth: true,
	          showNextMonth: true,
	          date: new Date(2016,07,12)}).render();

	});
</script>

</body>
</html>



