<?php 
include '../koneksi.php';

// get variable from form input
$nama_pemasok = $_POST["nama_pemasok"];
$no_hp = $_POST["no_hp"];
$alamat = $_POST["alamat"];

$result = mysqli_query($conn, "UPDATE `pemasok` set `nama_pemasok` = '$nama_pemasok', `no_hp` = '$no_hp', `alamat` = '$alamat' where `id_pemasok` = '$_GET[id_pemasok]'");

header("Location:index.php");

?>