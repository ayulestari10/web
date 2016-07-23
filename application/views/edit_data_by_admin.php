<style type="text/css">
	#foto img{width: 144px; height: 216px; border: 1px solid grey; margin-bottom: 2%;}	
</style>

<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}

		$no_pendaftaran = $this->session->flashdata('no_pendaftaran');
		if (isset($no_pendaftaran)) {
		     echo form_open_multipart('admin/edit_siswa/'.$no_pendaftaran);
		} else {
		     echo form_open_multipart('admin/edit_siswa/');
		}
	?>
	<!-- Biodata Diri -->
		<div class="biodata">
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<h2 style="margin-bottom: 4%;">Edit Hasil Seleksi Calon Siswa</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td style="width: 300px;">Nomor Pendaftaran</td>
								<td style="width: 40px;">:</td>
								<td><?= $data->no_pendaftaran ?></td>
							</tr>

							<tr>
								<td>Nama Calon Siswa</td>
								<td>:</td>
								<td><?= $data->nama ?></td>
							</tr>

							<tr>
								<td>Hasil</td>
								<td></td>
								<td>
									<select name="hasil" class="form-control">
										<option value="Lulus">Lulus</option>
										<option value="Tidak Lulus">Tidak Lulus</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<!-- End of Biodata Diri -->
		<div class="row" style="margin-bottom: 1%; margin-top: 2%;">
			<div class="col-md-2 col-md-offset-4">
				<input type="submit" value="Edit" class="btn btn-success" name="edit"/>
			</div>
			<div class="col-md-2">
				<a href="<?= base_url('admin') ?>" class="btn btn-info">Kembali</a>
			</div>
		</div>
		<?php echo form_close(); ?>
</div>