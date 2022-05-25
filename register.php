<?php
	session_start();

	include "inc/register.php";
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
		<title>Used Cars Rental (UCR) - Register</title>
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
			<?php include "inc/navbar.php";?>	
			
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
				if(isset($registerMsg)){
			?>
			<div class="alert alert-success">
				<strong><?php echo $registerMsg; ?></strong>
			</div>
			<?php
				}
			?> 

			<div class="card shadow">
				<div class="card-header">
					Register
				</div>
				<div class="card-body">
				
					<form method="post" class="form-horizontal">
							
						<div class="form-group">
							<label class="control-label">Username:</label>
							<input type="text" name="txt_username" class="form-control" pattern="^[A-Za-z0-9_]{4,15}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'The username can contain letters, digits and _ . The lengh should be between 4-15 characters.' : '');" placeholder="Please enter your username" required <?php if(isset($_SESSION['user_login'])){echo "disabled";}?> />
						</div>
						
						<div class="form-group">
							<label class="control-label">Password:</label>
							<input type="password" name="txt_password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'The password needs to meet the following rules: at least 1 uppercase character, 1 lowercase, 1 digit/special character and a min. of 8 characters.' : ''); if(this.checkValidity()) form.txt_password_confirm.pattern = this.value;" placeholder="Please enter your password" required <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>/>
						</div>
						
						<div class="form-group">
							<label class="control-label">Confirm Password:</label>
							<input type="password" name="txt_password_confirm" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same password as above.' : '');" placeholder="Please confirm your password" required <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>/>
						</div>	

						<div class="form-group">
							<label class="control-label">E-mail:</label>
							<input type="email" name="txt_email" class="form-control" placeholder="e.g. bogdan.mihalcea@icloud.com" required <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>/>
						</div>
						
						<div class="form-group">
							<label class="control-label">Full name:</label>
							<input type="text" name="txt_real_name" class="form-control" pattern="^[a-zA-Z\s]*$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Your name must contain just letters and spaces.' : '');" placeholder="e.g. Bogdan Mihalcea" required <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>/>
						</div>
						
						<div class="form-group">
							<label class="control-label">Phone number:</label>
							<input type="tel" name="txt_phone" class="form-control" pattern="[+]{1}[0-9]{10,14}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter a valid phone number. + is also required.' : '');" placeholder="e.g. +447733752684" required <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>/>
						</div>
							
						<div class="form-group">
							<input type="submit" name="btn_register" class="btn btn-secondary" value="Register"<?php if(isset($_SESSION['user_login'])){echo "disabled";}?>>
						</div>
						
						<?php
							if(!isset($_SESSION['user_login'])){
						?>
						<div class="form-group"> 
							You already have an account? <br>Click <a href="login.php" class="text-info">here</a> to log in now!
						</div>
						<?php
						}
						?>						
							

						
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