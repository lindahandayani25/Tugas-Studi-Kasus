<?php 
include '../koneksi.php';

// get variable from form input
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];

$result = mysqli_query($conn, "UPDATE `harga` set `harga_beli` = '$harga_beli', `harga_jual` = '$harga_jual' where `id_harga` = '$_GET[id_harga]'");

header("Location:index.php");

?>