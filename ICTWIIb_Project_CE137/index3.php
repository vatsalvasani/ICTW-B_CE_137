
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

$sql = "SELECT * FROM peandingpayment";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<table border='2'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>I.D.</th>";
					echo "<th>Client Name</th>";
					echo "<th>Date Of Buy</th>";
					echo "<th>Total Amount</th>";
					echo "<th>Peanding Amount</th>";
					
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['clientname'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					echo "<td>" . $row['totalamount'] . "</td>";
					echo "<td>" . $row['peandingamount'] . "</td>";
					
					echo "<td>";
						
						
						echo "<a href='delete3.php?id=" . $row['id'] . "'>Delete Record</a>";
						echo "&nbsp;";
						echo "<a href='create3.php'>Create Record</a>";
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