<?php
$conn=mysqli_connect("localhost","root","","pms");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<link rel="stylesheet" href="css/style3.css"> 
<style>p {
    background-color: #006a84;
            }
     p {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
  }
  .pk {
        color:#02f6ff;
        font-size: 15px;
            }
          </style>
<center><p style="color:#47d1f7;font-size:50px;font-style:normal;font-weight:bold;">SM MEDICINE SHOP</p> 
</head>
<body>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];

  $sql_u="SELECT * FROM `userinfo` WHERE `email`='$email'";
  $res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
  if  (mysqli_num_rows($res_u) > 0)
  {
    $email_error = "email already exist";
    echo "email already exist";
  }
  else{
	
	$query="insert into userinfo(name,lname,email,password,address,mobile,gender,dob)values('$name','$lname','$email','$password','$address','$mobile','$gender','$dob')";
	$run=mysqli_query($conn,$query);
	
	
	if($run){
		echo '<script type="text/javascript">alert("Successfully Registered")</script>';
    header("location:userlogin.php");
	}
	else{
		echo"error!".mysqli_error($conn);
	}
	
}	
}
?>
<center>
<div>
<form enctype="multipart/form-data" action="" method="POST">
<table width="50%" border="1" table style="background-color:#e4ef99">
 <tr>
 	<td colspan="2" bgcolor="#4370b7"><h4><q><b><font size="20">Register Here</font></b></q></h4></td>
 </tr>
  <tr>
    <td width="159" bgcolor="#0e912d"><font size="3"><b> Enter your Name</b></font></td>
    <td width="218">
	<input type="text" placeholder="your first name"  name="name" pattern="[a-z A-Z]*" required />
  <input type="text" placeholder="your last  name"  name="lname" pattern="[a-z A-Z]*" required /></td>
  </tr>
  <tr>
    <td bgcolor="#0e912d"><font size="3"><b> Enter your Email</b></font></td>
    <td><input type="email" name="email" required></td>
  </tr>
  <tr>
    <td bgcolor="#0e912d"><font size="3"><b> Enter your Password</b></font></td>
    <td><input type="password" name="password" required /></td>
  </tr>
  <tr>
    <td bgcolor="#0e912d"><font size="3"><b> Enter your Address</b></font></td>
    <td><textarea name="address" required></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#0e912d"><font size="3"><b> Enter your Mobile No</b></font></td>
    <td><input type="text" pattern="[0-9]*" name="mobile" required /></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#0e912d"><font size="3"><b> Select your Gender</b></font></td>
    <td>
	Male<input type="radio" name="gender" value="m" required />
	Female<input type="radio" name="gender" value="f" required />
	</td>
  </tr>
  <tr>
  <td bgcolor="#0e912d"><font size="3" required ><b> Select your DOB</b></font></td>
  <td>
  <input type="date" name="dob" max="2004-12-31" min="1940-01-02"><br>

 </td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#132bdd">
	<input type="submit" name="submit" value="Register Me"/>
	<input type="reset" value="Reset"/>
	</td>
  </tr>
</table>
</form>
<?php

?>
</div>
<div class="pk">
<table border="2" align="center" width="100%" cellspacing="10" cellpadding="15" style="border-color:#24393f;"><tr bgcolor="#77fffa" style="border-color: #24393f;"><th style="border-color: #24393f;"><a style="color: #001911;" href="index.php">HOME</a></th>
<th> <a style="color: #001911; font-size: 18px;" href="userlogin.php" style="border-color: #24393f;">LOGIN/REGISTER </a></th>
<th> <a style="color: #001911; font-size: 18px;" href="shop.php" style="border-color: #24393f;"> SEE SHOP ONLINE</a></th>
</tr>
</table></div>
</div>
</center>
</body>
</html>
