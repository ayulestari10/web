<style type="text/css">
	.isi{
		width: 900px;
		margin-left: 50px;
	}
	.isi table{border: 1px solid black;}
	h3{text-align: center;}
	table{margin-top: 20px;}
	th, td{text-align: center; border: 1px solid black;}	
</style>


<div class="isi">
	<h3>PENGUMUMAN HASIL SELEKSI<br>PENERIMAAN SISWA BARU<br>SMK MUHAMMADIYAH 2 PALEMBANG</h3>
	<table>
		<thead>
			<th style="width: 50px;">No</th>
			<th style="width: 50px;">No Reg</th>
			<th style="width: 200px;">Nama</th>
			<th style="width: 200px;">Asal Sekolah</th>
			<th style="width: 100px;">Hasil</th>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($dt as $data): ?>
			<tr>
				<td style="width: 50px;"><?= ++$i.'.' ?></td>
				<td style="width: 50px;"><?= $data->no_pendaftaran ?></td>
				<td style="width: 200px;"><?= $data->nama ?></td>
				<td style="width: 200px;"><?= $data->nama_sekolah ?></td>
				<td style="width: 100px;"><?= $data->hasil ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
