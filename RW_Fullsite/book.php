<?php
	session_start();
	include ("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/book.css">
<link rel="stylesheet" type="text/css" href="styles/book_responsive.css">
</head>
<body>
	<script>
		function addtoCart()
		{
				var x=document.getElementById("quantity_input").value;
				document.getElementById("cartQuantity").innerHTML=x;
		}
	</script>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#"><img src="StockPhotos/routeweaver.gif" id="route" style="width:45%;" alt=""></a></div>

							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="cart.php">

										<!-- <div>Cart <span id="cartQuantity">(0)</span></div> -->
										<div> Cart<p id="cartQuantity">0<p><div>
										<img src="images2\shoppingBag.png" id="shoppingbag" alt="">
									</a>
								</div>

								<div class="hamburger"><i class="fas fa-shopping-cart" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Product Details -->

	<div class="product_details" id="mexico">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image"><br><br> <br><br>
						<div class="details_image_large"><img src="images2/1.png" style="width:80%; margin-top: 40px"  alt=""><a href="categories.html"></a></div>

					</div>
				</div>

				<!-- Product Content --><br> <br>
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name"><br><br><br>Mexico</div>
						<div class="details_price">$2499</div>


						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>Experience the rush and live it up in the Mayan Peninsula.   Trip is all-inclusive and includes airfare, choice of various activities, food and drink.</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control" onclick="addtoCart()"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control" onmouseover="addtoCart()">OK<i aria-hidden="true"></i></div><p>Click here after selecting the # of packages</p>
								</div>
							</div>
							<!--<div class="button cart_button" onclick="addtoCart()"><a href="">Add to cart</a></div>-->
						</div>



			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title"></div>
						<div class="reviews_title"><a href="#">Reviews <span>(3)</span></a></div>
					</div>
					<div class="description_text">
						<p>"This was one of the most exhilirating experiences of my life.   I have recommended this package to many people"- Bill USA</p>
						<p>"My wife and I had so much fun"- Hasan Canada</p>
						<p>"Bla Bla Bla"- Johnny Appleseed USA</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="product_details" id="montana">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="images2/2.png" style="width:80%;"  alt=""><a href="categories.html"></a></div>

					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name">Montana</div>
						<div class="details_price">$2499</div>

						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>Designed for experienced riders who crave adventure and shivers-down-your-spine amazing trails, our Singletrack Rides feature epic riding on some of the most revered and sought-after slices of singletrack on the planet, with heaps of other incredible travel experiences to write home about.  Includes airfare, food and lodging (camping equipment included). </p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control" onclick="addtoCart()"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="">Add to cart</a></div>
						</div>



			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title"></div>
						<div class="reviews_title"><a href="#">Reviews <span>(3)</span></a></div>
					</div>
					<div class="description_text">
						<p>"This was one of the most exhilirating experiences of my life.   I have recommended this package to many people"- Bill USA</p>
						<p>"My wife and I had so much fun"- Hasan Canada</p>
						<p>"Bla Bla Bla"- Johnny Appleseed USA</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="product_details" id="sydney">
			<div class="container">
				<div class="row details_row">

					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="details_image">
							<div class="details_image_large"><img src="images2/3.png" style="width:80%;"  alt=""><a href="categories.html"></a></div>

						</div>
					</div>

					<!-- Product Content -->
					<div class="col-lg-6">
						<div class="details_content">
							<div class="details_name">Sydney</div>
							<div class="details_price">$6200</div>

							<!-- In Stock -->
							<div class="in_stock_container">
								<div class="availability">Availability:</div>
								<span>In Stock</span>
							</div>
							<div class="details_text">
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
							</div>

							<!-- Product Quantity -->
							<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="">Add to cart</a></div>
						</div>




				<div class="row description_row">
					<div class="col">
						<div class="description_title_container">
							<div class="description_title"></div>
							<div class="reviews_title"><a href="#">Reviews <span>(3)</span></a></div>
						</div>
						<div class="description_text">
							<p>"This was one of the most exhilirating experiences of my life.   I have recommended this package to many people"- Bill USA</p>
							<p>"My wife and I had so much fun"- Hasan Canada</p>
							<p>"Bla Bla Bla"- Johnny Appleseed USA</p>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="images2/4.png" style="width:80%;" id="colorado" alt=""><a href="categories.html"></a></div>

					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content"> <br> <br>
						<div class="details_name">Colorado</div>
						<div class="details_price">$3000</div>


						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>Experience the rush and live it up in the Mayan Peninsula.   Trip is all-inclusive and includes activities, food and drink.</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="">Add to cart</a></div>
						</div>



			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title"></div>
						<div class="reviews_title"><a href="#">Reviews <span>(3)</span></a></div>
					</div>
					<div class="description_text">
						<p>"This was one of the most exhilirating experiences of my life.   I have recommended this package to many people"- Bill USA</p>
						<p>"My wife and I had so much fun"- Hasan Canada</p>
						<p>"Bla Bla Bla"- Johnny Appleseed USA</p>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="images2/5.png" style="width:80%;" id="california" alt=""><a href="categories.html"></a></div>

					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content"> </br> </br>
						<div class="details_name">California</div>
						<div class="details_price">$3000</div>


						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>Experience the rush and live it up in the Mayan Peninsula.   Trip is all-inclusive and includes activities, food and drink.</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="">Add to cart</a></div>
						</div>


			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title"></div>
						<div class="reviews_title"><a href="#">Reviews <span>(3)</span></a></div>
					</div>
					<div class="description_text">
						<p>"This was one of the most exhilirating experiences of my life.   I have recommended this package to many people"- Bill USA</p>
						<p>"My wife and I had so much fun"- Hasan Canada</p>
						<p>"Bla Bla Bla"- Johnny Appleseed USA</p>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="images2/6.png" style="width:80%;" id="oahu" alt=""><a href="categories.html"></a></div>

					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content"> <br> <br>
						<div class="details_name">Oahu</div>
						<div class="details_price">$4000</div>


						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>Sold Out!</span>
						</div>
						<div class="details_text">
							<p>Experience the rush and live it up in the Mayan Peninsula.   Trip is all-inclusive and includes activities, food and drink.</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="button cart_button"><a href="#">Add to cart</a></div>
						</div>

						<!-- Share -->

					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title"></div>
						<div class="reviews_title"><a href="#">Reviews <span>(3)</span></a></div>
					</div>
					<div class="description_text">
						<p>"This was one of the most exhilirating experiences of my life.   I have recommended this package to many people"- Bill USA</p>
						<p>"My wife and I had so much fun"- Hasan Canada</p>
						<p>"Bla Bla Bla"- Johnny Appleseed USA</p>
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
						<div class="newsletter_title">Subscribe to our newsletter</div>
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
<script src="js/product.js"></script></br>
<?php
	include("RW_footer.php");
?>
</body>
</html>
