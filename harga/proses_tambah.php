<?php 
include '../koneksi.php';
print_r($_POST);
// get variable from form input
$nama_produk = $_POST["nama_produk"];
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];

$result = mysqli_query($conn, "INSERT INTO `harga` (`id_harga`, `produk_id`, `harga_beli`, `harga_jual`) VALUES (Null, '$nama_produk', '$harga_beli', '$harga_jual');");

header("Location:index.php");

?>