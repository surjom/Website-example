<?php 
$dbc=mysqli_connect('localhost','root','') or die("could not connect".mysqli_error());
$db=mysqli_select_db($dbc,"pms") or die("Could not connect to database");
?> 