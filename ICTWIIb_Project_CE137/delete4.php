
<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "config.php";
   
    $sql = "DELETE FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        
        $param_id = trim($_POST["id"]);
        
     
        if(mysqli_stmt_execute($stmt)){
            
            header("location: index4.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    
    mysqli_stmt_close($stmt);
    

    mysqli_close($link);
} else{
   
    if(empty(trim($_GET["id"]))){
       
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Record</title>
</head>
<body>
    
	<div>
		<h1>Delete Record</h1>
	</div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div>
			<input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
			<p>Are you sure you want to delete this record?</p><br>
			<p>
				<input type="submit" value="Yes">
				<a href="index4.php">No</a>
			</p>
		</div>
	</form>
             

</body>
</html>