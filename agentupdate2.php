<?php
	include("functions3.php");
	
	function validate($data)
	{
		$message = "";
		foreach($data as $k=>$v)
		{
			if ($v == "")
			{
				$message .= "$k must have a value<br />";
			}
		}
		return $message;
	}
	
	if (isset($_REQUEST["AgtFirstName"]))
	{
		$messages = validate($_REQUEST);
		if ($messages == "")
		{
			if (updateAgent($_REQUEST))
			{
				print("Data update complete");
			}
			else
			{
				print("update failed");
			}
		}
	
		header("Location: agentupdate1.php");
	}
	else
	{
		header("Location: agentupdate1.php");
	}
?>