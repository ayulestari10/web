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
       echo form_open_multipart('siswa/input_data/'.$nisn);
  } else {
       echo form_open_multipart('siswa/input_data');
  }
 ?>
 <!-- Biodata Diri -->
  <div id="biodata">
   <div class="row">
    <div class="col-md-11 col-md-offset-1">
     <h1>Pendaftaran</h1>
     <h2 style="margin-bottom: 4%;">BIODATA CALON SISWA</h2>
     <table class="table table-striped">
      <tbody>
       <tr>
        <td style="width: 200px">Nomor Pendaftaran</td>
        <td>:</td>
        <td><?= $data->no_pendaftaran ?></td>
       </tr>

       <tr>
        <td>Nama Calon Siswa</td>
        <td>:</td>
        <td><input type="text" name="nama" class="form-control" /></td>
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
         <input type="radio" name="jenis_kelamin" value="Laki-laki"/>Laki-laki<br>
         <input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan
        </td>
       </tr>

       <tr>
        <td>Tempat Tanggal Lahir</td>
        <td>:</td>
        <td>
         <input type="text" name="tempat_lahir" class="form-control" />
          <span>DD/ MM/ YYYY</span><br>
         <input type="text" name="tanggal"/> / <input type="text" name="bulan"/> / <input type="text" name="tahun"/>
        </td>
       </tr>

       <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
         <textarea name="alamat_lengkap" class="form-control"></textarea>
        </td>
       </tr>

       <tr>
        <td>No Telp/Hp</td>
        <td>:</td>
        <td><input type="text" name="no_telp_hp" class="form-control" /></td>
       </tr>

       <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" class="form-control" /></td>
       </tr>

       <tr>
        <td>Kompetensi keahlian yang diinginkan<td>
        
        <td>
         <select name="keahlian" class="form-control">
          <option value="Akuntansi">Akuntansi</option>
          <option value="Pemasaran">Pemasaran</option>
          <option value="TKJ">TKJ</option>
          <option value="Multimedia">Multimedia</option> 
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
    <div id="button1" class="btn btn-info button1">
     Selanjutnya
    </div>
   </div>
  </div>
 <!-- End of Biodata Diri -->

 <!-- Data Sekolah -->
  <div id="data_sekolah" class="row">
   <div class="col-md-11 col-md-offset-1">
    <h2 style="margin-bottom: 4%;">DATA SEKOLAH ASAL</h2>
    <table class="table table-striped">
     <tbody>
      <tr>
       <td>Nama Sekolah</td>
       <td>:</td>
       <td><input type="text" name="nama_sekolah" class="form-control" /></td>
      </tr>

      <tr>
       <td>Tahun Lulus</td>
       <td>:</td>
       <td><input type="text" name="tahun_lulus" class="form-control" /></td>
      </tr>

      <tr>
       <td>No STTB SMP</td>
       <td>:</td>
       <td><input type="text" name="no_sttb" class="form-control" /></td>
      </tr>

      <tr>
       <td>Nomor Induk Siswa Nasional (NISN)</td>
       <td>:</td>
       <td><?= $data->nisn ?></td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="row" style="margin-bottom: 3%">
   <div class="col-md-2 col-md-offset-5">
    <a id="button2" href="#" class="btn btn-info">Selanjutnya</a>
   </div>
  </div>
 <!-- End of Data Sekolah -->

 <!-- Data Nilai -->
  <div id="data_nilai" class="row">
   <div class="col-md-11 col-md-offset-1">
    <h2 style="margin-bottom: 4%;">NILAI UJIAN</h2>
    <table class="table table-striped">
     <tbody>
      <tr>
       <td>Bahasa Inggris</td>
       <td>:</td>
       <td><input type="text" name="nilai_bing" class="form-control" /></td>
      </tr>

      <tr>
       <td>Bahasa Indonesia</td>
       <td>:</td>
       <td><input type="text" name="nilai_bindo" class="form-control" /></td>
      </tr>

      <tr>
       <td>Matematika</td>
       <td>:</td>
       <td><input type="text" name="nilai_matematika" class="form-control" /></td>
      </tr>

      <tr>
       <td>IPA</td>
       <td>:</td>
       <td><input type="text" name="nilai_ipa" class="form-control" /></td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="row" style="margin-bottom: 3%;">
   <div class="col-md-2 col-md-offset-5">
    <a id="button3" href="#" class="btn btn-info">Selanjutnya</a>
   </div>
  </div>
 <!-- End of Data Nilai -->

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
       <td><input type="text" name="nama_ayah" class="form-control" /></td>
      </tr>

      <tr>
       <td>Nama Ibu</td>
       <td>:</td>
       <td><input type="text" name="nama_ibu" class="form-control" /></td>
      </tr>

      <tr>
       <td>Pekerjaan Ayah</td>
       <td>:</td>
       <td>
        <select name="pekerjaan_ayah" class="form-control">
         <option value="Guru">Guru</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Karyawan Swasata">Karyawan Swasata</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        </select>
       </td>
      </tr>

      <tr>
       <td>Pekerjaan Ibu</td>
       <td>:</td>
       <td>
        <select name="pekerjaan_ibu" class="form-control">
         <option value="Guru">Guru</option>
         <option value="TNI/POLRI">TNI/POLRI</option>
         <option value="Karyawan Swasata">Karyawan Swasata</option>
         <option value="Petani">Petani</option>
         <option value="Pedangang">Pedangang</option>
         <option value="Lainnya">Lainnya</option>
        </select>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
  <div class="row" style="margin-bottom: 3%;">
   <div class="col-md-2 col-md-offset-2">
    <input type="submit" value="Simpan" class="btn btn-success" name="input_data"/>
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


<script type="text/javascript">
 $(document).ready(function() {
  $("#button2").hide();
  $("#button3").hide();
  $("#data_sekolah").hide();
  $("#data_nilai").hide();
  $("#data_ortu").hide();

  $("#button1").click(function() {
   $("#biodata").slideUp();
   $("#data_sekolah").slideDown();
   
   $("#button1").hide();
   $("#button2").show();
  });
  $("#button2").click(function() {
   $("#data_sekolah").slideUp();
   $("#data_nilai").slideDown();
   
   $("#button2").hide();
   $("#button3").show();
  });

  $("#button3").click(function() {
   $("#data_nilai").slideUp();
   $("#data_ortu").slideDown();
   
   $("#button3").hide();
  });
 });
</script>