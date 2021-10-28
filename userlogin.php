<?php
session_start();
require 'dbconfig.php';
?>
<html lang="en">
    <head>
        <meta name="OPM" content="Accounting">
        <meta name="description" content="Medical Store">
        <meta name="Admin" content="Sayan">
        <meta name="keyword" content=", Hospital, Clinic, Management, Software, Php, CodeIgniter, pharmacy, Accounting">
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" href="css/style2.css"> 
        <title>Login - Pharmacy Management System</title>
         <style>
        p {
    background-color: #006a84;
            }
        .pk {
        color:#02f6ff;
        font-size: 15px;
            }
        .b{
    background-image: url(/pms/images/pharma.png);
    width: 50em;
    height: 25em;
    background-color: #295599;
}
 div, p {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
}
    </style>
<center><p style="color:#47d1f7;font-size:50px;font-style:normal;font-weight:bold;">SM MEDICINE SHOP</p> 	      
<div class="pk">
    <h3 align="right" style="margin-right:20px;"><a href="login.php" style="color:#f4ce42;">ADMIN LOGIN</a></h3>
<table border="2" align="center" width="100%" cellspacing="10" cellpadding="15" style="border-color:#24393f;"><tr bgcolor="#77fffa" style="border-color: #24393f;"><th style="border-color: #24393f;"><a style="color: #001911;" href="index.php">HOME</a></th>
<th><a style="color: #001911; font-size: 18px;" href="profile.php" style="border-color: #24393f;">PROFILE</a></th>
<th> <a style="color: #001911; font-size: 18px;" href="userlogin.php" style="border-color: #24393f;">LOGIN/REGISTER </a></th>
<th> <a style="color: #001911; font-size: 18px;" href="aboutus.php" style="border-color: #24393f;">ABOUT US </a></th>
<th> <a style="color: #001911; font-size: 18px;" href="#" style="border-color: #24393f;"> BLOG</a></th>
</tr>
</table></div></head>
   <body style="background: linear-gradient(#1d0060,#970afc);">
<div class="b">
<form method="POST" action="log.php" >
                <h5><b>SM ONLINE PHARMACY SHOP</b></h5>
                <p><font size="10"><b>Log In Please</b></font></p>
				<br/>
                <table border="2" width="50%" cellspacing="5" cellpadding="5" background="medicine2.jpg">
                <tr><th bgcolor="#478c5a">Enter Your Email</th><td>
                <input type="email" class="form-control" name="email" placeholder="User Email" autofocus>
                </td>
                <tr><th bgcolor="#478c5a">Password</th><td>
                <input type="password" class="form-control" name="password" value="" placeholder="Password"></td></tr>
                    <tr><td align="center">
					<input type="reset" value="Reset"/></td>
					</tr>
                    <tr><td align="">
					<font color="#0e2851" size="20 px"><b>OR</b></font></td><th bgcolor="#478c5a">
                    <input type="submit" name="login" value="LOG IN"></th></tr>
                    <tr><td>
                    <a href="userregister.php">
    <img src="/pms/images/reg.png" style="width:200px;height:42px;border:0;" align="right">
    </a>         
</td></tr>
<tr><td colspan="2" align="center"><?php if(isset($_REQUEST["err"]))
                        echo "Invalid User";
 ?></td></tr>
</table></form>

			   </center>
            </div>

    <div style="background-color: #295599; text-align: right;">
        
            <form method="post" action="auth/forgot_password" class="demo">
            <h4>Forgot Password?</h4>
            <pre><font color="white">Insert Your Email to reset your password</font></pre>
            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
            <input class="btn btn-success" type="submit" name="submit" value="submit"> 
            
            </form>
</body>
</html>

