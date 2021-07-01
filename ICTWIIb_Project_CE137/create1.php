
<?php

require_once "config.php";        

$name = $quantity = $price = $date = "";
$name_err = $quantity_err = $price_err = $date_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    

    $input_quantity = trim($_POST["quantity"]);
    if(empty($input_quantity)){
        $quantity_err = "Please enter the quantity.";     
    } elseif(!ctype_digit($input_quantity)){
        $quantity_err = "Please enter a positive integer value.";
    } else{
        $quantity = $input_quantity;
    }
       $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price .";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }
	   $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date.";     
    } 
    else{
        $date = $input_date;
    }
	  
    
    if(empty($name_err) && empty($quantity_err) && empty($price_err) && empty($date_err) ){
 
        $sql = "INSERT INTO machinestock (name,quantity , price,date) VALUES (?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
			mysqli_stmt_bind_param($stmt, "siid", $param_name, $param_quantity, $param_price,$param_date);
            
   
            $param_name = $name;
            $param_quantity= $quantity;
            $param_price = $price;
			$param_date = $date;
            
            
            if(mysqli_stmt_execute($stmt)){
               
                header("location: index1.php");
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
	
	<div <?php echo (!empty($name_err)); ?>">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
		<span><?php echo $name_err;?></span>
	</div>
	
	<div <?php echo (!empty($quantity_err)); ?>">
		<label>Quantity</label>
		<input type="text" name="quantity" value="<?php echo $quantity; ?>">
		<span><?php echo $quantity_err;?></span>
	</div>
	<div <?php echo (!empty($price_err)); ?>">
		<label>Price</label>
		<input type="text" name="price" value="<?php echo $price; ?>">
		<span><?php echo $price_err;?></span>
	</div>
	<div <?php echo (!empty($date_err)); ?>">
		<label>Date</label>
		<input type="date" name="date" value="<?php echo $date; ?>">
		<span><?php echo $date_err;?></span>
	</div>
	<input type="submit" value="Submit">
	<a href="index1.php">Cancel</a>
</form>
                
</body>
</html>