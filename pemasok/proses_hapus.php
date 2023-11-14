<?php 
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from pemasok where `id_pemasok` = '$_GET[id_pemasok]'");

header("Location:index.php");

?>