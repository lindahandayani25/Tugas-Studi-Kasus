<?php 
include '../koneksi.php';

// get variable from form input
$kode_produk = $_POST["kode_produk"];
$nama_produk = $_POST["nama_produk"];
$kategori = $_POST["kategori"];
$gambar = $_FILES["gambar"]["name"];
$source = $_FILES["gambar"]["tmp_name"];
$folder = "../img/";
$stok = $_POST["stok"];
$satuan = $_POST["satuan"];
$status = $_POST["status"];
$deskripsi = $_POST["deskripsi"];

if($gambar != ""){
    move_uploaded_file($source, $folder.$gambar);
    $result = mysqli_query($conn, "UPDATE `produk` set 
        `kode_produk` = '$kode_produk', 
        `nama_produk` = '$nama_produk', 
        `kategori_id` = '$kategori', 
        `gambar` = '$gambar', 
        `stok` = '$stok', 
        `satuan` = '$satuan', 
        `status` = '$status', 
        `deskripsi` = '$deskripsi' 
        where `id_produk` = '$_GET[id_produk]'");
    if($result){
        echo "Berhasil update gambar";
    }else{
        echo "Gagal update gambar";
    }
}else{
    $result = mysqli_query($conn, "UPDATE `produk` set 
        `kode_produk` = '$kode_produk', 
        `nama_produk` = '$nama_produk', 
        `kategori_id` = '$kategori', 
        `stok` = '$stok', 
        `satuan` = '$satuan', 
        `status` = '$status', 
        `deskripsi` = '$deskripsi' 
        where `id_produk` = '$_GET[id_produk]'");
    if($result){
        echo "Berhasil update gambar";
    }else{
        echo "Gagal update gambar";
    }
}

header("Location:index.php");

?>