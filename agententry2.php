<?php
	include("functions3.php");
	include("Agentclass.php");
	
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
			$agent = new Agent(0,$_REQUEST["AgtFirstName"],$_REQUEST["AgtMiddleInitial"],$_REQUEST["AgtLastName"],$_REQUEST["AgtBusPhone"],$_REQUEST["AgtEmail"],$_REQUEST["AgtPosition"],$_REQUEST["AgencyId"]);
			if (insertAgentObject($agent))
			{
				print("Agent enter successful");
			}
			else
			{
				print("Agent entry failed");
			}
		}

		header("Location: agententry1.php");
	}
	else
	{
		header("Location: agententry1.php");
	}
?>