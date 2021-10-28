<?php
session_start();
include 'dbconfig.php';
	
$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT * FROM userinfo WHERE email='$email' AND password='$password' ";
$result = mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);	
if (!$row = $result->fetch_assoc())
{

	header("Location:userlogin.php?err=1");
	echo "you have enterd an incorrect password";
	exit();
}	
else
{
	$_SESSION['id'] = $row['name'];
	header("Location: shop1.php");
}

?>