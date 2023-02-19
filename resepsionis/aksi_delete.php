<?php  
//tambahkan koneksi
include '../koneksi.php';

//ambil data dari form edit
$id_pesanan = $_POST['id_pesanan'];
$status = $_POST['status'];

//update data ke tabel databases
$query="DELETE from pesanan where id_pesanan='$id_pesanan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index setelah berhail mengupdate
header("location:pesanan.php");
?>