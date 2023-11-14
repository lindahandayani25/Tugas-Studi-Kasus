<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Toko Sembako</title>

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
    <header>
		<nav class="main-nav">
			<div class="brand text-main">
				<a href="#">
					<h1>Jaya.Abadi</h1>
				</a>
			</div>
			<div class="links">
				<ul>
					<li><a href="#">Categories</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contacts</a></li>
					<li><a href="#">
						<img src="front-end/assets/icons/search.svg" alt="search">
					</a>
					<input type="search" class="search">
					</li>
				</ul>
			</div>
			<div class="icon-for-user">
				<a href="#">
					<img src="front-end/assets/icons/person.svg" alt="person">
				</a>
				<a href="#">
					<img src="front-end/assets/icons/shop-bag.svg" alt="person">
				</a>
			</div>
			<div class="menu">
				<img src="front-end/assets/icons/menu.svg" alt="menu">
			</div>
		</nav>
	</header>
    <!-- Navigation -->

    <!-- Header-->
    <header class="bg-info py-5">
        <div class="container">
			<div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
				<div class="banner-text col-sm-12 col-md-6">
					<p class="text-white mb-3">Selamat datang di katalog toko sembako kami!</p>
					<h1 class="text-main secondary-col mb-3">Koleksi Lengkap & Berkualitas
					</h1>
					<p class="text-white">Segera jelajahidan nikmati kemudahan berbelanja sembako online</p>
                    <a href="#" class="btn-rounded text-main">SHOP NOW</a>
				</div>
				<div class="banner-image col-sm-12 col-md-6 d-none d-sm-block">
					<img src="front-end/assets/images/logo.png" alt="image-banner" class="img-fluid" width="500px">
				</div>
			</div>
		</div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h1 class="text-center mb-5">Daftar Produk</h1>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
            <table>
                <?php
                    include 'koneksi.php';
                    $query = mysqli_query($conn, "SELECT * FROM `produk` as p JOIN `kategori` as k ON p.kategori_id=k.id_kategori JOIN `harga` as h ON p.id_produk=h.produk_id;");
                ?>    
                <tbody>
                    <?php 
                        if(mysqli_num_rows($query)>0){
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge badge-custom bg-success text-white position-absolute"
                                style="top: 0; right: 0">
                                <?php echo $data["status"] ?>
                            </div>
                            <!-- Product image-->
                            <center><img class="card-item-top mt-2" src="img/<?php echo $data["gambar"] ?>" width="100"></center>
                            <!-- Product details-->
                            <div class="card-body card-body-custom pt-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product price-->
                                    <div class="rent-price mb-3">
                                        <span class="text-primary"><?php echo "Rp. " . number_format($data["harga_jual"],0,',','.') ?></span>/<?php echo $data["satuan"] ?>
                                    </div>
                                    <ul class="list-unstyled list-style-group">
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Nama :</span>
                                            <span style="font-weight: 600"><?php echo $data["nama_produk"] ?></span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Kategori :</span>
                                            <span style="font-weight: 600"><?php echo $data["nama_kategori"] ?></span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Stok :</span>
                                            <span style="font-weight: 600"><?php echo $data["stok"] ?> &nbsp; <?php echo $data["satuan"] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-primary mt-auto" href="https://api.whatsapp.com/send?phone=6281572858098&text=Hallo%20kak,%20%0Asaya%20mau%20pesan%20produk%20ini.">Beli</a>
                                    <a class="btn btn-info mt-auto text-white" href="detail.php">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>

            </div>
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
									<p><a href="#">Categories</a></p>
									<p><a href="#">About</a></p>
									<p><a href="#">Contact</a></p>
								</div>
							</div>
						</div>
	
						<div class="footer-item col-12 col-sm-12 col-md-4">
							<div>
								<div class="footer-item-content">
									<h3 class="text-main">Business</h3>
									<p><a href="#">Jayaabadi@gmail.com</a></p>
									<p><a href="#">021-1234-5678</a></p>
									<p><a href="#">Bandung</a></p>
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



