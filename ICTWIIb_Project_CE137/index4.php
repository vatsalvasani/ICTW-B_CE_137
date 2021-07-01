
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
	
<style>
body{
background-image: url('gajanand.png');
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

<?php

require_once "config.php";

$sql = "SELECT * FROM peandingbill";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<table border='2'color='black'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>I.D.</th>";
					echo "<th>Company Name</th>";
					echo "<th>Name of Equipment</th>";
					echo "<th>Price</th>";
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['companyname'] . "</td>";
					echo "<td>" . $row['equipment'] . "</td>";
					echo "<td>" . $row['amount'] . "</td>";
					
					echo "<td>";
						
						
						echo "<a href='delete4.php?id=" . $row['id'] . "'>Delete Record</a>";
						echo "&nbsp;";
						echo "<a href='create4.php'>Create Record</a>";
					echo "</td>";
				echo "</tr>";
			}
			echo "</tbody>";                            
		echo "</table>";
		
		mysqli_free_result($result);
	} else{
		echo "<p><em>No records were found.</em></p>";
	}
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>

</body>
</html>