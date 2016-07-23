<style type="text/css">
	.foto{
		width: 110px; height: 130px; border: 1px solid grey; margin-bottom: 4%; 
		margin-left: 80%;
	}
	body{font-size: 12px;}
</style>

<div class="container">
	<!-- Biodata Diri -->
		<div class="biodata">
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h1 style="text-align: center;">FORMULIR PENERIMAAN SISWA BARU</h1>
					<h2 style="margin-bottom: 5%;">BIODATA CALON SISWA</h2>
					<div class="foto">
						<img src="<?= base_url('foto/'.$data_siswa->no_pendaftaran.'.png') ?>" width="110" height="130" />
					</div>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td style="width: 300px;">Nomor Pendaftaran</td>
								<td style="width: 40px;">:</td>
								<td><?= $data_siswa->no_pendaftaran ?></td>
							</tr>

							<tr>
								<td>Nama Calon Siswa</td>
								<td>:</td>
								<td><?= $data_siswa->nama ?></td>
							</tr>

							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?= $data_siswa->jenis_kelamin ?></td>
							</tr>

							<tr>
								<td>Tempat Tanggal Lahir</td>
								<td>:</td>
								<td><?= $data_siswa->tempat_lahir ?>, <?= $data_siswa->tanggal ?> - <?= $data_siswa->bulan ?> - <?= $data_siswa->tahun ?>
								</td>
							</tr>

							<tr>
								<td>No Telp/Hp</td>
								<td>:</td>
								<td><?= $data_siswa->no_telp_hp ?></td>
							</tr>

							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?= $data_siswa->email ?></td>
							</tr>

							<tr>
								<td>Kompetensi keahlian yang diinginkan</td>
								<td>:</td>
								<td><?= $data_siswa->keahlian ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<!-- End of Biodata Diri -->

	<!-- Data Sekolah -->
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 style="margin-bottom: 5%;">DATA SEKOLAH ASAL</h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td style="width: 300px;">Nama Sekolah</td>
							<td style="width: 40px;">:</td>
							<td><?= $data_sekolah->nama_sekolah ?></td>
						</tr>

						<tr>
							<td>Tahun Lulus</td>
							<td>:</td>
							<td><?= $data_sekolah->tahun_lulus ?></td>
						</tr>

						<tr>
							<td>No STTB SMP</td>
							<td>:</td>
							<td><?= $data_sekolah->no_sttb ?></td>
						</tr>

						<tr>
							<td>Nomor Induk Siswa Nasional (NISN)</td>
							<td>:</td>
							<td><?= $data_sekolah->nisn ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<!-- End of Data Sekolah -->

	<!-- Data Nilai -->
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 style="margin-bottom: 5%;">NILAI UJIAN NASIONAL</h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td style="width: 300px;">Bahasa Inggris</td>
							<td style="width: 40px;">:</td>
							<td><?= $data_nilai->nilai_bing ?></td>
						</tr>

						<tr>
							<td>Bahasa Indonesia</td>
							<td>:</td>
							<td><?= $data_nilai->nilai_bindo ?></td>
						</tr>

						<tr>
							<td>Matematika</td>
							<td>:</td>
							<td><?= $data_nilai->nilai_matematika ?></td>
						</tr>

						<tr>
							<td>IPA</td>
							<td>:</td>
							<td><?= $data_nilai->nilai_ipa ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<!-- End of Data Nilai -->

	<!-- Biodata Orang Tua -->
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 style="margin-bottom: 5%;"><strong>BIODATA ORANG TUA</strong></h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td style="width: 300px;">Nama Orang Tua</td>
							<td style="width: 40px;"></td>
							<td></td>
						</tr>
						<tr>
							<td>Nama Ayah</td>
							<td>:</td>
							<td><?= $data_ortu->nama_ayah ?></td>
						</tr>

						<tr>
							<td>Nama Ibu</td>
							<td>:</td>
							<td><?= $data_ortu->nama_ibu ?></td>
						</tr>

						<tr>
							<td>Pekerjaan Ayah</td>
							<td>:</td>
							<td><?= $data_ortu->pekerjaan_ayah ?></td>
						</tr>

						<tr>
							<td>Pekerjaan Ibu</td>
							<td>:</td>
							<td><?= $data_ortu->pekerjaan_ibu ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<!-- End of Biodata Orang Tua -->
</div>