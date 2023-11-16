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
    <!-- End Navigation -->

	<!-- Home -->
	<header>
		<div class="bg-info">
			<div class="home-background" style="background-image:url('img/banner.png'); background-size: cover; background-position:center; height:100vh; opacity:0.2; position:relative;"></div>
			<div class="text-container" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);">
				<div class="banner-text">
					<p class="text-white mb-4" style="font-weight:bold;">Welcome to the Jaya Abadi grocery store catalog!</p>
					<h1 class="text-main secondary-col mb-4">Complete & Quality Collection
					</h1>
					<p class="text-white">Immediately explore and enjoy the convenience of online grocery shopping here!</p>
					<a href="#product" class="btn-rounded text-main">SHOP NOW</a>
				</div>
			</div>
		</div>
	</header>
	<!-- End Home -->
	
    <!-- Product -->
    <section id="product" class="products-section py-5">
        <div class="container mt-5">
			<h1 class="text-main mb-3">Product List</h1>
			<hr style="margin-bottom: 30px; height:3px">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            	<?php
                    include 'koneksi.php';
                    $query = mysqli_query($conn, "SELECT * FROM `produk` as p JOIN `kategori` as k ON p.kategori_id=k.id_kategori JOIN `harga` as h ON p.id_produk=h.produk_id where id_produk=id_produk;");
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
                            <center><img class="card-item-top mt-2" src="img/<?php echo $data["gambar"] ?>" width="200"></center>
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
                                            <span>Name :</span>
                                            <span style="font-weight: 600"><?php echo $data["nama_produk"] ?></span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Category :</span>
                                            <span style="font-weight: 600"><?php echo $data["nama_kategori"] ?></span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span>Stock :</span>
                                            <span style="font-weight: 600"><?php echo $data["stok"] ?> &nbsp; <?php echo $data["satuan"] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-primary mt-auto" href="https://api.whatsapp.com/send?phone=6281572858098&text=Hallo%20kak,%20%0Asaya%20mau%20pesan%20produk%20ini.">Buy</a>
                                    <a class="btn btn-info mt-auto text-white" href="detail.php?id_produk=<?php echo $data["id_produk"] ?>">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </div>
        </div>
    </section>
    <!-- End Product -->

	<!-- Footer -->
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
	<!-- End Footer -->

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



