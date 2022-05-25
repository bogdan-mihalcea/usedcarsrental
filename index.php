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
		<title>Used Cars Rental (UCR) - Rent a used car today!</title>
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

			<div class="card shadow">
				<div class="card-header">
					Welcome to Used Cars Rental!
				</div>
			
				<div class="card-body">
					<h5 class="card-title">
						Ready to start your adventure in Romania?
					</h5>
					<p class="card-text">
						Start by using our search form!
					</p>
	
					<form method="post" action="search.php">
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

					<br>

					<h5 class="card-title">
						Why rent a car with Used Cars Rental?
					</h5>
					<p class="card-text">
						<i class="fas fa-check-square text-muted"></i> 
						Romanian biggest online car rental market, 25 local suppliers connected.
					</p>
					<p class="card-text">
						<i class="fas fa-check-square text-muted"></i> 
						You get the right price, honest price.
					</p>
					<p class="card-text">
						<i class="fas fa-check-square text-muted"></i> 
						Immediate confirmation and no credit card required for reservation.
					</p>
					<p class="card-text">
						<i class="fas fa-check-square text-muted"></i> 
						19 Years car rental experience.
					</p>
					<p class="card-text">
						<i class="fas fa-check-square text-muted"></i> 
						Quality service control - customers reviews and feedback.
					</p>
					<p class="card-text">
						Behind the wheel of a rental car from Used Cars Rental, you'll see lots, enjoy a safe travel on the realms of the legendary Dracula. Reliable cars, cheap car hire rates and professional rent a car services in Bucharest with Used Cars Rental.
					</p>

				</div>
			</div>
		
			<br>
			
			<div class="card shadow">
				<div class="card-header">
					Popular Car Rental locations in Romania
				</div>
				<div class="card-body">
					<h5 class="card-title">
						Discover the best of Romania with cheap car rental from Used Cars Rental!
					</h5>
					<p class="card-text">
						Rent a car in Romania is the ideal way to visit this beautiful country. Romania has a variety of landscapes ranging from vast forests to mountain ranges and to bustling port cities like Constanta.
					</p>
				</div>
  
				<div class="container">
					<div class="card-deck">
						<div class="card shadow">
								<img src="img/thumb_bucharest.jpg" class="card-img-top" alt="...">
								<div class="card-body">
								<h5 class="card-title">Bucharest</h5>
								<p class="card-text">If you rent a car in Bucharest, you can get around and make the most of your Romanian experience. Situated ...</p>
							
							</div>
						</div>
						
						<div class="card shadow">
								<img src="img/thumb_brasov.jpg" class="card-img-top" alt="...">
								<div class="card-body">
								<h5 class="card-title">Brasov</h5>
								<p class="card-text">If you've planned on visiting Romania and Brasov is where you're staying, you have made a fabulous choice. ...</p>
							
							</div>
						</div>
						
						<div class="card shadow">
								<img src="img/thumb_bacau.jpg" class="card-img-top" alt="...">
								<div class="card-body">
								<h5 class="card-title">Bacau</h5>
								<p class="card-text">If you hire a luxury car in Bacau, you can get around wherever your destination may be. Bacau is one of the...</p>
							
							</div>
						</div>
					</div>

					<br>

					<div class="card-deck">
						<div class="card shadow">
							<img src="img/thumb_sibiu.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Sibiu</h5>
								<p class="card-text">Hermannstadt by its old name, Sibiu was the largest and the wealthiest citadel established by the Saxons in...</p>
								
							</div>
						</div>
						<div class="card shadow">
							<img src="img/thumb_timisoara.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Timisoara</h5>
								<p class="card-text">Timisoara is the largest city in western Romania. By its positioning on the map, it has gone through many c...</p>
								
							</div>
						</div>
						<div class="card shadow">
							<img src="img/thumb_iasi.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Iasi</h5>
								<p class="card-text">Situated in the north-eastern part of Romania, Iasi is the most important city in Moldavia. From a cultural...</p>
								
							</div>
						</div>
					</div>
				</div>

				<br>

			</div>
			
			<br>


			<div class="card shadow">
				<div class="card-header">
					Popular FAQs about hiring a car in Romania
				</div>
				<div class="card-body">
					<h5 class="card-title">How old do you need to be to rent a car in Romania?</h5>
					<p class="card-text">The minimum age to rent a car in Romania must be at least 21 years old. Check your car rental provider if you are under the age of 25. Drivers must hold a valid national or international driver's license issued at least one year ago. The license should match the class of the rental car.</p>
				</div>
				<div class="card-body">
					<h5 class="card-title">How much does it cost car rental in Romania?</h5>
					<p class="card-text">On average a rental car in Romania costs 23 Euro per day. Average daily price per day is different depending on the month of the year.</p>
				</div>
				<div class="card-body">
					<h5 class="card-title">What you need to know to get a cheap car hire deal?</h5>
					<p class="card-text">Car hire companies operate in a similar way to airlines, meaning you’ve got to book online early, for the cheapest car hire Romania deals. Renting in February ­compared with August can bring down the average one-week rental by 100 Euro. If you are yet to book this summer’s trip don’t hang around if you are going to a popular destination in Romania.</p>
				</div>
				<div class="card-body">
					<h5 class="card-title">Can I have an additional driver when I rent a car in Romania?</h5>
					<p class="card-text">Will you be the only driver? Thinking of sharing the driving? Used Cars Rental offers car rental deals in Romania that allow you to sign on an additional driver at no extra cost. Some of our car rental partners are offering you an opportunity to add more drivers on your rental contract for free! Some firms add a second driver for a charge €5-€6 a day.</p>
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