<!-- Call Nav Bar -->
<?php
	include ("navbar.php");
?>
<!DOCTYPE html>
<html>

<!-- Bootstrap for carousel -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles/home.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<title>Route Weaver - Home</title>
		</head>
	<body>

	<header>
		<h1 align= "right"><img src="StockPhotos/routeweaver.gif" height="auto" width="520px" ></h1>
	</header>
<!-- Timing for Carousel -->
	<div class="bs">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
<!-- Carousel content and structure-->

        <div class="carousel-inner">
            <div class="active item">
			<a href="featured.php" target="_blank">
                <img src="images2/11.jpg" alt="First Slide" >
         		<div class="carousel-caption">
                  <h3>Parasailing Adventure<span class="badge badge-secondary">SALE</span></h3>
                  <h4>Starting at $1499</h4>
                </div>
				</a>
            </div>
            <div class="item">
			<a href="featured.php" target="_blank">
                <img src="images2\adventure-backlit-cool-wallpaper-357891.jpg" alt="Second Slide" style="height:446px; width:auto;">
                <div class="carousel-caption">
                  <h3>Rock Climbing<span class="badge badge-secondary">SALE</span></h3>
                  <h4>$2500</h4>
                </div>
				</a>
            </div>
            <div class="item">
			<a href="featured.php" target="_blank">
                <img src="images2\snowmowide.jpg" style="height:446px; width:auto;" alt="Third Slide">
                <div class="carousel-caption">
                  <h3>Snow Mobiling<span class="badge badge-secondary">SALE</span></h3>
                  <h4>Back Country Package $3200</h4>
                </div>
				</a>
            </div>
			  <div class="item">
			  <a href="featured.php" target="_blank">
                <img src="images2\action-beach-fun-416676.jpg" alt="Third Slide" style="height:446px; width:auto">
                <div class="carousel-caption">
                  <h3>Surfing<span class="badge badge-secondary">SALE</span></h3>
                  <h4>Retreat starting at $2000</h4>
                </div>
				</a>
            </div>
        </div>
		
<!-- Carousel slide and buttons -->

        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

<?php
	include("RW_footer.php");
?>

	</body>
</html>
