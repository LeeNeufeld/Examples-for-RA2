<?php
	include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Card Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/demo.css">
    <link rel="stylesheet" href="https://use.typekit.net/isz4mql.css">
	<style>
		h3{
	font-family: Acumin Variable Concept;
	color:#ffffff;
	}
	h4{
	font-family: Acumin Variable Concept;
	}
	h6{
	font-family: Acumin Variable Concept;
	color:#ffffff;
	}
	</style>
</head>

<body>
    <div class="container-fluid">
        <header>
            
        </header>
        <div class="creditCardForm">
            <div class="heading">
                <h2>Confirm Purchase</h2><br>
            </div>
			<form style="margin-left:150px">
            <div class="payment">
                    <div class="form-group owner">
                        <label for="owner">Name</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group address">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="/images/visa.jpg" id="visa">
                        <img src="/images/mastercard.jpg" id="mastercard">
                        <img src="/images/amex.jpg" id="amex">
                    </div>        
                    <div class="form-group" id="expiration-date">
                        <h4>Expiration Date</h4>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
					
                        <select>
                            <option value="16"> 2019</option>
                            <option value="17"> 2020</option>
                            <option value="18"> 2021</option>
                            <option value="19"> 2022</option>
                            <option value="20"> 2023</option>
                            <option value="21"> 2024</option>
                        </select>
						
                    </div>
                    <div class="form-group CVV">
                        <h4>CVV</h4>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                   
                    <div class="form-group" id="pay-now">
					 <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                    </div>
					</form>
            </div>
        </div>

       
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
	
	<?php
		include("RW_footer.php");
	?>
</body>

</html>
