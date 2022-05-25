<?php
	session_start();
	
	include 'inc/my_listing.php';
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
		<title>Used Cars Rental (UCR) - My listing</title>
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
				
				if (isset($id))
				{
					if(isset($successMsg)){
			?>
			<div class="alert alert-success">
				<strong><?php echo $successMsg; ?></strong>
			</div>
					<?php
					}
					?>

			<div class="card shadow">
				<div class="card-header">
					Admin Panel (Listing)
				</div>
			
				<div class="card-body">
					<h5 class="card-title">

							Welcome, <span class="text-info"><?php echo $row['username']; ?></span>. 

					</h5>
					<p class="card-text">
						Below you can see all your car listings.
					</p>
				<div class="table-responsive">	
					<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">Car Model</th>
						<th scope="col">Car Type</th>
						<th scope="col">City</th>
						<th scope="col">Start date</th>
						<th scope="col">Listing added on:</th>
						<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
			<?php		
				if (empty($data)){
			?>

					
						<tr>
							<td>
							Sorry. You have no listings
							</td>
						</tr>


			<?php
				}
				else {
					foreach($data as $row){
			?>

						<tr>
							<td><?php echo $row['car_model'];?></td>
							<td><?php echo $row['car_type'];?></td>
							<td><?php echo $row['city'];?></td>
							<td><?php echo $new_date=format_date($row['start_date'],"show");?></td>
							<td><?php echo $row['added_date'];?></td>
							<td><a href="my_listing.php?action=delete&id=<?php echo $row['id'];?>" class="text-danger">delete entry</a></td>
						</tr>
			
			<?php
						}
				}
			?>
					</tbody>
					</table>
				</div>
				</div>
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