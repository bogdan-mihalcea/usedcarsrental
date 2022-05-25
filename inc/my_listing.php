<?php
	require_once 'config.php';
	require_once 'functions.php';
	
	if(isset($_REQUEST['action']) && isset($_REQUEST['id']))
	{
		$request_id = strip_tags($_REQUEST['id']);
		$action = strip_tags($_REQUEST['action']);
		
		$verify_ownership_stmt = $db->prepare("SELECT listing.id FROM listing INNER JOIN user ON listing.owner_id = user.id");
		$verify_ownership_stmt->execute();
				
		$verify=$verify_ownership_stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach($verify as $verify_row){
			if ($request_id == $verify_row['id'])
				$ownership = true;
		}
			
		if(isset($_SESSION["user_login"]) && ($ownership))
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
			$errorMsg[] = "An error has occured.";
		}
	}
	if (isset($_SESSION["user_login"]))
	{
		try
		{	
			$user_id=$_SESSION['user_login'];
			$select_stmt=$db->prepare("SELECT * FROM listing WHERE '$user_id'=owner_id");
			$select_stmt->execute();
			$data=$select_stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e) {
			$e->getMessage();
		}  			

	}
	else
	{
		$errorMsg[] = "An error has occured.";
	}
?>