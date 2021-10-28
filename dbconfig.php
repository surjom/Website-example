<?php
$conn = mysqli_connect("localhost","root","","pms") or die("server connection Failed".mysqli_error());

if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
?>