<?php
	session_start();
	
	if (isset($_REQUEST["userId"]))
	{
		//connect to db
		$sql = "SELECT password FROM agents WHERE userId=?";
		$mysqli = new mysqli("localhost", "Lee", "Redlined2000", "travelexperts");
		if (mysqli_connect_errno())
		{
			die("Error: " . mysqli_connect_error());
		}
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("s", $_REQUEST["userId"]);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($row = $result->fetch_row())
		{
			if ($row[0] != $_REQUEST["password"])
			{
				$_SESSION["message"] = "Invalid Login";
				$mysqli->close();
				header("Location: login.php");
				exit;
			}
			else
			{
				$_SESSION["loggedin"] = True;
				if(isset($_SESSION["returnpage"]))
				{
				$returnpage = $_SESSION["returnpage"];
				}
				else
				{
				$returnpage = "agententry1.php";
				}
				unset($_SESSION["returnpage"]);
				$mysqli->close();
				header("Location: $returnpage");
			}
		}
		else
		{
			$_SESSION["message"] = "Invalid Login";
			$mysqli->close();
			header("Location: login.php");
			exit;
		}
	}
	else
	{
		$_SESSION["message"] = "You must login first";
		header("Location: login.php");
		exit;
	}

?>	

