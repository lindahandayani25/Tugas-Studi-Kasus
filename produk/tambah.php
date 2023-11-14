<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Tambah Produk</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div>
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Toko Sembako</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Sembako</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tabel:</h6>
                        <a class="collapse-item" href="../kategori/index.php">Kategori</a>
                        <a class="collapse-item" href="index.php">Produk</a>
                        <a class="collapse-item" href="../harga/index.php">Harga</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="true" aria-controls="collapse3">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Pemasok</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tabel:</h6>
                        <a class="collapse-item" href="../pemasok/index.php">Pemasok</a>
                        <a class="collapse-item" href="../pengadaan/index.php">Pengadaan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-primary">
                            <h6 class="m-0 font-weight-bold text-light">Tambah Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            include '../koneksi.php';
                            ?>
                            <!-- Begin Form-->
                            <form action="proses_tambah.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                <div class="mb-3">
                                    <label for="kode_produk" class="form-label">Kode Produk</label>
                                    <input type="text" class="form-control" id="kode_produk" placeholder="Masukan kode produk" name="kode_produk">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk" placeholder="Masukan nama produk" name="nama_produk">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                    <select class="form-control" name="nama_kategori" id="nama_kategori">
                                        <option value="">-- Pilih --</option>
                                            <?php
                                            // Fetch data from the "items" table
                                            $query = mysqli_query($conn, "SELECT * FROM `kategori`");
                                            if(mysqli_num_rows($query)>0){
                                                while($data = mysqli_fetch_array($query)){
                                                    echo "<option value='" . $data["id_kategori"] . "'>" . $data["nama_kategori"] . "</option>";
                                                }
                                            } else {
                                                echo "<option value=''>No items available</option>";
                                            }
                                            ?>
                                    </select>
                                </div>
                                <!--
                                <div class="mb-3">
                                    <label for="fileToUpload" class="form-label">Gambar Produk</label>
                                    <input type="file" class="form-control" id="fileToUpload" placeholder="Masukan gambar produk" name="fileToUpload">
                                </div>
                                -->
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Pilih Gambar Produk</label>
                                    <input type="file" class="form-control" id="gambar" placeholder="Masukan gambar produk" name="gambar">
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok Produk</label>
                                    <input type="number" class="form-control" id="stok" placeholder="Masukan stok produk" name="stok">
                                </div>
                                <div class="mb-3">
                                    <label for="satuan" class="form-label">Satuan Produk</label>
                                    <input type="text" class="form-control" id="satuan" placeholder="Masukan satuan produk" name="satuan">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status Produk</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">-- Pilih --</option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="pengadaan">Pengadaan</option>
                                        <option value="tidak_tersedia">Tidak Tersedia</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                    <input type="text" class="form-control" id="deskripsi" placeholder="Masukan deskripsi produk" name="deskripsi">
                                </div>
                                <input type="submit" name="Submit" value="Simpan" class="btn btn-primary">
                            </form>
                            <!-- End Form-->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Website Toko Sembako 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

<!-- Validasi menggunakan javascript-->
<script>
    function validateForm(){
        var kode_produk = document.getElementById('kode_produk').value;
        var nama_produk = document.getElementById('nama_produk').value;
        var nama_kategori = document.getElementById('nama_kategori').value;
        var gambar = document.getElementById('gambar').value;
        var stok = document.getElementById('stok').value;
        var satuan = document.getElementById('satuan').value;
        var status = document.getElementById('status').value;
        var deskripsi = document.getElementById('deskripsi').value;

        if(kode_produk == "" || nama_produk == "" || nama_kategori == "" || gambar == "" || stok == "" || satuan == "" || status == "" || deskripsi == ""){
            alert('Silahkan isi data dengan lengkap!');
            return false;
        }
        return true;
    }
</script>

</html>