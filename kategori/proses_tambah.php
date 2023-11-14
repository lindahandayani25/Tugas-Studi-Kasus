<?php 
include '../koneksi.php';

// get variable from form input
$nama_kategori = $_POST["nama_kategori"];

$result = mysqli_query($conn, "INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES (NULL, '$nama_kategori');");

header("Location:index.php");

?>