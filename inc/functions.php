<?php
	require_once 'config.php';
	
	function format_date($date,$type)
	{
		if ($type=="add")
		{
			$newDate = date("Y-m-d", strtotime($date));  
			return $newDate;
		}
		else if ($type="show")
		{
			$newDate = date("d-m-Y", strtotime($date));  
			return $newDate;
		}
	}
	
	function verify_admin($id){
		
		global $db;
		
		$select_stmt=$db->prepare("SELECT * FROM user WHERE id=:uid AND admin_access=1");
		$select_stmt->execute(array(':uid'=>$id));
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);		
		
		if($select_stmt->rowCount()>0)
			return true;
		else return false;
	}
?>