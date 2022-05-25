<?php
	session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- FontAwesome -->
		<link href="css/fontawesome.min.css" rel="stylesheet">
		<!-- Bootstrap DatePicker -->
		<link href="css/bootstrap-datepicker.min.css" rel="stylesheet"/>		
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Title, Description, etc. -->
		<title>Used Cars Rental (UCR) - Contact</title>
	</head>
	<body>

		<br><br><br>
		
		<!-- Main Page Container -->  
		<div class="container shadow-lg p-3 mb-5 bg-white rounded">
		
			<!-- Logo -->
			<div class="row justify-content-center">
				<img src="img/logo.png"></img>
			</div>		
			
			<!-- Navigation Bar -->
			<?php include "inc/navbar.php"; ?>	
	
			<div class="card shadow">
				<div class="card-header">
					Contact
				</div>
				<div class="card-body">
	
					<form id="contact-form" method="post" role="form">
					
						<div class="messages"></div>
					
						<div class="controls">
					
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_name">First name *</label>
										<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_lastname">Last name *</label>
										<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_email">E-mail *</label>
										<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="form_need">Please specify your need *</label>
										<select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
											<option value=""></option>
											<option value="Request quotation">Request quotation</option>
											<option value="Request order status">Request order status</option>
											<option value="Request copy of an invoice">Request copy of an invoice</option>
											<option value="Other">Other</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form_message">Message *</label>
										<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<input type="submit" class="btn btn-secondary btn-send" value="Send message">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p class="text-muted">
										<strong>*</strong> These fields are required.
								</div>
							</div>
						</div>
					
					</form>			
					
				</div>
			</div>

		</div>
	
		<!-- Footer -->
		<?php include "inc/footer.php";?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>