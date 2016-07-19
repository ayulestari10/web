<style type="text/css">
  ul li{margin-top: 6%; font-size: 22px;}
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('home') ?>"><h3 style="margin-top: -2%;">Penerimaan Siswa Baru</h3></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li>
            <?php 
                $username   = $this->session->userdata('username');
                $nisn       = $this->session->userdata('nisn');
                if(isset($nisn)){
                    echo '<a href="'.base_url('siswa/logout_siswa').'" class="btn btn-primary btn-lg" role="button">LOGOUT</a>';
                }
                if(isset($username)){
                    echo '<a href="'.base_url('admin/logout_admin').'" class="btn btn-primary btn-lg" role="button">LOGOUT</a>';
                }
            ?>    
        </li>
    </ul>

  </div><!-- /.container-fluid -->
</nav>