
<?php

require_once "config.php";        

$companyname = $equipment = $amount =  "";
$companyname_err = $equipment_err = $amount_err =  "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_companyname = trim($_POST["companyname"]);
    if(empty($input_companyname)){
        $companyname_err = "Please enter a companyname.";
    } elseif(!filter_var($input_companyname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $companyname_err = "Please enter a valid companyname.";
    } else{
        $companyname = $input_companyname;
    }
    

    $input_equipment = trim($_POST["equipment"]);
    if(empty($input_equipment)){
        $equipment_err = "Please enter the equipment.";     
    } elseif(!filter_var($input_eqipment, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
	$equipment_err = "Please enter a valid equipmentnaame.";}
    else{
        $equipment = $input_equipment;
    }
       $input_amount = trim($_POST["amount"]);
    if(empty($input_amount)){
        $amount_err = "Please enter the amount .";     
    }
     else{
        $amount = $input_amount;
    }
	   
    
    if(empty($companyname_err) && empty($equipment_err) && empty($amount_err) ){
 
        $sql = "INSERT INTO peandingbill (companyname,equipment , amount) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
			mysqli_stmt_bind_param($stmt, "sdii", $param_companyname, $param_equipment, $param_amount);
            
   
            $param_companyname = $companyname;
            $param_equipment= $equipment;
            $param_amount = $amount;
			
            
            
            
            if(mysqli_stmt_execute($stmt)){
               
                header("location: index4.php");
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
	
	<div <?php echo (!empty($companyname_err)); ?>">
		<label>companyname</label>
		<input type="text" name="companyname" value="<?php echo $companyname; ?>">
		<span><?php echo $companyname_err;?></span>
	</div>
	
	<div <?php echo (!empty($equipment_err)); ?>">
		<label>equipment</label>
		<input type="text" name="equipment" value="<?php echo $equipment; ?>">
		<span><?php echo $equipment_err;?></span>
	</div>
	<div <?php echo (!empty($amount_err)); ?>">
		<label>Amount</label>
		<input type="text" name="amount" value="<?php echo $amount; ?>">
		<span><?php echo $amount_err;?></span>
	</div>
	
	<input type="submit" value="Submit">
	<a href="index4.php">Cancel</a>
</form>
                
</body>
</html>