<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	
	<title>Calle Amargura Remove from Database form</title>


<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>


<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
</head>


<body>
<!-- Set up structure of page -->

<div class="container">
	<div class="panel panel-default text-center thankyou-pg center-block" style="width:750px; background-color:#dcd9d9"><h3>You were contacted</h3>
					<p>as you have booked a holiday at Calle Amargura 11 at some point in the last 4 years. If you would like us to stop emailing you about Calle Amargura 11 then please complete this form and we will make sure your details are taken off our database.</p>
	</div></br>

		<div class="jumbotron">
<!-- Start code for the form-->
<form method="post" name="myemailform" action="form-to-email.php">
	<p>
		<label for='name' class="control-label">Enter Name: </label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for='email'>Enter Email Address:</label><br>
		<input type="text" name="email">
	</p>
	<p>
		<label for='message'>Enter Message:</label> <br>
		<textarea name="message"></textarea>
	</p>
	<input type="submit" name='submit' value="submit">
</form>
<script language="JavaScript">
// Code for validating the form

var frmvalidator  = new Validator("myemailform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

</body>
</html>