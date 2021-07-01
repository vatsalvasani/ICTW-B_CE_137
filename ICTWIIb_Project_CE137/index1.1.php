
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

$sql = "SELECT * FROM machinestock";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<table border='2'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>I.D.</th>";
					echo "<th>Name</th>";
					echo "<th>Quantity</th>";
					echo "<th>Price</th>";
					echo "<th>Date Of Manufacturing</th>";
					
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['quantity'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					
					
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

// Close connection
mysqli_close($link);
?>

</body>
</html>