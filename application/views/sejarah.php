<!DOCTYPE html>
<html>
<head>
	<title>Sejarah | SMK Muhammadiyah 2 Palembang</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
	<?php include "style.css" ; ?>
	<?php include "script.js" ; ?>
	<style type="text/css">
		p{text-align: justify;}
		.bigsj{
			width: 1080px; height: 860px; margin-left: 2%; 
			background-image: url('<?= base_url("images/3.jpg") ?>'); background-size: cover;
		}
		.bigContentsj{
			border-radius: 5%;
			background-color:rgb(57,167,141);
			margin-left: 30px; width: 840px; height: 680px;
		}
		.contentsj{
			margin-left: 140px; width: 650px; height: 380px; 
		}
		.boxes{background-color: rgb(102, 204, 0);}
		.footersj{text-align: center; margin-top: 160px;}
		.kalendersj{
			height: 280px; width: 170px; margin-left: 870px;
			margin-top: -440px;
		}
		.jamsj{
			margin-top: -580px; margin-left: 900px; border-radius: 50%;
		}
	</style>
</head>
<body class="yui3-skin-sam" onload="init();">

<div class="bigsj">
	<div class="row">
		<div class="col-md-12">
			<div class="header">
				<img src="<?= base_url('images/depan.jpg') ?>" style="height: 150px; margin-right: 15px;" />
			</div>
		</div>
	</div>

	<div class="row">
		<div class="bigContentsj">
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
			<div class="contentsj"  style="margin-bottom: -10%;">
				<div class="col-md-12">
					<h3>Sejarah SMK Muhammadiyah 2 Palembang</h3>
						<p>SMK Muhammadiyah 2 Palembang didirikan pada tanggal 31 Maret 1988, atas prakarsa Pimpinan Daerah Muhammadiyah Majelis Permusyawaratan dan Kebudayaan Kota Palembang. SK Muhammadiyah Pusat No.43/II-004/SM. SS 88/1988. Pada awalnya, SMK Muhammadiyah 2 Palembang beralamatkan di Jalan Jenderal Ahmad Yani Komplek Perguruan Muhammadiyah 13 Ulu Palembang, kemudian pada tahun 2004 pindah ke Jalan DI. Panjaitan Komplek Muhammadiyah Plaju Palembang. Pada bulan November tahun 2010 SMK Muhammadiyah 2 Palembang pindah ke Jalan  Ahmad Yani Lr. Silaberanti Palembang sampai dengan sekarang.</p>
						<p>Pada waktu pertama kali berdirinya SMK Muhammadiyah 2 Palembang tahun 1988 memiliki sarana dan prasarana yang masih terbatas dan jumlah siswa yang masih sedikit. Pada tahun 2004 sampai tahun 2005 jumlah siswa saat itu ada 86 orang, namun pada tahun 2009 sampai tahun 2010 jumlah siswa semakin bertambah menjadi 702 siswa. Pada tahun 2010 sampai tahun 2011 jumlah siswa semakin bertambah menjadi 884 siswa hingga pada tahun 2012 sampai tahun 2013 berjumlah 1162 dengan jumlah 516 siswa dan 646 siswi.</p>
						<p>Awal berdirinya SMK Muhammadiyah 2 Palembang status terdaftar dari tahun 1988 sampai tahun 1990. Pada tahun 1991 status SMK Muhammadiyah 2 Palembang diakui berdasarkan SK Dirjen Pendidikan Dasar dan Menengah No.273/C.C7/Kep/MN/1999. Pada tahun 2011 berdasarkan Keputusan Badan Akreditasi Sekolah (BAS) Provinsi Sumatera Selatan dalam akreditasi tersebut SMK Muhammadiyah 2 Palembang ditetapkan berstatus Terakreditasi A.</p>
						<p>Kepala Sekolah dari awal berdirinya sampai sekarang mengalami perubahan sebanyak empat kali, yaitu pada tahun 1988 sampai tahun 2001 yang menjabat sebagai kepala sekolah adalah Bapak Drs. A. Fauzi Hasan. Pada tahun 2001 sampai  tahun 2005 dijabat oleh Bapak Drs. Abdul Latif, kemudian pada tahun 2005 sampai tahun 2009 dijabat oleh Ibu Seriyani, S.Pd. Pada tahun  2009 sampai tahun 2014 kepala sekolah masih tetap dijabat oleh Ibu Seriyani, S.Pd. Pada tahun 2015 hingga sekarang kepala sekolah SMK Muhammadiyah 2 Palembang dijabat oleh Ibu Yulia Andriani, S.E.</p>
					
				</div>
			</div>

			<!-- End of content -->			
		</div>
	</div>

	<!-- Clock & Calendar -->
	<div id="clock" class="jamsj">
		
	</div>

	<div class="kalendersj">
		<div id="mycalendar">
			
		</div>
	</div>
	<!-- Ended Clock and Calendar-->	

	<div class="row">
		<div class="footersj">
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



