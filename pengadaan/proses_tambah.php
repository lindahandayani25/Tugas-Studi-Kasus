<?php 
include '../koneksi.php';

// get variable from form input
$nama_produk = $_POST["nama_produk"];
$nama_pemasok = $_POST["nama_pemasok"];

$result = mysqli_query($conn, "INSERT INTO `detail_pemasok` (`id`, `produk_id`, `pemasok_id`) VALUES (Null, '$nama_produk', '$nama_pemasok');");

header("Location:index.php");

?>