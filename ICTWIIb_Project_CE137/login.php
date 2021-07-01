<?php

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $uname = $link -> real_escape_string($_POST['username']);
		$pass = $link -> real_escape_string($_POST['password']);
        $sql = "Select * from users where username='$uname' and password='$pass'";
	
		if ($result = $link -> query($sql)) {
		session_start();
		while($row = $result->fetch_assoc()) {
		$_SESSION['user'] = $row["username"];
		$_SESSION['userid'] = $row["id"];
		header("Location:profile.php");
  }
		
		
		$result -> free_result();
}

   
    mysqli_close($link);
}
?>




<html>
<head>
<style>
body{
background-image: url('picture.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;

}

table,th,td{
border:2px solid white;
}
</style>
</head>
<body>

<br>
<br>
<center><img src="gajanand2.png" height="200px" width="200px"></image></center>
<br>
<br>
<br>



<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<table>

<tr>
<td STYLE="COLOR:white;"><font face="comic sans MS">NAME. :</font></td>
<td colspan="3"><input type="text" name='username'/>
</td>
</tr>
<tr>
<td STYLE="COLOR:white;"><font face="comic sans MS">PASSWORD. :</font></td>
<td colspan="3"><input type="password" name='password'/>
</td>
</tr>
<tr>
<td>
<center><input type="submit"  value="LOG IN"/></center>
</td>


<td>
<a href="website.php" style="color:darkgreen;"><b>EXPLORE WEBSITE</b></a>
</td>


</table>
</form>
</center>
<BR>
<CENTER><P STYLE="COLOR:red;"><b><font face="arial" SIZE="4PX">NOTE : <u>Only Our Customer Or Employee Can Login Here.</u></font></b></P></CENTER></font></b></P></CENTER>
</body>
</html>