<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dore'z hotel</title>

  <link rel="shortcut icon" type="text/css" href="photo/favicon.ico">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper" style="background-image: linear-gradient(#FFEFD5, #FFEFD5);">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar" style="background-image: linear-gradient(#CD5C5C, #CD5C5C);">
    <a class="navbar-brand">
      <div class="container">
          <img src="assets/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Dore'z Hotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="kamar.php" class="nav-link">Kamar</a>
            </li>
            <li class="nav-item">
              <a href="fasilitas.php" class="nav-link">Fasilitas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-image: linear-gradient(#FFEFD5, #FFEFD5);">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <?php 
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="gagal"){?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan !!!</h5>
                  Mohon maaf anda tidak bisa mengakses halaman ini
                </div>
              <?php }} ?>
            </div>
          </div>
        </div>      

        <!-- Main content -->
        <div class="content">
          <div class="container">
            <div class="col-md-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/gambar/hotel4.jpg" alt="First slide" height="450">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/gambar/hotel5.jpg" alt="Second slide" height="450">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/gambar/hotel6.jpg" alt="Third slide" height="450">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                      </span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <form action="proses_pesan.php" method="POST">
              <div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Tanggal Check In</label>
                    <div class="col-sm-2">                  
                      <input type="date" name="cek_in" class="form-control" placeholder=".col-3" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
                    </div>
                    <label class="col-sm-2 col-form-label">Tanggal Check Out</label>
                    <div class="col-sm-2">                  
                      <input type="date" name="cek_out" class="form-control" placeholder=".col-4" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
                    </div>
                    <label class="col-sm-2 col-form-label">Jumlah Kamar</label>
                    <div class="col-sm-1">                  
                      <input type="text" name="jml_kamar" class="form-control" placeholder="Jumlah Kamar" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
                    </div>
                    <div class="col-sm-1">
                      <button type="button" class="form-control btn btn-primary" data-toggle="modal" data-target="#pesan">Pesan</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="pesan">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Form Pemesanan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label>Nama Pemesan :</label>
                          <input class="form-control" name="nama_pemesan" placeholder="Nama Pemesan" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Email Pemesan :</label>
                          <input class="form-control" name="email_pemesan" placeholder="Email Pemesan" required>
                      </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">No. Handphone :</label>
                        <input class="form-control" name="hp_pemesan" placeholder="No. Handphone" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Tamu :</label>
                        <input type="text" name="nama_tamu" class="form-control" placeholder="Masukan Nama Tamu">
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">Tipe Kamar :</label>
                        <select class="form-control" name="id_kamar" id="no_kamar">
                        <option>Pilih Tipe Kamar</option>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from kamar");
                        while ($d = mysqli_fetch_array($data)) { ?>
                        <option value="<?php echo $d['id_kamar']; ?>"><?php echo $d['no_kamar']; ?> - <?php echo $d['harga']; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4"></label>
                    </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            </form>
            
            <div class="card" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
              <div class="col-md-12">
                <div class="card-body" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
                  <h2 class="text-center">Dore'z Hotel</h2><br>
                  <p class="text-center">Selamat Datang di Dore'z Hotel Semoga Liburan Anda Menyenangkan Silahkan Untuk Memesan Kamar yang Anda Inginkan</p>
                  <p class="text-center">Dore'z Hotel adalah Hotel dengan fasilitas yang lengkap antara lain restoran, spa, fitness center, dan parkiran yang luas. Lokasi di Jakarta sendiri ada beberapa hotel yang menawarkan harga yang murah, bahkan sangat murah. 
                    Harga murah di sini juga relatif, kami mengkategorikan harga murah dengan harga permalamnya mulai dari 270.000 dengan fasilitas yang sangat banyak. 
                  </p>
                </div>
              </div>
            </div>          
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer navbar navbar-expand-md navbar-transparent" style="background-image: linear-gradient(#FFEFD5, #FFEFD5);">
        <!-- To the right -->
        <!-- Default to the left -->
        <strong>Copyright &copy; 2023 | dirs All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>