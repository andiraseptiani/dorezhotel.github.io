<?php
include '../koneksi.php';

if (isset($_GET['id_pesanan'])) {
    $id_pesanan = $_GET['id_pesanan'];
    $query = "SELECT * FROM pesanan WHERE id_pesanan='$id_pesanan'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die(
            'Query Error: ' .
                mysqli_errno($koneksi) .
                ' - ' .
                mysqli_error($koneksi)
        );
    }
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan di database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukan Data');window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dore'z Hotel</title>

  <link rel="shortcut icon" type="text/css" href="../photo/favicon.ico">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper" style="background-image: linear-gradient(#FFEFD5, #FFEFD5);">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar" style="background-image: linear-gradient(#CD5C5C, #CD5C5C);">
      <div class="container">
        <a class="navbar-brand">
          <span class="brand-text font-weight-bold">Dore'z Hotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="pesanan.php" class="nav-link">Pesanan</a>
            </li>
            <li class="nav-item">
              <a href="riwayat.php" class="nav-link">Cetak Struk</a>
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
              <h1 class="m-0" style="color: dark;">Cetak Struk Pesanan</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="panel-body">
            <div class="row-table-bordered">
                <div class="col-md-2">
                    <img src="../assets/dist/img/logo.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
                </div>
                <br>
                <div class="col-md-8">
                <center><font size="6"><b><p class="text-center">Dore'z Hotel</p></font></center>
                <center><font size="3"><b><p class="text-center">Jl. Kemang Raya No. 157, Jakarta Pusat.</p></font></center>
                <center><b><p class="text-center">Phone : (021) 889-586-31</p></b></center>
                </div>
                <br>
                <style type="text/css">
                  hr.style2 {
                    border-top: 3px double #8c8b8b;
                    }
                </style>
            </div>
        </div>
      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-danger" style="background-image: linear-gradient(#FDF5E6, #FDF5E6);">
                <table class="table table-bordered">  
                    <div class="card-header">
                       <h3>Struk Pesan</h3>
                    </div>
                    <thead><tr>
                      <th>Nama Pemesan</th>
                      <th>Nama Tamu</th>
                      <th>Tanggal Cek In</th>
                      <th>Tanggal Cek Out</th>
                      <th>Jenis Kamar</th>
                      <th>Status</th>
                    </tr></thead>
                    <tbody>
                    <td><?php echo $data['nama_pemesan']; ?></td>
                    <td><?php echo $data['nama_tamu']; ?></td>
                    <td><?php echo $data['cek_in']; ?></td>
                    <td><?php echo $data['cek_out']; ?></td>
                    <td>
                  <?php
                          $kamar = mysqli_query(
                              $koneksi,
                              'select * from kamar'
                          );
                          while ($a = mysqli_fetch_array($kamar)) {
                              if ($a['id_kamar'] == $data['id_kamar']) { ?>
                              <?php echo $a['no_kamar']; ?>
                              <?php }
                          }
                          ?>
                  </td>
                  <td>
                          <?php if ($data['status'] == 1) { ?>
                            <span class="badge bg-warning">Belum di Konfirmasi</span>
                          <?php } if ($data['status'] == 2){ ?>
                            <span class="badge bg-success">Sudah di Konfirmasi</span>
                          <?php } ?>
                        </td>

                    </form>
                    </tbody>
                </table>                 
				<script>
		window.print();
	</script>
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
        <!-- Default to the left -->
        <strong>Copyright &copy; 2023 | dirs All rights reserved.
      </footer>
    </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/adminlte.min.js"></script>
</body>
</html>