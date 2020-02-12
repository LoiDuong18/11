<?php require_once 'top_navs.php'; ?>
    <div class="main">
        <div class="container child-main">
            <div class="top-item">
                <div class="left-top-item">
                    <select class="language" name="language">
                        <option value="us">English</option>
                        <option value="vie">Vietnamese</option>
                    </select>
                    <select class="currency" name="language">
                        <option value="usd">USD</option>
                        <option value="vnd">VND</option>
                    </select>
                </div>
                <div class="right-top-item">
                    <ul class="child-right">
                        <li>
                            <a class=""href="#"><img src="img/heart-icon.png" alt=""><span>  Wishlist</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/person-icon.png" alt=""><span>  My Account</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/check-icon.png" alt=""><span>  Checkout</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/lock-icon.png" alt=""><span>  Login</span></a>
                        </li>
                        <li class="cart">
                            <a href="#"><img src="img/cart-icon.png" alt="">
                            </a>
                            <div class="count-cart">
                                0
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="logo-search">
                <div class="search-form">
                    <form class="search">
                        <button class="btn-search" type="submit" name="button"><img src="img/search-icon.png" alt=""></button>
                        <input class="input-search" type="text" name="key" placeholder="Search">
                    </form>
                </div>
                <div class="logo">
                    <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
			<div class="menu">
				<ul>
					<li class="dropdown">
						<a href="#" class="dropdown-parent">HOME <img src="img/dropdown.png" alt=""> </a>
						<ul class="dropdown-child">
							<li>
								<a href="#">HOME</a>
							</li>
							<li>
								<a href="#">HOME</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-parent">NEW ARRIVALS <img src="img/dropdown.png" alt=""> </a>
						<img class="new" src="img/new.png" alt="">
						<ul class="dropdown-child">
							<li>
								<a href="#">NEW ARRIVALS</a>
							</li>
							<li>
								<a href="#">NEW ARRIVALS</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">PROMOTIONS</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-parent">SPECIAL <img src="img/dropdown.png" alt=""> </a>
						<ul class="dropdown-child">
							<li>
								<a href="#">SPECIAL</a>
							</li>
							<li>
								<a href="#">SPECIAL</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">BLOG</a>
					</li>
					<li class="dropdown">
						<a href="#">CONTACT US</a>
					</li>
					<li class="dropdown">
						<a href="#">ABOUT US</a>
					</li>
				</ul>
				<ul class="right-menu">
					<li class="dropdown">
						<a href="#">SPECIAL OFFER!</a>
					</li>
					<li class="dropdown buythistheme">
						<a href="#">BUY THIS THEME!</a>
						<img class="hot" src="img/hot.png" alt="">
					</li>
				</ul>
			</div>
			<div class="big_slide">
				<div class="row">
					<div class="col-8">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="img/slide1.png" alt="First slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="img/slide3.png" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-4">
						<div id="carouselExampleControls" class="mini_slide carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="img/slide1.png" alt="First slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="img/slide3.png" alt="Third slide">
								</div>
							</div>
						</div>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="img/slide1.png" alt="First slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="img/slide3.png" alt="Third slide">
								</div>
							</div>
						</div>
					</div>
					<div id="slide_brand" class="owl-carousel">
						<?php
							foreach ($brands as $key => $value) {
								echo "<div class='carousel_child' id='brand'> <img src='img/brands/$value->image' alt=''> </div>";
							}
						?>
					</div>
					<div class="container">
						<div class="row">
							<div class="col col-4 shop">
								<img src="img/womenshop.png" alt="">
								<a href="#" class="shop_child">SHOP WOMEN'S</a>
							</div>
							<div class="col col-4 shop">
								<img src="img/womenshop.png" alt="">
								<a href="#" class="shop_child">SHOP MEN'S</a>
							</div>
							<div class="col col-4 shop">
								<img src="img/womenshop.png" alt="">
								<a href="#" class="shop_child">SHOP KID'S</a>
							</div>
						</div>
						<div class="newarrivals">
							<div class="header_newarrivals">
								<p>NEW ARRIVALS</p>
							</div>
							<div class='owl-carousel' id='slide_arrivals'>
							<?php
								foreach ($products as $key => $value) {
									$rates = Products::getRatingById($value->id);
									if ($rates == null) {
										$rates = 0;
									}
									echo "
										<div class='carousel_child'>
											<div class='product_arrival'>
												<img src='img/products/$value->image' alt=''>
												<p>$value->name</p>";
												if ($rates==0) {
													for ($i=0; $i < 5 - round($rates); $i++) {
														echo "<i class='fas fa-star'></i>";
													}
													echo "<br><i><small>Chưa có đánh giá nào</small></i>";
												}else{
													for ($i=0; $i < round($rates) ; $i++) {
														echo "<i class='fas fa-star voted'></i>";
													}
													for ($i=0; $i < 5 - round($rates); $i++) {
														echo "<i class='fas fa-star'></i>";
													}
													echo "<br><i><small>(".$rates."/5.0)</small></i>";
												}

												echo "<div class='price_arrivals'>
													<span class='new_price'>$$value->newprice</span>
													<span class='old_price'>$$value->oldprice</span>
												</div>
												<div class='btn_option'>
													<a href='#' class='add_to_cart'><i class='fas fa-cart-plus'></i></a>
													<a href='#' class='add_to_wishlist'><i class='far fa-heart'></i></a>
													<a href='#' class='detail_product'><i class='far fa-chart-bar'></i></a>
												</div>
											</div>
										</div>";
										}
									?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner">
				<img src="img/Banner.png" alt="">
			</div>
        </div>
		<div class="new_blog">
			<div class="container">
				<div class="row">
					<div class="col col-6 thisweek">
						<p class="title_blog">THIS WEEK</p>
						<p class="content_blog">Introducing James Jagger for AW16 Men’s</p>
						<a href="#">View more</a>
						<p class="content_blog">Introducing James Jagger for AW16 Men’s</p>
						<a href="#">View more</a>
						<p class="content_blog">Introducing James Jagger for AW16 Men’s</p>
						<a href="#">View more</a>
					</div>
					<div class="col col-6 subcribe_tab">
						<p>KEEP IN TOUCH...</p>
						<div class="produce_subcribe">Get style updates straight to your inbox. Simply enter your details below to keep up-to-date with the latest news on collections and exclusive events.</div>
						<br>
						<div class="subcribe-form">
		                    <form class="subcribe">
		                        <button class="btn-subcribe" type="submit" name="button">SUBCRIBE</button>
		                        <input class="input-subcribe" type="text" name="key" placeholder="Put your Email Address here">
		                    </form>
		                </div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="social">
				<p>FOLLOW US</p>
				<img src="" alt="">
			</div>
		</div>
    </div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="owlcarousel/dist/owl.carousel.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#slide_brand").owlCarousel({
				items: 5,
				loop:true,
	    		nav:true
			});
			$("#slide_arrivals").owlCarousel({
				items: 4,
				loop:true,
	    		nav:true
			});
		});
	</script>
	<script src="js/jquery.js"></script>
	<!-- <script src="js/jquery.barrating.min.js" type="text/javascript"></script> -->
</body>
</html>
