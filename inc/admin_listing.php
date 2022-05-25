<?php
	require_once 'config.php';
	require_once 'functions.php';
	
	if(isset($_REQUEST['action']) && isset($_REQUEST['id']))
	{
		$request_id = strip_tags($_REQUEST['id']);
		$action = strip_tags($_REQUEST['action']);
		
		if(isset($_SESSION["user_login"]))
		{
			if (verify_admin($_SESSION['user_login'])==true)
			{
				if (($action == "delete") && is_numeric($request_id))
				{
					try
					{	
						$delete_stmt=$db->prepare("DELETE FROM listing WHERE id = $request_id");
						if ($delete_stmt->execute())
						{        
							$successMsg="The entry with id <strong>$request_id</strong> was deleted successfully.";
						}	
					}
					catch(PDOException $e) {
						$e->getMessage();
					} 
				}
			}
			else
			{
				$errorMsg[] = "You are not an Administrator.";
			}
		}
		else
		{
			$errorMsg[] = "You are not logged in.";
		}
	}	

	if(isset($_SESSION["user_login"]))
	{
		if (verify_admin($_SESSION['user_login'])==true)
		{
			try
			{	
				$select_stmt=$db->prepare("SELECT * FROM listing");
				$select_stmt->execute();
				$data=$select_stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(PDOException $e) {
				$e->getMessage();
			}  			
		}
		else
		{
			$errorMsg[] = "You are not an Administrator.";
		}
	}
	else
	{
		$errorMsg[] = "You are not logged in.";
	}
?>