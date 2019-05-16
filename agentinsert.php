<?php
	include("functions3.php");
	
	$data = array("AgtFirstName"=>"Wilma", "AgtMiddleInitial"=>"L", "AgtLastName"=>"Flintstone", "AgtBusPhone"=>"403-555-5555", "AgtEmail"=>"WF@TE.com", "AgtPosition"=>"Agent", "AgencyId"=>1);
	if (insertAgent($data))
	{
		print("Data insert complete");
	}
	else
	{
		print("Insert failed");
	}
?>