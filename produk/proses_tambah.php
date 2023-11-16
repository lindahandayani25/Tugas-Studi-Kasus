<?php 
include '../koneksi.php';
// get variable from form input
$kode_produk = $_POST["kode_produk"];
$nama_produk = $_POST["nama_produk"];
$nama_kategori = $_POST["nama_kategori"];
$gambar = $_FILES["gambar"]["name"];
$source = $_FILES["gambar"]["tmp_name"];
$folder = "../img/";
move_uploaded_file($source, $folder.$gambar);
$stok = $_POST["stok"];
$satuan = $_POST["satuan"];
$status = $_POST["status"];
$deskripsi = $_POST["deskripsi"];

$result = mysqli_query($conn, "INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `kategori_id`, `gambar`, `stok`, `satuan`, `status`, `deskripsi`) VALUES (Null, '$kode_produk', '$nama_produk', '$nama_kategori', '$gambar', '$stok', '$satuan', '$status', '$deskripsi');");

header("Location:index.php");

?>