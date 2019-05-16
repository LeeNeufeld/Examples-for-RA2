<?php
	$hour = date("G");
	$title = "TE Registration";
	include("variables2.php");
	include("header2.php");
?>


		
			<link rel="stylesheet" type="text/css" href="travelcss.css" />
				<style>
					.content {
						position: absolute;
						top: 150px;
						left:725px;
						max-width: 300px;
						margin: auto;
						padding: 10px;
							}
					input[type='email']{
						background-color: pink;
										}
					.header{
						position: absolute;
						left: 600px;
							}		
					#home:hover{
						 opacity: 0.3;
								}
				</style>
	</head>
		<body>
			<div class="header">
		<header>
			<h1><a href="index.php"><img id= "home" src= "photos/traveltheworld.png" height="100px" width="100px"></a> Welcome to Travel Experts!<a href="index.php"><img id= "home" src= "photos/traveltheworld.png" height="100px" width="100px"></a></h1>
		</header>
			</div>
			<div class="content">
				<h1>UNDER CONSTRUCTION</h1>
					<img src="photos/under-construction.png" height="300" width="300">
			<div/>	
		<br />
		<br />
		<br />
	
	    <form method="post" action="bouncer.php" name="myform">
			<table border="1">
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="FirstName" /></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="LastName" /></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" name="PhoneNumber" /></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="EmailAddress" /></td>
				</tr>
				<tr>
					<td><input type="Submit" value="Enter" onclick= "return validate(this.form);"/></td>
					<td><input type="reset" onclick= "return confirm('Are you sure?');" /></td>
				</tr>
			</table>
		</form>
		<script>
			function validate(theform)
				{
				
					if(theform.FirstName.value == "")
					{
					alert("First Name must have a value");
					theform.FirstName.focus();
					return false;
					}
					if(theform.LastName.value == "")
					{
					alert("Last Name must have a value");
					theform.LastName.focus();
					return false;
					}
					if(theform.PhoneNumber.value == "")
					{
					alert("Phone number must have a value");
					theform.PhoneNumber.focus();
					return false;
					}
					if(theform.EmailAddress.value == "")
					{
					alert("Enter a valid email");
					theform.EmailAddress.focus();
					return false;
					}
				
				return confirm("Ready to submit?")
				}
		</script>

		<?php
			include("footer2.php")
		?>