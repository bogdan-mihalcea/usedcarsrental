<?php
	session_start();
	
	include 'inc/admin_listing.php';
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
		<title>Used Cars Rental (UCR) - Admin Panel (Listing)</title>
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
					if (verify_admin($id)==true){
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

							Welcome, <span class="text-info"><?php echo $row['username']; ?></span>. You are currently an Administrator.

					</h5>
					<p class="card-text">
						Below you can see every listing present in the database.
					</p>
				<div class="table-responsive">	
					<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">owner_id</th>
						<th scope="col">car_model</th>
						<th scope="col">car_type</th>
						<th scope="col">city</th>
						<th scope="col">start_date</th>
						<th scope="col">added_date</th>
						<th scope="col">action</th>
						</tr>
					</thead>
					<tbody>
			<?php		
				if (empty($data)){
			?>

					
						<tr>
							<td>
							Sorry. There are no entries in the database.
							</td>
						</tr>


			<?php
				}
				else {
					foreach($data as $row){
			?>

						<tr>
							<th><?php echo $row['owner_id'];?></th>
							<td><?php echo $row['car_model'];?></td>
							<td><?php echo $row['car_type'];?></td>
							<td><?php echo $row['city'];?></td>
							<td><?php echo $new_date=format_date($row['start_date'],"show");?></td>
							<td><?php echo $row['added_date'];?></td>
							<td><a href="admin_listing.php?action=delete&id=<?php echo $row['id'];?>" class="text-danger">delete entry</a></td>
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