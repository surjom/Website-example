<?php
include 'dbconfig.php';
	
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO userinfo (name, email, password) VALUES ('$name', '$email', '$password')";
	$result = $conn->query($sql);
	header("Location: shop1.php");
?>