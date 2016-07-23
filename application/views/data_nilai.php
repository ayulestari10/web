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
       echo form_open_multipart('nilai/input_data/'.$nisn);
  } else {
       echo form_open_multipart('nilai/input_data');
  }
 ?>

 <!-- Data Nilai -->
  <div id="data_nilai" class="row">
   <div class="col-md-11 col-md-offset-1">
    <h2 style="margin-bottom: 4%;">NILAI UJIAN NASIONAL</h2>
    <table class="table table-striped">
     <tbody>
      <tr>
       <td>Bahasa Inggris</td>
       <td>:</td>
       <td><input type="text" name="nilai_bing" class="form-control" value="<?= $data_nilai->nilai_bing ?>" /></td>
      </tr>

      <tr>
       <td>Bahasa Indonesia</td>
       <td>:</td>
       <td><input type="text" name="nilai_bindo" class="form-control" value="<?= $data_nilai->nilai_bindo ?>" /></td>
      </tr>

      <tr>
       <td>Matematika</td>
       <td>:</td>
       <td><input type="text" name="nilai_matematika" class="form-control" value="<?= $data_nilai->nilai_matematika ?>" /></td>
      </tr>

      <tr>
       <td>IPA</td>
       <td>:</td>
       <td><input type="text" name="nilai_ipa" class="form-control" value="<?= $data_nilai->nilai_ipa ?>" /></td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="row" style="margin-bottom: 3%;">
   <div class="col-md-2 col-md-offset-2">
    <a href="<?= base_url('orang_tua') ?>"><input type="submit" value="Selanjutnya" class="btn btn-success" name="input_nilai"/></a>
   </div>
  </div>
 <!-- End of Data Nilai -->

 <?php echo form_close(); ?>
</div>