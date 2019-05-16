
<!-- Call Nav Bar -->
<?php
	include("navbar.php");

?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="styles/contactus.css">



		<title>Route Weaver - Contact</title>
		
		<!-- Form Validation -->
		<script>
				function showDesc(paraId)
					{
					var paras = document.getElementsByClassName("formDesc");
					for (i=0; i<paras.length; i++)
						{
						paras[i].style.visibility = "hidden";
						}
						document.getElementById(paraId).style.visibility = "visible";
						}
				function validate()
						{
						var postal = document.getElementById("postal");
						postal.value = postal.value.toUpperCase();
						var regex = new RegExp(/^[A-Z]\d[A-Z][ -]?\d[A-Z]\d$/);
					if (!regex.test(postal.value))
					{
						alert("Postal code invalid");
						postal.focus();
						return false;
					}

					return confirm ("Form okay, Continue?")
					}

			</script>

		</head>
		<body>
			<header>

				<h1 align= "right"><img src="StockPhotos/routeweaver.gif" height="auto" width="520px" ></h1>
			</header>


			<h1 align="center">CONTACT US</h1><br />
			<br />
				<p align="center">The staff here at Route Weaver are excited to help you with all your travel needs!
					Please fill out the form below and an agent will contact you to start planning your next adventure! </p><br />
					
				<!-- Form Structure -->
				
				<p class="formDesc" id="parafname">Enter your first name</p>
				<p class="formDesc" id="paralname">Enter your last name</p>
				<p class="formDesc" id="parapostal">Enter your postal code</p>
				<p class="formDesc" id="paraphone">Enter your phone number</p>
				<p class="formDesc" id="paradest">Enter your destination</p>

			<form method="post" action="bouncer.php" >
				<table align="center" >
					<tr>
						<td>First Name:</td>
						<td><input type="text" name= "fname" required="required" onfocus="showDesc('parafname');"/></td>
					</tr>
						<tr>
						<td>Last Name:</td>
						<td><input type="text" name= "lname" required="required"onfocus="showDesc('paralname');" /></td>
					</tr>
						<tr>
						<td>Postal Code:</td>
						<td><input type="text" name= "postal" id="postal" required="required" onfocus="showDesc('parapostal');"/></td>
					</tr>
					</tr>
						<tr>
						<td>Phone Number:</td>
						<td><input type="phone" name= "phone" required="required" onfocus="showDesc('paraphone');"/></td>
					</tr>
							<tr>
						<td>Destination:</td>
						<td><input type="text" name= "destination" required="required" onfocus="showDesc('paradest');"/></td>
					</tr>
						<tr>
						<td><input type="submit" value= "Submit" onclick="return validate()" /></td>
						<td><input type="reset" onclick= "return confirm('Are you sure?');" /></td>

					</tr>
				</table>
			</form></br>
			</br>
			</br>
			
			<!-- Branch location -->
			<div id="add1">
				<tr>
				<td><h3>Route Weaver - Calgary Office</h3>
				<h3>1155 8th Ave SW</h3>
				<h3>Calgary, AB, T2P 1N3</h3>
				<h3>(403)271-9873</h3></td>
				</tr>
			</div>
			
          <!-- Google map call and api -->
		  
				<div id="map" ></div>

			<script>
		// Initialize and add the map
			function initMap() {
		// The location of Uluru
			var uluru = {lat: 51.0457755, lng: -114.0891245};
		// The map, centered at Uluru
			var map = new google.maps.Map(
			document.getElementById('map'), {zoom: 16, center: uluru});
		// The marker, positioned at Uluru
			var marker = new google.maps.Marker({position: uluru, map: map});
	}
			</script>

			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPKCynUzQN-rmCfpSsdYlYjUtRxjiU1NU&callback=initMap">
			</script>
	</body>


			<?php
				include("RW_footer.php")
			?>
