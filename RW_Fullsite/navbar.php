 <!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<!-- Nav Bar CSS and structure -->
	
		<style>
			@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
			}
			@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
			.fa-2x {
				font-size: 2em;
					}
			.fa {
				position: relative;
				display: table-cell;
				width: 60px;
				height: 36px;
				text-align: center;
				vertical-align: middle;
				font-size:20px;
				}
			div{
				position: relative;
				}

			.main-menu:hover,nav.main-menu.expanded {
				width:250px;
				overflow:visible;
				}

			.main-menu {
				background:#212121;
				border-right:1px solid #e5e5e5;
				position:absolute;
				top:0;
				bottom:0;
				height:100%;
				left:0;
				width:60px;
				overflow:hidden;
				-webkit-transition:width .05s linear;
				transition:width .05s linear;
				-webkit-transform:translateZ(0) scale(1,1);
				z-index:1000;
				}

			.main-menu>ul {
				margin:7px 0;
				color:#ffffff;
				}

			.main-menu li {
				position:relative;
				display:block;
				width:250px;

				}
			/* icon color here */
			
			.main-menu li>a {
				position:relative;
				display:table;
				border-collapse:collapse;
				border-spacing:0;
				color:#ffffff;
				font-family: arial;
				font-size: 14px;
				text-decoration:none;
				-webkit-transform:translateZ(0) scale(1,1);
				-webkit-transition:all .1s linear;
				transition:all .1s linear;

				}

			.main-menu .nav-icon {
				position:relative;
				display:table-cell;
				width:60px;
				height:36px;
				text-align:center;
				vertical-align:middle;
				font-size:18px;

				}

			.main-menu .nav-text {
				position:relative;
				display:table-cell;
				vertical-align:middle;
				width:190px;
				font-family: 'Titillium Web', sans-serif;

				}

			login{
				position:relative;
				display:table-cell;
				vertical-align:middle;
				width:190px;
				font-family: 'Titillium Web', sans-serif;
				color:#ffffff;
				}

			.main-menu>ul.logout {
				position:absolute;
				left:0;
				bottom:0;
				}

			.no-touch .scrollable.hover {
				overflow-y:hidden;
				}

			.no-touch .scrollable.hover:hover {
				overflow-y:auto;
				overflow:visible;
				}

			a:hover,a:focus {
				text-decoration:none;
				}

			nav {
				-webkit-user-select:none;
				-moz-user-select:none;
				-ms-user-select:none;
				-o-user-select:none;
				user-select:none;

				}

			nav ul,nav li {
				outline:0;
				margin:0;
				padding:0;
				}
			.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
				color:#fff;
				background-color:#5ca2db;
				}
			.area {
				float: left;
				background: #e2e2e2;
				width: 100%;
				height: 100%;
				position: relative;
				}
			@font-face {
				font-family: 'Titillium Web';
				font-style: normal;
				font-weight: 300;
				src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
				}
		</style>


	</head>
	
	<!-- Nav Bar Buttons and Icons -->
	
	<body>

		<div ></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="Home.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="contactus.php">
                        <i class="fa fa-comment-o"></i>
                        <span class="nav-text">
                            Contact
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="featured.php">
                       <i class="fa fa-plane"></i>
                        <span class="nav-text">
                            Featured Destinations
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="book.php">
                       <i class="fa fa-suitcase"></i>
                        <span class="nav-text">
                            Book
                        </span>
                    </a>
                </li>
				     <li class="has-subnav">
                    <a href="cart.php">
                       <i class="fa fa-shopping-cart"></i>
                        <span class="nav-text">
                            Shopping Cart
                        </span>
                    </a>
                </li>

                <li>
                    <a href="https://www.youtube.com/channel/UCzG23VLdi6PHLgKVE1jQeyQ/featured?disable_polymer=1" target="_blank">
                        <i class="fa fa-youtube"></i>
                        <span class="nav-text">
                           Travel Videos
                        </span>
                    </a>
                </li>

				<li class="has-subnav">
					<a href="https://www.facebook.com/Route-Weaver-2229316083846069/?modal=admin_todo_tour" target="_blank">
						<i class="fa fa-facebook-square"></i>
						<span class="nav-text">
							Facebook
						</span>
					</a>
				</li>

				<li class="has-subnav">
					<a href="https://www.instagram.com/routeweaver/" target="_blank">
						<i class="fa fa-instagram"></i>
						<span class="nav-text">
							Instagram
						</span>
					</a>
				</li></br>
				
				<!-- Login portal -->
				
				<form method="get">
					<table id="login" align="center">
						<tr>
							<td><i class="fa fa-users"></i></td>
							<td><input type="text" size="10" name="userId"/></td>
						</tr>
						<tr>
							<td><i class="fa fa-key"></i></td>
							<td><input type="password" size="10" name="password"/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Log In"/></td>
						</tr>
					</table>
				</form>

            </ul>

         </div>
        </nav>

	</body>
</html>
