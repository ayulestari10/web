<style type="text/css">
 span{color: red; font-weight: bolder;} 
</style>

<div class="container">
 <?php  
  $msg = $this->session->flashdata('msg');
  if(isset($msg)){
   echo $msg;
  }

  $nisn = $this->session->userdata('nisn');

  if (isset($nisn)) {
       echo form_open_multipart('sekolah/input_data/'.$nisn);
  } else {
       echo form_open_multipart('sekolah/input_data');
  }
 ?>

 <!-- data Sekolah -->
  <div id="data_sekolah" class="row">
   <div class="col-md-11 col-md-offset-1">
    <h2 style="margin-bottom: 4%;">DATA SEKOLAH ASAL</h2>
    <table class="table table-striped">
     <tbody>
      <tr>
       <td>Nama Sekolah</td>
       <td>:</td>
       <td><input type="text" name="nama_sekolah" class="form-control"  value="<?= $data_sekolah->nama_sekolah ?>"/></td>
      </tr>

      <tr>
       <td>Tahun Lulus</td>
       <td>:</td>
       <td><input type="text" name="tahun_lulus" class="form-control"  value="<?= $data_sekolah->tahun_lulus ?>"/></td>
      </tr>

      <tr>
       <td>No STTB SMP</td>
       <td>:</td>
       <td><input type="text" name="no_sttb" class="form-control" value="<?= $data_sekolah->no_sttb ?>" /></td>
      </tr>

      <tr>
       <td>Nomor Induk Siswa Nasional (NISN)</td>
       <td>:</td>
       <td><?= $nisn ?></td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="row" style="margin-bottom: 3%">
  <div class="col-md-2 col-md-offset-2">
   <a href="<?= base_url('nilai') ?>"><input type="submit" value="Selanjutnya" class="btn btn-success" name="input_sekolah"/></a>
   </div>
  </div>
 <!-- End of data Sekolah -->


 <?php echo form_close(); ?>
</div>