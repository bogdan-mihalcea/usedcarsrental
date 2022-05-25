<?php
	require_once 'config.php';
	require_once 'functions.php';	

	if(isset($_SESSION["user_login"]))
	{	
		if(isset($_REQUEST['btn_update_email']))
		{
			$email = strip_tags($_POST['update_email_txt']);
			
			if(empty($email)){
				$errorMsg[] = "An error has occured when validating your form. Please try again. (empty fields)";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errorMsg[] = "An error has occured when validating your form. Please try again.";
			}
			else
			{
				try
				{	
					$id=$_SESSION["user_login"];
					$select_stmt=$db->prepare("update user set email='$email' where id='$id'");
					$select_stmt->execute();
					$successMsg[] = "Your e-mail was changed successfully!";
				}
				catch(PDOException $e) {
					$e->getMessage();
				}  
			}
		}
		else if(isset($_REQUEST['btn_update_phone']))
		{
			$phone = strip_tags($_POST['update_phone_txt']);
			
			if(empty($phone)){
				$errorMsg[] = "An error has occured when validating your form. Please try again. (empty fields)";
			}
			else if (!preg_match('/[+]{1}[0-9]{10,14}/', $phone)) {
				$errorMsg[] = "An error has occured when validating your form. Please try again.";
			}
			else
			{
				try
				{	
					$id=$_SESSION["user_login"];
					$select_stmt=$db->prepare("update user set phone_number='$phone' where id='$id'");
					$select_stmt->execute();
					$successMsg[] = "Your phone number was changed successfully!";
				}
				catch(PDOException $e) {
					$e->getMessage();
				}  
			}
		}	
		else if(isset($_REQUEST['btn_update_real_name']))
		{
			$real_name = strip_tags($_POST['update_real_name_txt']);
			
			if(empty($real_name)){
				$errorMsg[] = "An error has occured when validating your form. Please try again. (empty fields)";
			}
			else if (!preg_match('/[a-zA-Z\s]*$/', $real_name)) {
				$errorMsg[] = "An error has occured when validating your form. Please try again.";
			}
			else if ((strlen($real_name) < 3) || (strlen($real_name) > 49)) {
				$errorMsg[] = "Your full name's length must be between 3 and 49 characters."; 
			}		
			else
			{
				try
				{	
					$id=$_SESSION["user_login"];
					$select_stmt=$db->prepare("update user set real_name='$real_name' where id='$id'");
					$select_stmt->execute();
					$successMsg[] = "Your name was changed successfully!";
				}
				catch(PDOException $e) {
					$e->getMessage();
				}  
			}
		}	
	}
	else
	{
		$errorMsg[] = "You are not logged in.";
	}
?>