<?php 
include '../koneksi.php';

// get variable from form input
$nama_kategori = $_POST["nama_kategori"];

$result = mysqli_query($conn, "UPDATE `kategori` set `nama_kategori` = '$nama_kategori' where `id_kategori` = '$_GET[id_kategori]'");

header("Location:index.php");

?>