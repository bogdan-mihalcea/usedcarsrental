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
		<title>Used Cars Rental (UCR) - Admin Panel</title>
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
				if (isset($id))
				{
					if (verify_admin($id)==true){
			?>

			<div class="card shadow">
				<div class="card-header">
					Admin Panel
				</div>
			
				<div class="card-body">
					<h5 class="card-title">

							Welcome, <span class="text-info"><?php echo $row['username']; ?></span>. You are currently an Administrator.

					</h5>
					<p class="card-text">
						You can find below every action available to you.
					</p>
					<div class="table-responsive">
						<table class="table table-striped">

						<tbody>

							<tr>
							<th><a href="admin_user.php">See detailed information about all users</a></th>
							</tr>

							<tr>
							<th><a href="admin_listing.php">See every listing present in the database</a></th>

						
							</tr>	
						</tbody>
						</table>	
					</div>

				</div>
			</div>
			
				<?php
					} else{
				?>
			<div class="alert alert-danger">
				<strong>You do not have access to this page.</strong>
			</div>			
				<?php 
					}
				} else {
				?>
			<div class="alert alert-danger">
				<strong>You do not have access to this page.</strong>
			</div>
				<?php
				}
				?>

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