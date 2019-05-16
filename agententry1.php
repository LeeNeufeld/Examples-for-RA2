<?php
	$mysqli = new mysqli("localhost", "Lee", "Redlined2000", "travelexperts");
	if (mysqli_connect_error())
	{
		print("Error: " . mysqli_connect_error());
		exit();
	}
	$sql = "SELECT AgencyId, AgncyAddress, AgncyCity FROM agencies";
	$result = $mysqli->query($sql);
	$agency = "<select name='AgencyId'>";
	while ($row = $result->fetch_row())
	{
		$agency .= "<option value=$row[0]>$row[1] $row[2]</option>";
	}
	$agency .= "</select>";
	$mysqli->close();
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="travelcss.css" />
		<title>Agent Entry Page</title>
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
		<h1 align="center">Agent Entry Page</h1>
		<form method="get" action="agententry2.php">
		<table border="1" align="center">
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="AgtFirstName" value="" /></td>
			</tr>
			<tr>
				<td>Middle Initial:</td>
				<td><input type="text" name="AgtMiddleInitial" /></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="AgtLastName" /></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="AgtBusPhone" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="AgtEmail" /></td>
			</tr>
			<tr>
				<td>Position:</td>
				<td><input type="text" name="AgtPosition" /></td>
			</tr>
			<tr>
				<td>Agency Id:</td>
				<td><?php print($agency); ?></td>
			</tr>
			<tr>
				<td><input type="submit" value="Send" /></td>
			</tr>
		</table>	
		</form>
	<?php
			include("footer2.php")
		?>