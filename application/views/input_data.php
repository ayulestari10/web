<style type="text/css">
 span{color: red; font-weight: bolder;} 
</style>

<div class="container">
 <?php  
  $msg = $this->session->flashdata('msg');
  if(isset($msg)){
   echo $msg;
  }

  $no_pendaftaran = $this->session->userdata('no_pendaftaran');

  if (isset($no_pendaftaran)) {
       echo form_open_multipart('siswa/input_data/'.$no_pendaftaran);
  } else {
       echo form_open_multipart('siswa/input_data');
  }
 ?>
 <!-- Biodata Diri -->
  <div id="biodata">
   <div class="row">
    <div class="col-md-11 col-md-offset-1">
     <h1>Penerimaan</h1>
     <h2 style="margin-bottom: 4%;">BIODATA CALON SISWA</h2>
     <table class="table table-striped">
      <tbody>
       <tr>
        <td style="width: 200px">Nomor Pendaftaran</td>
        <td>:</td>
        <td><?= $data_siswa->no_pendaftaran ?></td>
       </tr>

       <tr>
        <td>Nama Calon Siswa</td>
        <td>:</td>
        <td><input type="text" name="nama" class="form-control" value="<?= $data_siswa->nama ?>" /></td>
       </tr>

       <tr>
        <td>Upload Foto</td>
        <td></td>
        <td><input type="file" name="userfile" /></td>
       </tr>

       <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
        <?php if($data_siswa->jenis_kelamin == "Laki-laki"): ?>
         <input type="radio" name="jenis_kelamin" value="Laki-laki" checked >Laki-laki<br>
         <input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
        <?php elseif($data_siswa->jenis_kelamin == "Perempuan"): ?>
          <input type="radio" name="jenis_kelamin" value="Laki-laki" checked >Laki-laki<br>
          <input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
        <?php else: ?>
          <input type="radio" name="jenis_kelamin" value="Laki-laki" >Laki-laki<br>
          <input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
        <?php endif; ?>
        </td>
       </tr>

       <tr>
        <td>Tempat Tanggal Lahir</td>
        <td>:</td>
        <td>
         <input type="text" name="tempat_lahir" class="form-control" value="<?= $data_siswa->tempat_lahir ?>" />
          <span>DD/ MM/ YYYY</span><br>
         <input type="text" name="tanggal" value="<?= $data_siswa->tanggal ?>"/> / <input type="text" name="bulan" value="<?= $data_siswa->bulan ?>"/> / <input type="text" name="tahun" value="<?= $data_siswa->tahun ?>"/>
        </td>
       </tr>

       <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
         <textarea name="alamat_lengkap" class="form-control"><?= $data_siswa->alamat_lengkap ?></textarea>
        </td>
       </tr>

       <tr>
        <td>No Telp/Hp</td>
        <td>:</td>
        <td><input type="text" name="no_telp_hp" class="form-control" value="<?= $data_siswa->no_telp_hp ?>" /></td>
       </tr>

       <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" class="form-control" value="<?= $data_siswa->email ?>" /></td>
       </tr>

       <tr>
        <td>Kompetensi keahlian yang diinginkan<td>
        
        <td>
         <select name="keahlian" class="form-control">
          <?php if($data->keahlian == "Akuntansi"): ?>
          <option value="Akuntansi">Akuntansi</option>
          <option value="Pemasaran">Pemasaran</option>
          <option value="TKJ">TKJ</option>
          <option value="Multimedia">Multimedia</option> 
          <?php elseif($data->keahlian == "Pemasaran"): ?>
          <option value="Pemasaran">Pemasaran</option>
          <option value="Akuntansi">Akuntansi</option>
          <option value="TKJ">TKJ</option>
          <option value="Multimedia">Multimedia</option>
          <?php elseif($data->keahlian == "TKJ"): ?>
          <option value="TKJ">TKJ</option>
          <option value="Akuntansi">Akuntansi</option>
          <option value="Pemasaran">Pemasaran</option>
          <option value="Multimedia">Multimedia</option> 
          <?php elseif($data->keahlian == "Multimedia"): ?>s
          <option value="Multimedia">Multimedia</option>
          <option value="Akuntansi">Akuntansi</option>
          <option value="Pemasaran">Pemasaran</option>
          <option value="TKJ">TKJ</option>
          <?php else: ?>
          <option value="Akuntansi">Akuntansi</option>
          <option value="Pemasaran">Pemasaran</option>
          <option value="TKJ">TKJ</option>
          <option value="Multimedia">Multimedia</option>
          <?php endif; ?>  
         </select>
        </td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>

  <div class="row" style="margin-bottom: 3%;">
   <div class="col-md-2 col-md-offset-5">
    <div class="col-md-2 col-md-offset-2">
      <a href="<?= base_url('sekolah') ?>"><input type="submit" value="Selanjutnya" class="btn btn-success" name="input_biodata"/></a>
    </div>
   </div>
  </div>
 <!-- End of Biodata Diri -->

 <?php echo form_close(); ?>
</div>