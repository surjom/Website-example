<?php

$con=mysqli_connect('localhost','root','','pms'); 
$mname=$_POST['name'];
$sql="insert into purchased(mname)values('$mname')";
mysqli_query($con, $sql);
header('location: cart.php');
?>