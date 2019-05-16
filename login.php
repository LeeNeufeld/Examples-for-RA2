<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="travelcss.css" />
		<title>Login</title>
		<style>
			#home:hover
			{
			opacity: 0.3;
			}
		</style>
	</head>
	<body>
		<header>
			<h1 align="center"><a href="index.php"><img id= "home" src= "photos/traveltheworld.png" height="100px" width="100px"></a> Welcome to Travel Experts!<a href="index.php"><img id= "home" src= "photos/traveltheworld.png" height="100px" width="100px"></a></h1>
		</header>
		<h1 align="center">Login</h1>
		<h2 style="color:red;">
		<?php
			if (isset($_SESSION["message"]))
			{
				print($_SESSION["message"]);
				unset($_SESSION["message"]);
			}
		?>
		</h2>
		<form method="get" action="checklogindb.php">
			<table border="1" align="center">
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="userId"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Log In"/></td>
			</tr>
		</table>
		</form>
	
	<?php
			include("footer2.php")
		?>