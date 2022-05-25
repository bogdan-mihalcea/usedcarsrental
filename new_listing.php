<?php
	session_start();

	include "inc/new_listing.php";
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
		<title>Used Cars Rental (UCR) - Add new listing</title>
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
				if(isset($addListingMsg)){
			?>
			<div class="alert alert-success">
				<strong><?php echo $addListingMsg; ?></strong>
			</div>
			<?php
				}
			?> 

			<div class="card shadow">
				<div class="card-header">
					Add new car listing
				</div>
				<div class="card-body">
				
					<form method="post" class="form-horizontal">
							
						<div class="form-group">
							<label class="control-label">Car model:</label>
							<input type="text" name="txt_car_model" class="form-control" placeholder="Enter your car model. e.g. Tesla Model 3 2021"<?php if(!isset($_SESSION['user_login'])){echo "disabled";}?> />
						</div>
						
						<div class="form-group">
							<label class="control-label">Car type:</label>
								<select class="form-control search-slt" name="sel_car_type" <?php if(!isset($_SESSION['user_login'])){echo "disabled";}?>>
									<option hidden>Select Type of Car</option>
									<option>Convertible / Roadster</option>
									<option>Small car</option>
									<option>Station wagon</option>
									<option>Limousine</option>
									<option>Sports car / Coupe</option>
									<option>Off-road vehicle / pickup / SUV</option>
									<option>Van / minibus</option>
									<option>Other</option>
								</select>
						</div>
						
						<div class="form-group">
							<label class="control-label">City:</label>
								<select class="form-control" name="sel_city" <?php if(!isset($_SESSION['user_login'])){echo "disabled";}?>>
									<option hidden>Select Available City</option>
									<option>Bucharest</option>
									<option>Brasov</option>
									<option>Bacau</option>
									<option>Sibiu</option>
									<option>Timisoara</option>
									<option>Iasi</option>
								</select>						
						</div>						
						
						<div class="form-group">
							<label class="control-label">Starting date:</label>
							<input type="text" class="form-control" name="sel_date" id="datepicker" placeholder="Enter the date from which your car will be available. Format: DD-MM-YYYY." <?php if(!isset($_SESSION['user_login'])){echo "disabled";}?>>							
						</div>	

						<div class="form-group">
							<label class="control-label">Description:</label>
							<input type="text" name="txt_description" class="form-control" placeholder="Enter a description of your offer. e.g. your price per day, your rules etc." <?php if(!isset($_SESSION['user_login'])){echo "disabled";}?>/>
						</div>
							
						<div class="form-group">
							<input type="submit" name="btn_add_listing" class="btn btn-secondary" value="Add new listing" <?php if(!isset($_SESSION['user_login'])){echo "disabled";}?>>
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