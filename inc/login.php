<?php
	require_once 'config.php';

	if(isset($_SESSION["user_login"]))
	{
		$errorMsg[]="You are already logged in. You will be redirected to the main page!";
		header("refresh:3; index.php");
	}

	if(isset($_REQUEST['btn_login']))
	{
		$username = strip_tags($_REQUEST["txt_username_email"]);
		$email = strip_tags($_REQUEST["txt_username_email"]);
		$password = strip_tags($_REQUEST["txt_password"]);
		
		if(empty($username) || empty($email) || empty($password)){      
			$errorMsg[] = "An error has occured when validating your form. Please try again.";
		}
		else
		{
			try
			{
				$select_stmt=$db->prepare("SELECT * FROM user WHERE username=:uname OR email=:uemail");
				$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
				$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

				if($select_stmt->rowCount() > 0)
				{
					if($username==$row["username"] OR $email==$row["email"])
					{
						if(password_verify($password, $row["password"]))
						{
							$_SESSION["user_login"] = $row["id"];

							$loginMsg = "You have been successfully logged in. You will be redirected to the main page!";  //user login success message
							header("refresh:3; index.php");
							//redirect("index.php");

						}
						else {
							$errorMsg[]="The credentials you entered don't match our database! Please try again.";
						}
					}
					else {
						$errorMsg[]="The credentials you entered don't match our database! Please try again.";
					}
				}
				else {
					$errorMsg[]="The credentials you entered don't match our database! Please try again.";
				}
			}
			catch(PDOException $e) {
				$e->getMessage();
			}  
		}
	}
?>