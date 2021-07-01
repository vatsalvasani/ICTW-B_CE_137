<?php
require_once "config.php";

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(!empty($username) && !empty($password))
		{
		$result=$link->query("select username from owner where username='$username' and password='$password' ");
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
		
			echo "Successfully Logged in.Mr.";
			echo  $username;
			
		}
		else
		{
			echo "Incorrect Ownername Or Password";
			exit();
		}
		}
	else
		{
			echo "Something Went Wrong...";
			exit();
		}
}
?>
<html>
<head>
<style>
body{
background-image: url('logo.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
table,th,td{
border:2px solid white;
}
</style>
</head>

<h1><a href="index0.php" style="color:white;">Total Stock Of Machine Equipment. </a></h1>
<br>
<h1><a href="index1.php" style="color:white;">Total Ready Machines. </a></h1>
<br>
<h1><a href="index2.php" style="color:white;">Total Pending Orders.</a></h1>
<br>
<h1><a href="index3.php" style="color:white;">Total Pending Payment.</a></h1>
<br>
<h1><a href="index4.php" style="color:white;">Total Pending Bills.</a></h1>
<br>
<h1><a href="index5.php" style="color:white;">Employee list.</a></h1>
<br>
<h1><a href="index6.php" style="color:white;">Customer list.</a></h1>


</html>