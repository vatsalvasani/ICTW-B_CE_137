
<?php

require_once "config.php";        

$name = $post = $date = $salary = "";
$name_err = $post_err = $date_err = $salary_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    

    $input_post = trim($_POST["post"]);
    if(empty($input_post)){
        $post_err = "Please enter the post.";     
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid post.";
    }else{
        $post = $input_post;
    }
       $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date .";     
    }
    else{
        $date = $input_date;
    }
	   $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary .";     
    }  
    else{
        $salary = $input_salary;
    }
    
    if(empty($name_err) && empty($post_err) && empty($date_err) && empty($salary_err) ){
 
        $sql = "INSERT INTO employee (name,post , date,salary) VALUES (?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            
			mysqli_stmt_bind_param($stmt, "ssdi", $param_name, $param_post, $param_date,$param_salary);
            
   
            $param_name = $name;
            $param_post= $post;
            $param_date = $date;
			$param_salary = $salary;
            
            
            
            if(mysqli_stmt_execute($stmt)){
               
                header("location: index5.php");
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
		<label>name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
		<span><?php echo $name_err;?></span>
	</div>
	
	<div <?php echo (!empty($post_err)); ?>">
		<label>post</label>
		<input type="post" name="post" value="<?php echo $post; ?>">
		<span><?php echo $post_err;?></span>
	</div>
	<div <?php echo (!empty($date_err)); ?>">
		<label>date</label>
		<input type="date" name="date" value="<?php echo $date; ?>">
		<span><?php echo $date_err;?></span>
	</div>
	<div <?php echo (!empty($salary_err)); ?>">
		<label>salary </label>
		<input type="text" name="salary" value="<?php echo $salary; ?>">
		<span><?php echo $salary_err;?></span>
	</div>
	
	<input type="submit" value="Submit">
	<a href="index5.php">Cancel</a>
</form>
                
</body>
</html>