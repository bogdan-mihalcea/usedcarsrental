<?php
	session_start();
	
	include "inc/profile.php";
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
		<title>Used Cars Rental (UCR) - Profile</title>
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
				if(isset($successMsg)){
					foreach ($successMsg as $value) {
		
			?>
			<div class="alert alert-success">
				<strong><?php echo $value; ?></strong>
			</div>
			<?php
					}
				}
			?> 	

			<div class="card shadow">
				<div class="card-header">
					My profile
				</div>
				<div class="card-body">
	
					<div class="card shadow">
						<div class="card-header">
							<strong><div align="center">Welcome, <?php echo $row['username']; ?></div></strong>
						</div>
						<div class="card-body">	
	
							<div class="card-columns">
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title"><strong>Real name:</strong></h5>
										<p class="card-text"><?php echo $row['real_name'];?></p>
										<form method="post">
											<input type="text" class="form-control" name="update_real_name_txt" placeholder="Enter your new name"><br>
											<button type="submit" name="btn_update_real_name" class="btn btn-secondary">Update</button>
										</form>											
									</div>
								</div>
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title"><strong>E-mail:</strong></h5>
										<p class="card-text"><?php echo $row['email'];?></p>
											<form method="post">
												<input type="text" class="form-control" name="update_email_txt" placeholder="Enter a new email address"><br>
												<button type="submit" name="btn_update_email" class="btn btn-secondary">Update</button>
											</form>	
									</div>
								</div>
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title"><strong>Phone number:</strong></h5>
										<p class="card-text"><?php echo $row['phone_number'];?></p>
											<form method="post">
												<input type="text" class="form-control" name="update_phone_txt" placeholder="Enter a new phone number"><br>
												<button type="submit" name="btn_update_phone" class="btn btn-secondary">Update</button>
											</form>	
									</div>
								</div>						
							</div>	
	
		
					
						</div>
					</div>	



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