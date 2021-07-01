<?php

require_once "config.php";
session_start(); 
 

	if(isset($_SESSION['user'])){
        $uname = $_SESSION['user'];
		$id = $link -> real_escape_string($_SESSION['userid']);
        $sql = "Select role_id from user_in_roles where user_id='$id'";
		if ($result = $link -> query($sql)) {
		while($row = $result->fetch_assoc()) {
		$role_id = $row['role_id'];
		$sql1 = "Select role_name from roles where id='$role_id'";
		$result1 = $link -> query($sql1); 
		while($row1 = $result1->fetch_assoc()) {
		$user_role = $row1['role_name'];
		if($user_role == "customer")
		{
			header("Location:website1.php");
		}
		else if($user_role == "worker")
		{
		
			header("Location:website4.php");
		}
		else if($user_role == "owner")
		{
			
			header("Location:website2.php"); 
		}
		else if($user_role == "manager")
		{
			
			header("Location:website3.php"); 
		}
		
		}
		
		
  }
		
		$result -> free_result();
}
}
   
    mysqli_close($link);
?>
 