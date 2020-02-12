<?php
	include_once '../Models/brands.php';
	include_once '../Models/products.php';
	$brands = Brands::getAllBrands();
	$products = Products::getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TADA PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fontawesome-stars.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="top-nav">
		<div class="container">
			<div class="row">
				<div class="col-4 icon-top">
					<div class="icon-detail">
						<div class="icon">
							<img src="img/clock.png" alt="">
						</div>
						<div class="detail-top">
							<div class="title-top-nav">
								<p>30 day return</p>
                            </div>
							<small>money back guarantee</small>
						</div>
					</div>
				</div>
                <div class="col-4 icon-top">
					<div class="icon-detail">
						<div class="icon">
							<img src="img/ship.png" alt="">
						</div>
						<div class="detail-top">
							<div class="title-top-nav">
								<p>free ship on $30</p>
                            </div>
							<small>On all order over $99</small>
						</div>
					</div>
				</div>
                <div class="col-4 icon-top">
					<div class="icon-detail">
						<div class="icon">
							<img src="img/label.png" alt="">
						</div>
						<div class="detail-top">
							<div class="title-top-nav">
								<p>safe shopping</p>
                            </div>
							<small>Save up to 50% now</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
