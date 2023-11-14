<?php 
include '../koneksi.php';
print_r($_POST);
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

/* Upload Proses
 $target_dir = "../img/"; // path directory image akan di simpan
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
 } else {
   echo "Sorry, there was an error uploading your file.<br>";
 }
*/

$result = mysqli_query($conn, "INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `kategori_id`, `gambar`, `stok`, `satuan`, `status`, `deskripsi`) VALUES (Null, '$kode_produk', '$nama_produk', '$nama_kategori', '$gambar', '$stok', '$satuan', '$status', '$deskripsi');");



?>