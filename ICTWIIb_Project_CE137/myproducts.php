
<?php
$user="Mr.Ramesh Savani";
$machine_name="Pouch Machine";
$buydate="2021-03-22";
$firstservice="2022-05-09";
$secondservice="2022-11-09";
$city="Surat";
$price="500000";
$deliverydate="2021-05-09";
$status="delivered";
?>
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
table{
	width:500px;
	border:2px solid lightblue;
}
th,td{
border:2px solid lightblue;

}
</style>
</head>
<body>

<center>
<table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<tr>
<td>
Client Name:
</td>
<td>
<?php 
echo $user;
?>
</td>
</tr>
<tr>
<td>
City :
</td>
<td>
<?php 
echo $city;
?>
</td>
</tr>
<tr>
<td>
Product Name:
</td>
<td>
<?php 
echo $machine_name;
?>
</td>
</tr>
<tr>
<td>
Buy Date:
</td>
<td>
<?php 
echo $buydate;
?>
</td>
</tr>
<tr>
<td>
Price :
</td>
<td>
<?php 
echo $price;
?>
</td>
</tr>
<tr>
<td>
Delivery Date:
</td>
<td>
<?php 
echo $deliverydate;
?>
</td>
</tr>
<tr>
<td>
First Service :
</td>
<td>
<?php 
echo $firstservice;
?>
</td>
</tr>
<tr>
<td>
Second Service:
</td>
<td>
<?php 
echo $secondservice;
?>
</td>
</tr>
<tr>
<td>
Delivery Status:
</td>
<td>
<?php 
echo $status;
?>
</td>
</tr>

</table>
</center>
</body>
</html>