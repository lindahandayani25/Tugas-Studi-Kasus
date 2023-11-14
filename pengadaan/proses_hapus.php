<?php 
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from detail_pemasok where `id` = '$_GET[id]'");

header("Location:index.php");

?>