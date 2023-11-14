<?php 
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from harga where `id_harga` = '$_GET[id_harga]'");

header("Location:index.php");

?>