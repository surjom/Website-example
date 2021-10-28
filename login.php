<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>

<html>



<head>
	
	<style type="text/css">
		.pk {
  color:#02f6ff;

}
	</style>
	<meta charset="UTF_8">
	<div class="pk">

<title>SM ONLINE PHARMACY SHOP</title>
     <center><p style="color:#47d1f7;font-size:50px;font-style:normal;font-weight:bold;">SM MEDICINE SHOP</p></center>  
  </head>
<table border="2" align="center" width="100%" cellspacing="10" cellpadding="15" background="medicine2.jpg" style="background-color: #2f5141;"><tr bgcolor="#77fffa"><th><a style="color: #001911;" href="index.php">HOME</a></th>
<th><a style="color: #001911;" href="profile.php">PROFILE</a></th>
<th> <a style="color: #001911;" href="userlogin.php">LOGIN/REGISTER </a></th>
<th> <a style="color: #001911;" href="aboutus.php">ABOUT US </a></th>
<th> <a style="color: #001911;" href="#"> BLOG</a></th>
</tr>
</table></div>
<title>Admin Login</title>
</head>
<body bgcolor="linear-gradient(#f7620c, #2594fc);">
<center>
<div id="header">
<h1>ADMIN LOGIN</h1>
      <form action="login.php" method="post" >
		 <table><tr><th>User_name</th><td><input type="text" name="username" placeholder="Username" required></td></tr>
        <tr><th>Password</th><td><input type="password" name="password" required></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" name="login" value="LOGIN"></td></tr>
	 </table> </form>
   </div>
</center>
<div id="footer" align="Center"> SM MEDICINE SHOP 2018. Copyright All Rights Reserved</div>
</div>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$qry="SELECT * FROM `admin` WHERE `username` = '$username' AND `password` ='$password'";
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);
if($row <1)
{
	?>
	<script>
		alert('username or password not match !!');
	window.open('login.php','_self');
	</script>
	<?php
}
else
{

	$data = mysqli_fetch_assoc($run);
	
	$id = $data['id'];

	$_SESSION['uid']=$id;
	header('location: admin/admindash');
}

}
?>