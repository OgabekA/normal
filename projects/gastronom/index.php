<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="icon" href="#">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<script src="/bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
<?php
include "database/carts.php";
include "database/certificate.php";
//include "modal/index.php"
?>
<!-- Container-Fluid -->
<div class="container-fluid_hole">
	<!-- Header -->
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<h5 class="title"><a class="navbar-brand" href="#">Gastronom</a></h5>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Grocery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pickup & Deli</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Carousel -->
	<div class="carousel">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/grocery_1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/grocery_2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/grocery_3.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div>
	</div>
	<!-- Section Number One -->
	<section class="carts">
			<?
			foreach ($result as $item) {
					?>
				<div class="card">
					<img src="img/small_cart.png" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text"><? echo $item['description']; ?></p>
					</div>
					<div class="cart-item">
						<button type="submit" class="btn btn-info modal-dialog">CHECK</button>
					</div>
				</div>
					<?
			}
			?>
	</section>
	<!-- Section Number Two -->
	<section class="certificates">
			<?php
			foreach ($certificates as $certificate){ ?>
		<div class="card-group">
			<div class="card">
				<img src="..." class="card-img-top" alt="...">
			</div>
		</div>
			<?php } ?>
	</section>
</div>
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>