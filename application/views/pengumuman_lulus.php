<!DOCTYPE html>
<html>
<head>
	<title>Pengumuman | SMK Muhammadiyah 2 Palembang</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
	<?php include "style.css" ; ?>
	<?php include "script.js" ; ?>
	<style type="text/css">
		.bigpg{
			width: 1100px; min-height: 570px; margin-left: 2%; 
			background-image: url('<?= base_url("images/3.jpg") ?>'); background-size: cover;
		}
		.headerpg{
			width: 1045px; height: 150px; margin-top: 5px; 
			margin-left: 2%; border-radius: 5%; 
			margin-bottom: -10px;
		}
		.headerpg img{width: 100%; height: 100%; border-radius: 5%;}
		.bigContentpg{
			border-radius: 5%;
			background-color: rgb(57,167,141);
			width: 855px; min-height: 380px; margin-left: 30px; 
		}
		.boxes{background-color: rgb(102, 204, 0);}
		.isipg{
			margin-top: 10px; 
			width: 650px; height: auto;	
		}
		.pengumuman{
			margin-left: 150px; width: 650px; min-height: 380px;
		}
		.pengumuman table{margin-right: 2%;}
		.footerpg{margin-top: -43px; text-align: center;}
		.kalenderpg{
			height: 280px; width: 170px; margin-left: 870px;
			margin-top: -250px;
		}
		.jampg{
			margin-top: -380px; margin-left: 900px; border-radius: 50%;
		}
	</style>
</head>
<body class="yui3-skin-sam" onload="init();">

<div class="bigpg">
	<div class="row">
		<div class="col-md-12">
			<div class="headerpg">
				<img src="<?= base_url('images/depan.jpg') ?>" style="height: 150px; margin-right: 15px;" />
			</div>
		</div>
	</div>

	<div class="row">
		<div class="bigContentpg">
			<!-- Sidebar -->
				<div class="sidebar">
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
			<div class="pengumuman">
				<div class="col-md-10" style="margin: 0 auto;">
					<div class="title">
						<h3 style="text-align: center;">Hasil Seleksi Penerimaan Siswa Baru<br>
						SMK Muhammadiyah 2 Palembang</h3>
					</div>
					<div class="isipg">
						<table class="table table-bordered">
							<thead>
								<th class="success" style="width:10px;text-align: center;">No</th>
								<th class="success" style="width:50px;text-align: center;">No Reg</th>
								<th class="success" style="width:200px;text-align: center;">Nama</th>
								<th class="success" style="width:200px;text-align: center;">Asal Sekolah</th>
								<th class="success" style="width:60px;text-align: center; ">Hasil</th>
							</thead>
							<tbody>
								<?php $i = 0; ?>
								<?php foreach($dt as $data): ?>
								<tr class="success">
									<td><?= ++$i ?></td>
									<td><?= $data->no_pendaftaran ?></td>
									<td><?= $data->nama ?></td>
									<td><?= $data->nama_sekolah ?></td>
									<td><?= $data->hasil ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- End of content -->			
		</div>
	</div>

	<!-- Clock & Calendar -->
	<div id="clock" class="jampg">
		
	</div>

	<div class="kalenderpg">
		<div id="mycalendar">
			
		</div>
	</div>
	<!-- Ended Clock and Calendar-->	

	<div class="row">
		<div class="footerpg">
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



