<?php 
include '../koneksi.php';

// get variable from form input
$id_produk = $_POST["id_produk"];
$id_pemasok = $_POST["id_pemasok"];

$result = mysqli_query($conn, "UPDATE `detail_pemasok` set `produk_id` = '$id_produk', `pemasok_id` = '$id_pemasok' where `id` = '$_GET[id]'");

header("Location:index.php");

?>