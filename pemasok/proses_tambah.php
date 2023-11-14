<?php 
include '../koneksi.php';

// get variable from form input
$nama_pemasok = $_POST["nama_pemasok"];
$no_hp = $_POST["no_hp"];
$alamat = $_POST["alamat"];

$result = mysqli_query($conn, "INSERT INTO `pemasok` (`id_pemasok`, `nama_pemasok`, `no_hp`, `alamat`) VALUES (NULL, '$nama_pemasok', '$no_hp', '$alamat');");

header("Location:index.php");

?>