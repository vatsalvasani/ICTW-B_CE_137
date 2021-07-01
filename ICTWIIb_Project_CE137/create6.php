
<?php

require_once "config.php";        

$name = $machinename = $date = $city = $price = "";
$name_err = $machinename_err = $date_err = $city_err = $price_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    

    $input_machinename = trim($_POST["machinename"]);
    if(empty($input_machinename)){
        $machinename_err = "Please enter the machinename.";     
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid machinename.";
    }else{
        $machinename = $input_machinename;
    }
       $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date .";     
    }
    else{
        $date = $input_date;
    }
	   $input_city = trim($_POST["city"]);
    if(empty($input_city)){
        $city_err = "Please enter the city .";     
    }  elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $city_err = "Please enter a valid cityname.";
    }else{
        $city = $input_city;
    }
	  $input_price= trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price .";     
    }
    else{
        $price = $input_price;
    }
	  
    
    if(empty($name_err) && empty($machinename_err) && empty($date_err) && empty($city_err) && empty($price_err) ){
 
        $sql = "INSERT INTO customer (name,machinename , date,city,price) VALUES (?, ?, ?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
			mysqli_stmt_bind_param($stmt, "ssdi", $param_name, $param_machinename, $param_date,$param_city,$param_price);
            
   
            $param_name = $name;
            $param_machinename= $machinename;
            $param_date = $date;
			$param_city = $city;
			$param_price = $price;
            
            
            
            if(mysqli_stmt_execute($stmt)){
               
                header("location: index6.php");
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
	
	<div <?php echo (!empty($name_err)); ?>">
		<label>name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
		<span><?php echo $name_err;?></span>
	</div>
	
	<div <?php echo (!empty($machinename_err)); ?>">
		<label>machinename</label>
		<input type="text" name="machinename" value="<?php echo $machinename; ?>">
		<span><?php echo $machinename_err;?></span>
	</div>
	<div <?php echo (!empty($date_err)); ?>">
		<label>date</label>
		<input type="date" name="date" value="<?php echo $date; ?>">
		<span><?php echo $date_err;?></span>
	</div>
	<div <?php echo (!empty($city_err)); ?>">
		<label>city </label>
		<input type="text" name="city" value="<?php echo $city; ?>">
		<span><?php echo $city_err;?></span>
	</div>
	<div <?php echo (!empty($price_err)); ?>">
		<label>price </label>
		<input type="text" name="price" value="<?php echo $price; ?>">
		<span><?php echo $price_err;?></span>
	</div>
	
	<input type="submit" value="Submit">
	<a href="index6.php">Cancel</a>
</form>
                
</body>
</html>