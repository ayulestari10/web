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
       echo form_open_multipart('orang_tua/input_data/'.$nisn);
  } else {
       echo form_open_multipart('orang_tua/input_data');
  }
 ?>
s
<!-- Biodata Orang Tua -->
<div id="data_ortu">
  <div class="row">
   <div class="col-md-11 col-md-offset-1">
    <h2 style="margin-bottom: 4%;"><strong>BIODATA ORANG TUA</strong></h2>
    <table class="table table-striped">
     <tbody>
      <tr>
       <td style="width: 200px;">Nama Orang Tua</td>

      </tr>
      <tr>
       <td>Nama Ayah</td>
       <td>:</td>
       <td><input type="text" name="nama_ayah" class="form-control" value="<?= $data_ortu->nama_ayah ?>" /></td>
      </tr>

      <tr>
       <td>Nama Ibu</td>
       <td>:</td>
       <td><input type="text" name="nama_ibu" class="form-control" value="<?= $data_ortu->nama_ibu ?>" /></td>
      </tr>

      <tr>
       <td>Pekerjaan Ayah</td>
       <td>:</td>
       <td>
        <select name="pekerjaan_ayah" class="form-control">
        
        <?php if($data_ortu->pekerjaan_ayah == "Guru"): ?>
         <option value="Guru">Guru</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ayah == "TNI/POLRI"): ?>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ayah == "Karyawan Swasata"): ?> 
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ayah == "Petani"): ?>
         <option value="Petani">Petani</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ayah == "Pedangang"): ?>
         <option value="Pedangang">Pedangang</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Lainnya">Lainnya</option>
        <?php else: ?>
         <option value="Guru">Guru</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php endif; ?>

        </select>
       </td>
      </tr>

      <tr>
       <td>Pekerjaan Ibu</td>
       <td>:</td>
       <td>
        <select name="pekerjaan_ibu" class="form-control">
         <?php if($data_ortu->pekerjaan_ibu == "Guru"): ?>
         <option value="Guru">Guru</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ibu == "TNI/POLRI"): ?>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ibu == "Karyawan Swasata"): ?> 
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ibu == "Petani"): ?>
         <option value="Petani">Petani</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php elseif($data_ortu->pekerjaan_ibu == "Pedangang"): ?>
         <option value="Pedangang">Pedangang</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Lainnya">Lainnya</option>
        <?php else: ?>
         <option value="Guru">Guru</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Karyawan Swasata">Karyawan Swasta</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        <?php endif; ?>        
        </select>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="row" style="margin-bottom: 3%;">
   <div class="col-md-2 col-md-offset-2">
    <input type="submit" value="Simpan" class="btn btn-success" name="input_ortu"/>
   </div>
   <div class="col-md-2">
    <a href="<?= base_url('siswa/periksa') ?>" class="btn btn-info">View</a>
   </div>
   <div class="col-md-2">
    <a href="<?= base_url('siswa/kartu_peserta') ?>" class="btn btn-danger">Cetak Kartu</a>
   </div>
   <div class="col-md-2">
    <a href="<?= base_url('siswa/formulir') ?>" class="btn btn-warning">Cetak Formulir</a>
   </div>
  </div>
 </div>
 <!-- End of Biodata Orang Tua -->

 <?php echo form_close(); ?>
</div>