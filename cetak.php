<!DOCTYPE html>

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

<title>Cetak Struk</title>
<body onload="window.print()">
    <div class="panel panel-default"">
        <div class="panel-body">
            <div class="row-table-bordered">
                <div class="col-md-2">
                    <img src="assets/dist/img/logo.png" class="img-responsive pull-left" style="max-height:150px;display:inline">
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
        <hr class="style2">
        <?php
            include 'koneksi.php';
            $query = "SELECT * FROM pesanan";           
        ?>
        <div class="row">
            <div class="col-md-12">
                <h3><center><b>Dore'z Hotel</b></center></h3>
                <br><br>
            </div>
            <div class="col-md-12">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-8">
                     <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-danger">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Nama Tamu</th>
                      <th>Tanggal Cek In</th>
                      <th>Tanggal Cek Out</th>
                      <th>No Kamar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
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
                    }                  
                    $no = 1;
                    $data = mysqli_query($koneksi, $sql);
                    while($d = mysqli_fetch_array($data)){
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_tamu']; ?></td>
                        <td><?php echo $d['cek_in']; ?></td>
                        <td><?php echo $d['cek_out']; ?></td>
                        <td>
                          <?php 
                          $kamar = mysqli_query($koneksi, "SELECT * FROM kamar");
                          while ($a = mysqli_fetch_array($kamar)) {
                            if ($a['id_kamar'] == $d['id_kamar']) { ?>
                              <?php echo $a['no_kamar']; ?>
                              <?php
                            }
                          }
                          ?>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

                <div class="col-md-2">
                    
                </div>
            </div>
        </div>
    </div>
</body>