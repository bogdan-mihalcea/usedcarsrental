		<?php
			require_once 'config.php';
			require_once 'functions.php';

			if (isset($_SESSION['user_login'])){
				$id = $_SESSION['user_login'];
			
				$select_stmt = $db->prepare("SELECT * FROM user WHERE id=:uid");
				$select_stmt->execute(array(":uid"=>$id));
				
				$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
			}
		?>

		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm p-2 mb-4 rounded border border-secondary">
			<a class="navbar-brand" href="index.php"><img src="img/navbar_logo.png"></img></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="search.php">Search cars</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if(!isset($_SESSION['user_login'])){echo "disabled";}?>" href="new_listing.php">Add Listing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>" href="register.php">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if(isset($_SESSION['user_login'])){echo "disabled";}?>" href="login.php">Log in</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>			
				</ul>
				
				<div class="dropdown">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i> Account
					</button>
					<div class="dropdown-menu dropdown-menu-right">
					
						<?php
							if(isset($_SESSION['user_login'])){
						?>					
					<div class="table-responsive">	
						<table class="table table-striped">
						<tbody>
							<tr>
							<th>Welcome, <?php echo $row['real_name']; ?></th>
							</tr>
							<?php 
								if (verify_admin($id)==true){
							?>
									<tr>
									<th><a href="admin.php" class="text-info">Admin Page</a></th>
									</tr>
							<?php
								}
							?>							

							<tr>
							<th><a href="profile.php">Profile</a></th>
						
							</tr>
							<tr>
							<th><a href="my_listing.php">My Listings</a></th>
						
							</tr>
							<tr>
							<th><a href="logout.php">Log out</a></th>
						
							</tr>	
						</tbody>
						</table>
					</div>
						<?php	
						} else {
						?>

						<form method="post" class="px-4 py-3" action="login.php">
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Username or E-mail</label>
								<input type="text" class="form-control" name="txt_username_email" placeholder="username or e-mail" required/>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormPassword1">Password</label>
								<input type="password" name="txt_password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'The password needs to meet the following rules: at least 1 uppercase character, 1 lowercase, 1 digit/special character and a min. of 8 characters.' : '');" placeholder="your password" required/>
							</div>
							<!--
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="dropdownCheck">
								<label class="form-check-label" for="dropdownCheck">
								Remember me
								</label>
							</div>
							-->
							<button type="submit" name="btn_login" class="btn btn-secondary">Log in</button>
						</form>
		
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="register.php">New around here? Sign up</a>
						<a class="dropdown-item" href="#">Forgot password?</a>							
						<?php
						}
						?>

					</div>
				</div>	
			</div>
		</nav>	
