<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>
</title>
<style>
body{
background-image: url('gajanand.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
table,th,td{
border:2px solid lightblue;
}
</style>
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<table>
<form action="inquiery.php" method="POST">
<tr><td>Name</td><td><input type="text" name="name"></td></tr><br>
<tr><td>Date</td><td><input type="date" name="date"></td></tr><br>
<tr><td>E-mail</td><td><input type="email" name="email"></td></tr><br>
<tr><td>Mobile No.</td><td><input type="mobile" name="mobile"></td></tr><br>
<tr><td>Machine Name</td><td><input type="text" name="machinename"></td></tr><br>
<tr><td><input type="submit" name="submit"></td></tr>
</form>
</table>
</center>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$date=$_POST['date'];
	$machinename=$_POST['machinename'];
	$result=mysqli_query($link,"INSERT into query values('','$name','$email','$mobile','$date','$machinename')");
	
	if($name=="" || $email=="" || $mobile=="" || $date=="" || $machinename=="")
	{echo "All Fields Are Mandatory"; }
else if($result)
	{
		echo "SUCCESSFULLY SUBMITTED OUR MEMBER SHORTLY MAIL THIS MACHINE QUATATION ON YOUR EMAIL ID.";
	}
	else{
		echo "Something Went Wrong You Can Directly Contact US On Our Official Email Id.";
	}
}
?>
</body>
</html>