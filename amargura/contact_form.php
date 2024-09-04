<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>PHP, HTML, Bootstrap 3 Contact Fomr</title>
		<meta name="description" content="" />
		<meta name="author" content="Tudor Anghelina" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</head>

	<body style="background:url('images/bg.png') repeat">
		<div style="margin-top:200px">
			<div class="container">
				<div class="panel panel-default text-center" style="margin:0 auto;width:750px; background-color:#dcd9d9"><h3>You were contacted</h3>
					<p>as you have booked a holiday at Calle Amargura 11 at some point in the last 4 years. If you would like us to stop emailing you about Calle Amargura 11 then please complete this form and we will make sure your details are taken off our database.</p>
				</div></br>
					<div class="panel panel-default" style="margin:0 auto;width:500px">
				
						<div class="panel-body">
							<form name="contactform" method="post" action="http://www.amargura11.com/mailer.php" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputName" class="col-lg-2 control-label">Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
									<div class="col-lg-10">
										<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message...(optional)"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-default">
											Send Message
										</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>
