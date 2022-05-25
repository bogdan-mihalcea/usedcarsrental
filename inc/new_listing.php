<?php
	require_once "config.php";
	require_once "functions.php";
	
	if (!isset($_SESSION['user_login'])){
		$errorMsg[]='You cannot add a new listing without logging in. Click <a href="login.php">here</a> to go to the log in page!';
	}
	
	if (isset($_REQUEST['btn_add_listing']) && (isset($_SESSION['user_login'])))
	{
		$owner_id = $_SESSION['user_login'];
		
		$car_model = strip_tags($_REQUEST['txt_car_model']);
		$car_type = strip_tags($_REQUEST['sel_car_type']);
		$city = strip_tags($_REQUEST['sel_city']);
		
		$start_date = strip_tags($_POST['sel_date']);
				
		$description = strip_tags($_REQUEST['txt_description']);
  
		if (empty($car_model) || empty($car_type) || empty($city) || empty($start_date) || empty($description)){
			$errorMsg[] = "An error has occured when validating your form. Please try again. {empty fields)";
		}	
		
		////////////////////////////////////////// 
		// HTML Form Validation
		
		/* 
		
		//username
		else if (!preg_match('/^[A-Za-z0-9_]{4,15}$/', $username)) {
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}		
		//password
		else if (!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password)) {
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}
		else if (strlen($password) > 200) {
			$errorMsg[] = "Your password must contain a maximum of 199 characters.";		
		}		
		//e-mail
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}				
		//real_name
		else if (!preg_match('/[a-zA-Z\s]*$/', $real_name)) {
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}
		else if ((strlen($real_name) < 3) || (strlen($real_name) > 49)) {
			$errorMsg[] = "Your full name's length must be between 3 and 49 characters."; 
		}						
		//phone number
		else if (!preg_match('/[+]{1}[0-9]{10,14}/', $phone)) {
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}
		
		*/
		
		//////////////////////////////////////////

		else
		{
			try
			{
				$new_date = format_date($start_date,"add");
				$today_date = date('l jS \of F Y h:i:s A');
    
				$insert_stmt=$db->prepare("INSERT INTO listing (owner_id,car_model,car_type,city,start_date,description,added_date) VALUES
										(:uowner_id,:ucar_model,:ucar_type,:ucity,:ustart_date,:udescription,:uadded_date)");  
    
				if ($insert_stmt->execute(array(':uowner_id' =>$owner_id, 
												':ucar_model'=>$car_model, 
												':ucar_type'=>$car_type,
												':ucity'=>$city,
												':ustart_date'=>$new_date,
												':udescription'=>$description,
												':uadded_date'=>$today_date
												))){
             
				$addListingMsg="Your listing has been added successfully.";
				}

			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
		
	}
?>