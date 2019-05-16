<?php
	session_start();
	include ("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<link rel="stylesheet" href="https://use.typekit.net/isz4mql.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-end">
							<div class="logo"><a href="#"> <img src="StockPhotos/routeweaver.gif" id="route" style="width:45%; alt=""></a></div>
								<div class="shopping_cart">
									<a href="cart.php">
                                    <img src="images2\shoppingBag.png" id="shoppingbag" alt="">
										<div>Cart <span>(0)</span></div>
									</a>
								</div>

								<div class="hamburger"><i class="fas fa-shopping-cart" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Showing <span>12</span> results</div>
						<div class="sorting_container ml-md-auto">
							<div class="sorting">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<div class="product_grid">

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/1.png" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="book.php#mexico">Mexico</a></div>
								<div class="product_price">$2499</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/2.png" alt=""></div>
							<div class="product_extra product_new"><a href="categories.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="book.php#montana">Montana</a></div>
								<div class="product_price">$3500</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/3.png" alt=""></div>
							<div class="product_extra product_shot"><a href="categories.html">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="book.php#sydney">Sydney Australia</a></div>
								<div class="product_price">$6200</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/4.png" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="book.php#colorado">Colorado</a></div>
								<div class="product_price">$3000</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/5.png" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="book.php#california">California</a></div>
								<div class="product_price">$3000</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/6.png" alt=""></div>
							<div class="product_extra product_shot"><a href="categories.html">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="book.php#oahu">Oahu</a></div>
								<div class="product_price">$4000</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/7s.jpg" alt=""></div>
							<div class="product_extra product_hot">N/A</a></div>
							<div class="product_content">
								<div class="product_title"><a href="">Maui</a></div>
								<div class="product_price">$3900</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/8s.jpg" alt=""></div>
							<div class="product_extra product_hot">N/A</a></div>
							<div class="product_content">
								<div class="product_title"><a href="">Western Canada</a></div>
								<div class="product_price">$2200</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/9s.jpg" alt=""></div>
							<div class="product_extra product_hot">N/A</a></div>
							<div class="product_content">
								<div class="product_title"><a href="">Nevada</a></div>
								<div class="product_price">$3200</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/10s.jpg" alt=""></div>
							<div class="product_extra product_hot">N/A</a></div>
							<div class="product_content">
								<div class="product_title"><a href="">Alberta</a></div>
								<div class="product_price">$1800</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/11s.jpg" alt=""></div>
							<div class="product_extra product_hot">N/A</a></div>
							<div class="product_content">
								<div class="product_title"><a href="">New Zealand</a></div>
								<div class="product_price">$4400</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images2/12s.jpg" alt=""></div>
							<div class="product_extra product_hot">N/A</a></div>
							<div class="product_content">
								<div class="product_title"><a href="">Washington State</a></div>
								<div class="product_price">$2700</div>
							</div>
						</div>

					</div>


				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container"><h1>We Offer:</h1><br>
			<div class="row icon_box_row">


				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Superior Package Options</div>
						<div class="icon_box_text">
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Comprehensive Travel Insurance</div>
						<div class="icon_box_text">
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Agent Support</div>
						<div class="icon_box_text">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter (enter your email)</div>
						<div class="newsletter_text"><p>Get updates on our most recent excursions and events</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
<?php
	include("RW_footer.php");
?>
</body>
</html>
