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
			<div class="home-background" style="background-image:url('img/kardus.jpg'); background-size: cover; background-position:center; height:100vh; opacity:0.2; position:relative;"></div>
			<div class="text-container" style="position:absolute; top:50%; left:40%; transform:translate(-50%, -50%);">
				<div class="banner-text">
					<h1 class="text-main secondary-col mb-4">Jaya Abadi</h1>
					<h4 class="text-main secondary-col mb-4">Jaya abadi grocery store provides a variety of daily necessities, ensuring quality and competitive prices throught its reliable suppliers. Form rice and cooking oil to cleaning products, the store makes it convenient for customers to fulfill their everyday needs.</h4>
					<h4 class="text-main secondary-col mb-4">The following is information about our suppliers, where the product supplied are the best product.</h4>
					<a href="#supplier" class="btn-rounded text-main">SUPPLIER</a>
				</div>
			</div>
		</div>
	</header>
	<!-- End Home -->

    <!-- Supplier -->
	<section id="supplier" class="products-section py-5">
		<div class="container mt-5">
			<h1 class="text-main mb-3">Supplier Info</h1>
			<hr style="margin-bottom: 30px; height:3px">
			<div class="row row-cols-xl-4 justify-content-center">
				<?php
					include 'koneksi.php';
					$query = mysqli_query($conn, "SELECT * FROM `produk` as p JOIN `detail_pemasok` as dp ON p.id_produk=dp.produk_id JOIN `pemasok` as pe ON dp.pemasok_id=pe.id_pemasok where id_produk=id_produk;");
				?>
				<?php 
					if(mysqli_num_rows($query)>0){
					while($data = mysqli_fetch_array($query)){
				?>
				<div class="products">
					<div class="product">
						<div class="bg-white">
							<div class="product-image text-center">
								<img src="img/<?php echo $data["gambar"]?>" alt="product" class="img-fluid mt-4" style="width:100px">
							</div>
							<div class="desc-product">
									<p style="font-size:16px;">Info :</p>
									<strong><p class="text-second mb-1"><?php echo $data["nama_pemasok"]?></p></strong>
									<p class="text-second mb-1"><?php echo $data["no_hp"]?></p>
									<p class="text-second mb-3"><?php echo $data["alamat"]?></p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php } ?>
            </div>
		</div>
	</section>
	<!-- End Supplier -->

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
									<p><a href="about">About</a></p>
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



