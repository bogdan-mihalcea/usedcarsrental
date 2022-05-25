<?php
	require_once "inc/config.php";
	
	if(isset($_SESSION['user_login'])){
		$errorMsg[]="You can't create another account while you are logged in. You will be redirected to the main page!";
		header("refresh:3 index.php");
	}

	if (isset($_REQUEST['btn_register']))
	{
		$username = strip_tags($_REQUEST['txt_username']);
		$email = strip_tags($_REQUEST['txt_email']);
		$password = strip_tags($_REQUEST['txt_password']);
		
		$real_name = strip_tags($_REQUEST['txt_real_name']); 
		$phone = strip_tags(($_REQUEST['txt_phone']), '+'); 
  
		if (empty($username) || empty($email) || empty($password) || empty($real_name) || empty($phone)){
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}
		
		////////////////////////////////////////// 
		// HTML Form Validation
		
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
		
		//////////////////////////////////////////

		else
		{ 
			try
			{ 		
				$select_stmt = $db->prepare("SELECT COUNT(*) FROM user WHERE username=:uname OR email=:uemail");
				$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
				if ($select_stmt->fetchColumn()) {
					$errorMsg[] = "Username or e-mail is already in use!"; 
				}
				else // if(!isset($errorMsg))
				{
					$new_password = password_hash($password, PASSWORD_DEFAULT);
    
					$insert_stmt=$db->prepare("INSERT INTO user (username,email,password,real_name,phone_number) VALUES
											(:uname,:uemail,:upassword,:ureal_name,:uphone_number)");    
    
					if ($insert_stmt->execute(array( ':uname' =>$username, 
													':uemail'=>$email, 
													':upassword'=>$new_password,
													':ureal_name'=>$real_name,
													':uphone_number'=>$phone
													))){
             
					$registerMsg="Your account has been registered successfully! You can now log in.";
					}
				}
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}
?>