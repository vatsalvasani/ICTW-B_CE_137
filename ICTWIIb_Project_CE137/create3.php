
<?php

require_once "config.php";        

$clientname = $date = $totalamount = $peandingamount = "";
$clientname_err = $date_err = $totalamount_err = $peandingamount_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_clientname = trim($_POST["clientname"]);
    if(empty($input_clientname)){
        $clientname_err = "Please enter a clientname.";
    } elseif(!filter_var($input_clientname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $clientname_err = "Please enter a valid clientname.";
    } else{
        $clientname = $input_clientname;
    }
    

    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date.";     
    } 
    else{
        $date = $input_date;
    }
       $input_totalamount = trim($_POST["totalamount"]);
    if(empty($input_totalamount)){
        $totalamount_err = "Please enter the totalamount .";     
    }
    else{
        $totalamount = $input_totalamount;
    }
	   $input_peandingamount = trim($_POST["peandingamount"]);
    if(empty($input_peandingamount)){
        $peandingamount_err = "Please enter the peandingamount .";     
    }  elseif(!filter_var($input_peandingamount, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $peandingamount_err = "Please enter a Valid peandingamount .";
    } else{
        $peandingamount = $input_peandingamount;
    }
    
    if(empty($clientname_err) && empty($date_err) && empty($totalamount_err) && empty($peandingamount_err) ){
 
        $sql = "INSERT INTO peandingpayment (clientname,date , totalamount,peandingamount) VALUES (?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
			mysqli_stmt_bind_param($stmt, "sdii", $param_clientname, $param_date, $param_totalamount,$param_peandingamount);
            
   
            $param_clientname = $clientname;
            $param_date= $date;
            $param_totalamount = $totalamount;
			$param_peandingamount = $peandingamount;
            
            
            
            if(mysqli_stmt_execute($stmt)){
               
                header("location: index3.php");
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
	
	<div <?php echo (!empty($date_err)); ?>">
		<label>Date</label>
		<input type="date" name="date" value="<?php echo $date; ?>">
		<span><?php echo $date_err;?></span>
	</div>
	<div <?php echo (!empty($totalamount_err)); ?>">
		<label>Total Amount</label>
		<input type="text" name="totalamount" value="<?php echo $totalamount; ?>">
		<span><?php echo $totalamount_err;?></span>
	</div>
	<div <?php echo (!empty($peandingamount_err)); ?>">
		<label>peandingamount </label>
		<input type="text" name="peandingamount" value="<?php echo $peandingamount; ?>">
		<span><?php echo $peandingamount_err;?></span>
	</div>
	
	<input type="submit" value="Submit">
	<a href="index3.php">Cancel</a>
</form>
                
</body>
</html>