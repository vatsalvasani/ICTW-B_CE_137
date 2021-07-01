
<?php

require_once "config.php";        

$clientname = $machinename = $deliverydate = $city = "";
$clientname_err = $machinename_err = $deliverydate_err = $city_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_clientname = trim($_POST["clientname"]);
    if(empty($input_clientname)){
        $clientname_err = "Please enter a clientname.";
    } elseif(!filter_var($input_clientname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $clientname_err = "Please enter a valid clientname.";
    } else{
        $clientname = $input_clientname;
    }
    

    $input_machinename = trim($_POST["machinename"]);
    if(empty($input_machinename)){
        $machinename_err = "Please enter the machinename.";     
    } elseif(!filter_var($input_clientname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $machinename_err = "Please enter a Valid machine name.";
    } else{
        $machinename = $input_machinename;
    }
       $input_deliverydate = trim($_POST["deliverydate"]);
    if(empty($input_deliverydate)){
        $deliverydate_err = "Please enter the deliverydate.";     
    }
     else{
        $deliverydate = $input_deliverydate;
    }
	   $input_city = trim($_POST["city"]);
    if(empty($input_city)){
        $city_err = "Please enter the city name.";     
    }  elseif(!filter_var($input_city, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $city_err = "Please enter a Valid city name.";
    } else{
        $city = $input_city;
    }
    
    if(empty($clientname_err) && empty($machinename_err) && empty($deliverydate_err) && empty($city_err) ){
 
        $sql = "INSERT INTO peandingorders (clientname,machinename , deliverydate,city) VALUES (?, ?, ?,?)";
	
        if($stmt = mysqli_prepare($link, $sql)){
            
            
			mysqli_stmt_bind_param($stmt, "ssds", $param_clientname, $param_machinename, $param_deliverydate,$param_city);
            
   
            $param_clientname = $clientname;
            $param_machinename= $machinename;
            $param_deliverydate = $deliverydate;
			$param_city = $city;
            
            
		
            if(mysqli_stmt_execute($stmt)){
               
                header("location: index2.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         

        mysqli_stmt_close($stmt);
    }
    
  
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Record</title>
</head>
<body>
<h2>Create Record</h2>

<p>Please fill this form and submit to add student record to the database.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	
	<div <?php echo (!empty($clientname_err)); ?>">
		<label>clientname</label>
		<input type="text" name="clientname" value="<?php echo $clientname; ?>">
		<span><?php echo $clientname_err;?></span>
	</div>
	
	<div <?php echo (!empty($machinename_err)); ?>">
		<label>Machine name</label>
		<input type="text" name="machinename" value="<?php echo $machinename; ?>">
		<span><?php echo $machinename_err;?></span>
	</div>
	<div <?php echo (!empty($deliverydate_err)); ?>">
		<label>Second sessional marks</label>
		<input type="date" name="deliverydate" value="<?php echo $deliverydate; ?>">
		<span><?php echo $deliverydate_err;?></span>
	</div>
	<div <?php echo (!empty($city_err)); ?>">
		<label>City Name</label>
		<input type="text" name="city" value="<?php echo $city; ?>">
		<span><?php echo $city_err;?></span>
	</div>
	
	<input type="submit" value="Submit">
	<a href="index2.php">Cancel</a>
</form>
                
</body>
</html>