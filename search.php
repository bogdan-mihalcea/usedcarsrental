<?php
	session_start();
	
	include "inc/search.php";
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
		<title>Used Cars Rental (UCR) - Search cars</title>
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
			?>		

			<div class="card shadow">
				<div class="card-header">
					Search
				</div>
				<div class="card-body">
	
					<h5 class="card-title">
						Ready to start your adventure in Romania?
					</h5>
					<p class="card-text">
						Start by using our search form!
					</p>
	
					<form method="post">
						<div class="form-row">
							<div class="col-auto">
								<input type="text" class="form-control" name="sel_date" id="datepicker" placeholder="Starting Date">
							</div>
							<div class="col-auto">
								<select class="form-control search-slt" name="sel_car_type">
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
							<div class="col-auto">
								<select class="form-control" name="sel_city">
									<option hidden>Select Available City</option>
									<option>Bucharest</option>
									<option>Brasov</option>
									<option>Bacau</option>
									<option>Sibiu</option>
									<option>Timisoara</option>
									<option>Iasi</option>
								</select>
							</div>
							<div class="col-auto">
								<button type="submit" name="btn_search" class="btn btn-secondary">Search</button>
							</div>
						</div>
					</form>				
					
				</div>
			</div>	

			<?php 
			if(isset($data)){
				if (empty($data)){
			?>
			<br>
			<div class="card shadow">
				<div class="card-header">
					Search results
				</div>
				<div class="card-body">
					<h5 class="card-title">
						Sorry. Your search returned no results. You could try with another type of car or another city.
					</h5>
				</div>
					
			<?php
				}
				else {
			?>
			
			<br>			
			
			<div class="card shadow">
				<div class="card-header">
					Search results
				</div>
				<div class="card-body">			
			<?php
					foreach($data as $row){
			?>


					<div class="card shadow">
						<div class="card-header">
							<strong><div align="center"><?php echo $row['car_model'];?></div></strong>
						</div>
						<div class="card-body">

							<div class="card-columns">
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title"><strong>City:</strong></h5>
										<p class="card-text"><?php echo $row['city'];?></p>
									</div>
								</div>
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title"><strong>Available from:</strong></h5>
										<p class="card-text"><?php echo $new_date=format_date($row['start_date'],"show");?></p>
									</div>
								</div>
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title"><strong>Vehicle type:</strong></h5>
										<p class="card-text"><?php echo $row['car_type'];?></p>
									</div>
								</div>
							</div>						
							<div class="card text-center">
								<div class="card-body">
									<h5 class="card-title"><strong>Description:</strong></h5>
									<p class="card-text"><?php echo $row['description'];?></p>
								</div>
							</div>
							
							<br>
						
							<div class="card text-white bg-secondary">
								<div class="card-body">
									<h4 class="card-title"><strong>Contact details: </strong></h4>
										<p class="card-text">
											<strong>Owner name:</strong> <?php echo $row['real_name'];?>
										</p>
										<p class="card-text">
											<strong>E-mail address:</strong> <?php echo $row['email'];?>
										</p>
										<p class="card-text">
											<strong>Phone number:</strong> <?php echo $row['phone_number'];?>
										</p>
								</div>
							</div>
							<div class="card-footer">
								<small class="text-muted"><strong>Listing added on:</strong> <?php echo $row['added_date'];?></small>
							</div>
	
						</div>
					</div>		
					<br>						
<?php
				}}
				}
			?>
				</div>

		</div>
		
		<br>
	
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