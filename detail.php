<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Grocery Store | Home</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css" />

    <link rel="stylesheet" href="front-end/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="front-end/style/main.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <header style="position:fixed; width:100%; z-index:2;">
		<nav class="main-nav">
			<div class="brand text-main">
				<a href="home.php">
					<h1>Jaya.Abadi</h1>
				</a>
			</div>
			<div>
                <ul style="list-style-type:none; margin:0; padding:0; overflow:hidden;">
					<li style="float:left;"><a class="text-main" href="home.php" style="display:block; padding: 14px 16px; text-decoration:none; color:#333;">Home</a></li>
					<li style="float:left;"><a class="text-main" href="about.php" style="display:block; padding: 14px 16px; text-decoration:none; color:#333;">About</a></li>
				</ul>
			</div>
		</nav>
	</header>
    <!-- Navigation -->

    <!-- Home -->
	<header>
		<div class="bg-dark">
			<div class="home-background" style="background-image:url('img/banner.png'); background-size: cover; background-position:center; height:50vh; opacity:0.15; position:relative;"></div>
			<div class="text-container" style="position:absolute; top:30%; left:50%; transform:translate(-50%, -50%);">
				<div class="text-banner">
                    <h1 class="text-white">Product Detail</h1>
                </div>
			</div>
		</div>
	</header>
	<!-- End Home -->

    <!-- Section-->
    <section class=" py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <table>
                <?php
                    include 'koneksi.php';

                    $id_terima = $_GET['id_produk'];
                    $produk = mysqli_query($conn, "SELECT * FROM `produk` as p JOIN `kategori` as k ON p.kategori_id=k.id_kategori JOIN `harga` as h ON p.id_produk=h.produk_id where id_produk=$id_terima;");

                    if(mysqli_num_rows($produk)>0){
                        while($p = mysqli_fetch_array($produk)){
                            $id_produk = $p["id_produk"];
                            $kode_produk = $p["kode_produk"];
                            $nama_produk = $p["nama_produk"];
                            $kategori = $p["kategori_id"];
                            $gambar = $p["gambar"];
                            $stok = $p["stok"];
                            $satuan = $p["satuan"];
                            $status = $p["status"];
                            $deskripsi = $p["deskripsi"];
                            $harga_jual = $p["harga_jual"];
                        }
                    }
                ?>
                <tbody>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 mb-5">
                            <div class="card h-100">
                                <center><img class="card-item-top mt-2" src="img/<?php echo $gambar ?>" width="500px"></center>
                                <div class="card-body card-body-custom pt-4">
                                    <h3 class="fw-bolder text-primary">Deskripsi</h3>
                                    <p><?php echo $deskripsi ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card">
                                <div class="card-body card-body-custom pt-4">
                                    <div class="text-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="fw-bolder">Special Item</h5>
                                            <div class="rent-price mb-3">
                                                <span style="font-size: 1rem" class="text-primary"><?php echo "Rp. " . number_format($harga_jual,0,',','.') ?></span>/<?php echo $satuan ?>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled list-style-group">
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span>Product Code :</span>
                                                <span style="font-weight: 600"><?php echo $kode_produk ?></span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span>Product Name :</span>
                                                <span style="font-weight: 600"><?php echo $nama_produk ?></span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span>Product Category :</span>
                                                <span style="font-weight: 600"><?php echo $kategori ?></span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span>Product Stock :</span>
                                                <span style="font-weight: 600"><?php echo $stok ?>&nbsp;<?php echo $satuan ?></span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span>Product Satus :</span>
                                                <span style="font-weight: 600"><?php echo $status ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                                            href="https://api.whatsapp.com/send?phone=6281572858098&text=Hallo%20kak,%20%0Asaya%20mau%20pesan%20produk%20ini." style="column-gap: 0.4rem">Beli Produk<i class="ri-whatsapp-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </section>
    <!-- End Section -->

    <footer class="bg-second">
		<div class="container">
			<div class="footer-content row mb-4">
				<div class="footer-brand col-12 col-sm-12 col-md-3 col-lg-3">
					<div>
						<h1 class="text-main">Jaya.Abadi</h1>
					</div>
				</div>

				<div class="footer-items-box col-12 col-sm-12 col-md-9 col-lg-9">
					<div class="footer-items row">
						<div class="footer-item col-12 col-sm-12 col-md-4">
							<div>
								<div class="footer-item-content">
									<h3 class="text-main">Store</h3>
									<p><a href="home.php">Home</a></p>
									<p><a href="about.php">About</a></p>
								</div>
							</div>
						</div>
	
						<div class="footer-item col-12 col-sm-12 col-md-4">
							<div>
								<div class="footer-item-content">
									<h3 class="text-main">Business</h3>
									<p>Jayaabadi@gmail.com</p>
									<p>021-1234-5678</p>
									<p>Bandung</p>
								</div>
							</div>
						</div>
	
						<div class="footer-item col-12 col-sm-12 col-md-4">
							<div>
								<div class="footer-item-content">
									<h3 class="text-main">Social</h3>
									<a href="#" class="ig-icon">
										<img src="front-end/assets/images/instagram.png" alt="ig" class="img-fluid">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="copyright-section border-top">
				<div class="row">
					<div class="col-12">
						<div class="copyright-content text-center mt-4">
							<p class="text-second">Jaya Abadi Online Store Copyright &copy; 2020 All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <!-- Core theme JS-->
    <script src="front-end/js/scripts.js"></script>
    <script src="front-end/script/index.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>



