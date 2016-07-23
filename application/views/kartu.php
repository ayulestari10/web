<style type="text/css">
	#cover{
		width: 360px;
		height: 500px;
		border: 2px solid black;
		background: #008080;
	}	
	.box{
		width: 340px;
		height: 480px;
		border: 1px solid black;
		border-radius: 10%;
		margin: 0 auto;
		margin-top: 10px;
		background: white; 
	}
	.header{margin-top: 5px; margin-bottom: 15px; text-align: center;}
	h1{font-size: 45px; margin-top: -1%;margin-bottom: -5px;}
	.line{width: 340px;}
	span{font-size: 25px;}
	.body{text-align: center;}
	.foto{width: 144px; height: 216px; margin-top: 10px; margin-bottom: 10px; margin-left: 98px;}
</style>

<div id="cover">
	<div class="box">
		<div class="header">
			<h1>PESERTA</h1>
			<span>No. <?= $data->no_pendaftaran ?></span>
			<img src="<?= base_url('assets/img/line.jpg') ?>" class="line">
		</div>
		<div class="body">
			<span><strong>Jalur Tertulis</strong></span>
			<div class="foto">
				<img src="<?= base_url('foto/'.$data->no_pendaftaran.'.png') ?>" width="144" height="216" />
			</div>
			<span><strong><?= $data->nama ?></strong></span><br>
			<span><strong><?= $data->nisn ?></strong></span><br>
			<span><?= $data_sekolah->nama_sekolah ?></span><br>
		</div>
	</div>
</div>