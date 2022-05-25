<?php
	session_start();

	include "inc/login.php";
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
		<title>Used Cars Rental (UCR) - Login page</title>
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
			
			<?php	
				if(isset($errorMsg)){
					foreach($errorMsg as $error){
			?>
			<div class="alert alert-danger">
				<strong><?php echo $error; ?></strong>
			</div>
			<?php
					}
				}
				if(isset($loginMsg)){
			?>
			<div class="alert alert-success">
				<strong><?php echo $loginMsg; ?></strong>
			</div>
			<?php
				}
			?> 

			<div class="card shadow">
				<div class="card-header">
					Log in
				</div>
				<div class="card-body">
	
					<form method="post" class="form-horizontal">
						
						<div class="form-group">
							<label class="control-label">Username or E-mail</label>
							<input type="text" name="txt_username_email" class="form-control" placeholder="Please enter your username or your e-mail" required/>
						</div>
							
						<div class="form-group">
							<label class="control-label">Password</label>
								<input type="password" name="txt_password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'The password needs to meet the following rules: at least 1 uppercase character, 1 lowercase, 1 digit/special character and a min. of 8 characters.' : '');" placeholder="Please enter your password" required/>
						</div>
							
						<div class="form-group">
							<input type="submit" name="btn_login" class="btn btn-secondary" value="Login">
						</div>
							
						<div class="form-group">
							You don't have an account yet? <br>Click <a href="register.php" class="text-info">here</a> to register one now!
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