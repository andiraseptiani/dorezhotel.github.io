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
        <a href="" class="navbar-brand">
        <img src="../assets/dist/img/logo.png" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Dore'z Hotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="kamar.php" class="nav-link">Kamar</a>
            </li>
            <li class="nav-item">
              <a href="galeri.php" class="nav-link">Galeri</a>
            </li>
            <li class="nav-item">
              <a href="users.php" class="nav-link">Users</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
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
              <h1 class="m-0">Fasilitas Kamar</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                Edit Data Fasilitas
              </div>
              <div class="card-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from users where id='$id'");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <form action="update_users.php" method="POST">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                      <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" value="<?php echo $d['password'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Level Users</label>
                      <select name="level" class="form-control" required>
                        <option value="">--- Pilih Level ---</option>
                        <option value="1">Admin</option>
                        <option value="2">Resepsionis</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                <?php } ?>
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