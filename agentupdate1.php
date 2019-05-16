<?php
	include "variables3.php";
	include "functions3.php";
	
	$mysqli = connectDB($host, $user, $pwd, $db);

	//$mysqli->close();
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="travelcss.css" />
		<title>Agent Update Page</title>
		<style>
			#home:hover
			{
			opacity: 0.3;
			}
		</style>
		<script>
			var req;
			var agent;
			function getAgent(agentId)
			{
				console.log("getAgent: " + agentId);
				req = new XMLHttpRequest();
				var url = "/getagent.php?AgentId=" + agentId;
				req.open("get", url);
				req.onreadystatechange=handleResponse;
				req.send(null);
			}
			
			var handleResponse = function(){
				console.log("handleResponse");
				if (req.readyState == 4)
				{
					console.log("handleResponse: " + req.responseText);
					agent = JSON.parse(req.responseText);
					document.getElementById("AgentId").value = agent.AgentId;
					document.getElementById("AgtFirstName").value = agent.AgtFirstName;
					document.getElementById("AgtMiddleInitial").value = agent.AgtMiddleInitial;
					document.getElementById("AgtLastName").value = agent.AgtLastName;
					document.getElementById("AgtBusPhone").value = agent.AgtBusPhone;
					document.getElementById("AgtEmail").value = agent.AgtEmail;
					document.getElementById("AgtPosition").value = agent.AgtPosition;
				}
			}
		</script>
	</head>
	<body>
		<header>
			<h1 align="center"><a href="index.php"><img id= "home" src= "photos/traveltheworld.png" height="100px" width="100px"></a> Welcome to Travel Experts!<a href="index.php"><img id= "home" src= "photos/traveltheworld.png" height="100px" width="100px"></a></h1>
		</header>
		<h1 align="center">Agent Update Page</h1>
		Select an Agent to update:
		<?php
			print(selectAgents($mysqli));
		?>
		<form method="get" action="agentupdate2.php">
			<input type="hidden" name="AgentId" id="AgentId" />
		<table border="1" align="center">	
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="AgtFirstName" id="AgtFirstName" value="" /></td>
			</tr>
			<tr>
				<td>Middle Initial:</td>
				<td><input type="text" name="AgtMiddleInitial" id="AgtMiddleInitial" /></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="AgtLastName" id="AgtLastName" /></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="AgtBusPhone" id="AgtBusPhone" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="AgtEmail" id="AgtEmail" /></td>
			</tr>
			<tr>
				<td>Position:</td>
				<td><input type="text" name="AgtPosition" id="AgtPosition" /></td>
			</tr>
			<tr>
				<td>Agency Id:</td>
				<td><?php print(selectAgency($mysqli)); ?></td>
			</tr>
			<tr>
				<td><input type="submit" value="Send" /></td>
			</tr>
		</table>	
		</form>
	<?php
			include("footer2.php")
		?>