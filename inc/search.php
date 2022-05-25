<?php
	require_once 'config.php';
	require_once 'functions.php';

	if(isset($_REQUEST['btn_search']))
	{
		$start_date = strip_tags($_POST['sel_date']);
		$car_type = strip_tags($_REQUEST["sel_car_type"]);
		$city = strip_tags($_REQUEST["sel_city"]); 
		
		if(empty($start_date) || empty($car_type) || empty($city)){      
			$errorMsg[] = "An error has occured when validating your form. Please try again. (empty fields)";
		}
		else
		{
			try
			{	
				$compare_date = format_date($start_date,"add");
				//$select_stmt=$db->prepare("SELECT owner_id, car_model, car_type, city, start_date, description, added_date FROM listing WHERE car_type = '$car_type' AND city = '$city' AND start_date <= '$compare_date' ORDER BY id DESC;");
				$select_stmt=$db->prepare("
										SELECT listing.owner_id, listing.car_model, listing.car_type, listing.city, listing.start_date, listing.description, listing.added_date, user.real_name, user.email, user.phone_number
										FROM user 
										INNER JOIN listing ON user.id=listing.owner_id
										WHERE listing.car_type = '$car_type' AND listing.city = '$city' AND listing.start_date >= '$compare_date' 
										ORDER BY listing.id DESC;
										");
				$select_stmt->execute();
				$data=$select_stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(PDOException $e) {
				$e->getMessage();
			}  
		}
	}
?>