<?php
session_start();
    if($_SESSION['id'])
    {
		
    }
    else
    {
        header('location:userlogin.php');
    }
?>
<!doctype html>
<html lang="en">
<center>
<head>
	<title>Online Pharmacy Store in India. Best value on medicines - SM MEDICINE SHOP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="description" content="Handle your pharmacy, medicine store, departmental store and medicine shop data with the best pharmacy management system and web based solutionbuilt by Woksen." />
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<style>
	.mystyle {
    width: 100%;
    padding: 25px;
    background-color: #ff8851;
    color: blue;
    font-size: 25px;
}
</style>
<h1 style="color:#3c8782;
	background-color: #b7ff70;
	text-decoration: overline;
  margin-top:5px;
  padding-top: 10px;
  font-size: 40px;">SM MEDICINE SHOP - Online Pharmacy Store in India.</h1>
</head>

<body style="background: linear-gradient(#187d96, #e57027);">
<h3>WELCOME <?php echo $_SESSION['id']?></h3>


<header>
<table border="2" align="center" width="100%" cellspacing="10" cellpadding="15" background="medicine2.jpg"><tr bgcolor="#77fffa"><th><a style="color: #001911;" href="#top">HOME</a></th>
<th> <a style="color: #001911; font-size: 18px;" href="logout.php">LOGOUT </a></th>
<th> <a style="color: #001911; font-size: 18px;" href="aboutus1.php">ABOUT US </a></th>
<th> <a style="color: #001911; font-size: 18px;" href="blog1.html"> BLOG</a></th>
</tr>
		    	<img src="/pms/images/download.png" height="50 px" width="100 px" title="SM MEDICINE" alt="SM MEDICINE">
<br/>
	<table width="60%" bgcolor="#154799"><tr><td background="/pms/images/doctors.png" width="50px" >
		    	<p color="#13b5a7" style="font-size: 3em;">Shop by Category</p>
		  	</td>
		 <td>
		<form method="POST" action="shop1.php">
		<table style="width:50%" align="center" border="1">						
		<tr><td colspan="2" align="center">MEDICINE INFORMATION</td>
		<tr><td align="left">NAME</td><td><input type="text" name="name" placeholder="ENTER DRUG NAME"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="SEARCH"></td></tr>
		</table>						
		</form>
	</td>
	</tr></table>
<?php
if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	include('dbcon.php');
	include('function1.php');
	showdetails($name);
}
?>
<div align="left" style="background-color:#10a357;">		
<a style="color: #16ff54;" href="#locality" role="button" title="Locality/Pincode"  data-toggle="modal" data-target="#LocalityModal" onclick="getLocality();">
<img src="/pms/images/locality.png" height="60" width="100">
							 HOWRAH, WEST BENGAL
<h2 style="color: #f7ff16;">Home Delivery Available</h2>
</a>
</div>	</center></header>
<body>
<div style="background-color: #370851;" align="center">
<font style="color: #2679ff ; font-size: 50px; ">General Store</font>
</div>  
 <div align="center">   
<form name="myform" action="">
<table width="80%" align="center"><tr><td style="background-color: #8fefda;">                      
<li><label for="name">MEDICINE</label></li>
<br>
<li><label for="select_value" >Body Cream & Lotion</label></li>
<li><label for="select_value" >Scrubs & Facepack</label></li>
<li> <label for="select_value" >Men Skin Care</label></li>
<li><label for="select_value" >Baby Care</label></li>
<li><label for="select_value" >Hand Wash & Sterilizerse</label>
 </li>
<li><label for="select_value" >Tooth Paste & Powder</label>
</li>
<li><label for="select_value" >First Aid Kits</label></li>
<li><label for="select_value" >Antiseptics</label></li>
<li><label for="select_value" >Pain Relief</label></li>
<li><label for="select_value">Massage Oils</label></li>
<li><label for="select_value">Cold Relief</label></li>
<li><label for="select_value">Rubs & Balms</label></li>
<li><label for="select_value">Cough Aids</label></li>
<li><label for="select_value">Inhalers</label></li>
<li><label for="select_value">Joint Care & Support
</label></li>
<li><label for="select_value">Itch & Rash</label></li>
<li><label for="select_value">Digestives & Laxatives</label></li>
<li><label for="select_value">Healthcare Devices</label></li>
<li><label for="select_value">BP& Weight Monitoring</label></li>
<li><label for="select_value">Thermometers</label></li>
<li><label for="select_value">Health Protection</label></li>
</td>
<td style="background-color: #140d23;">
<input type="text" name="name"></input><br><br>
<select name="select_value" onchange="myFunction4()">
<option value="1">1FACE PRODUCT</option></select><br>
<select name="select_value" onchange="myFunction4()">
<option value="1"></option>
</select>
<br/>
<select name="select_value" onchange="myFunction4()">
<option value="1"></option>
</select>
<br/>
<select name="select_value" onchange="myFunction4()">
<option value="1">1PAMPERS</option>
</select>
<br/>
<select name="select_value" onchange="myFunction4()">
                <option value="1"></option>
</select>
<br/>
   <select name="select_value" onchange="myFunction4()">
                <option value="1">1SENSODYNE</option></select>
<br/> 
<select name="select_value" onchange="myFunction4()">
                <option value="1">DETTOLE</option>
                <option value="1">SAVLON</option></select><br/>
 <select name="select_value" onchange="myFunction4()">
                <option value="1">1BOROLINE</option></select><br>

<select name="select_value" onchange="myFunction4()">
                <option value="1">DISPRINE</option><br>
                <option value="1">SARIDON</option></select><br/>
 <select name="select_value" onchange="myFunction4()">
                <option value="1"></option></select><br>
<select name="select_value" onchange="myFunction4()">
                <option value="1">1ALEVED</option>
                <option value="1">2VICKS VAPORUB</option></select><br>
<select name="select_value" onchange="myFunction4()">
                <option value="1"></option></select><br>
<select name="select_value" onchange="myFunction4()">
                <option value="1">1HIMALAYA COUGH SYRUP</option></select><br>
            <select name="select_value" onchange="myFunction4()">
                <option value="1"></option></select><br>
            <select name="select_value" onchange="myFunction4()">
                <option value="1">1MUCINEX</option></select></br>

            <select name="select_value" onchange="myFunction4()">
                <option value="1"></option></select></br>
            <select name="select_value" onchange="myFunction4()">
                <option value="1">1DIGEST</option>
                <option value="2">2GELUSIL</option>
                <option value="3">3POLYCROL</option>
                <option value="4">4RANTAC</option>
            </select><br>
            <select name="select_value" onchange="myFunction4()">
                <option value="1">1PILL CASE</option></select><br>

            <select name="select_value" onchange="myFunction4()">
                <option value="1"></option></select><br>

            <select name="select_value" onchange="myFunction4()">
                <option value="1"></option></select><br>
            <select name="select_value" onchange="myFunction4()">
                <option value="1">1SBL</option>
                <option value="2">2REVITAL</option>
                <option value="3">3SHAMPOO</option>
                <option value="4">4CUREGARDON</option>
                <option value="5">5PAN DE</option>
                <option value="6">6VIAGRA</option>
                <option value="7">7NEEM OIL</option>
                <option value="7">8P-PRO-DS</option>
                <option value="7">9REVITAL</option>	
            </select><br/>
</td>
<td bgcolor="#ff8f44" ><div id="myDIV1">
 <button onclick="myFunction1()">
<marquee behavior="alternate" direction="alternate"><img src='/pms/images/offer.jpg'  id='offer' alt="OTC & Health Needs" height="500" width="500" /></marquee></button>
<script>
function myFunction1() {
    var element = document.getElementById("myDIV1");
    element.classList.toggle("mystyle");
}</script>
</div>
</td></tr>

<tr><td colspan="2" style="background-color:#51ffed;"><div style="background-color: #51ffed;" id="myDIV2">
		       <button onclick="myFunction2()"><marquee behavior="alternate" direction="alternate"><img src="/pms/images/dettol.jpg" width="800" height="300" id='MART_10107Img' alt="Nutrition"/> </marquee></button> <script> function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.innerHTML === "Please Search the product DETTOLE")
   {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Please Search the product DETTOLE";
  }
}  
 ;</script></td><td align="center" bgcolor="#1a2d27"><font size="5px" style="color:#b413f9;">HELLO USER WE ARE WAITING FOR YOUR CARTING ANY PRODUCT</font></td></tr>
</table>
<script type="text/javascript">
function myFunction4() {

        var x = parseInt(document.getElementsByName("select_value")[0].value);
        alert((THIS PRODUCT HAS OFFER));
        
}
</script>
    </form>
</div>

<div align="center" style="background-color:#ad0053;">
<a style="color: #6f7cf2; font-size: 30px; text-align: center; text-decoration-style: ;" href="logout.php">LOG OUT </a></div>	
			<br>
		<center>
	<font color="#04ff00" face="verdana" size="30px">
		<b><q>Special Offers</q></b></fony>
			<marquee behavior="scroll" direction="left"><img  src="/pms/images/offer3.jpg" height="100" width="100" alt="Offers" title="Offers"></marquee>
		</center>
</header>
				<div style="background-color: #3f593a;" id="myDIV" align="center">
		       <button onclick="myFunction()"><marquee behavior="scroll" direction="up"><img src="/pms/images/diper.jpg" height="30%" width="100%" title="Babydiapers" alt="Babydiapers"></marquee></button> 
		      <script> function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Please Search PAMPERS") {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Please Search PAMPERS";
  }
}   </script>
		     	</div>           
	      </div>
	      <br>
<center>
<table style="
  border-spacing: 5px 12px;
  padding: 0 8px 8px 0;
  border: 2px solid #c625ea;
 background-color: #ea2567; text-align: center;" ><tr>
<td background="/pms/images/special.gif" style="background-size: 50% 50%;" >
<p><a href="#paytm" style="color: #1022e8; font-size: 30px;" onclick="">Upto 40% Off<small style="color: #1022e8;">Jumbo Offer on Using PAYTM</small></a></p>
</td>
<td style="background-size: contain;" bgcolor="#7eea25"><a href="" ><img src="/pms/images/banner2.png" title="banner" alt="" width="400px" height="300px"></a></td>
</tr>
<tr><td>
<img src="/pms/images/banner.png" title="SportsNutrition" alt="banner2" width="500px" height="400px" >     
</td><td>
<a href="userlogin.php" onClick="alert('YOU MUST USE PAYTM 2nd TIME FOR PAYMENT TO CART ANY PRODUCT!')"><img src="/pms/images/paytm" height="400px" width="400px" title="Flexi Rewards" alt="Flexi Rewards"></a>	    
</td></tr>
</table>
</center>
<section>
<div style="background-color: #331821;">
<p style="color:#f4f7ef; text-decoration-line:3; text-align: left; font-size: 20px; ">Maximize your savings</p>
		<p style="text-decoration-line:2; text-align: left; font-size: 10px;" >With FlexiRewards, you choose the reward - cash discount or free goods. Either way, we guarantee maximum value for your money.</p>		
				<p style="color:#f4f7ef; text-decoration-line:3; text-align: left; font-size: 20px; ">Click and pick</p>
				<p style="text-decoration-line:2; text-align: left; font-size: 10px;" >Click to buy a range of products across categories - Pharmacy, Personal care, Nutrition, Baby care, Household etc., and pick them up at any of over 50 stores across the country</p>
				<p style="color:#f4f7ef; text-decoration-line:3; text-align: left; font-size: 20px;">Home delivery</p>
						<p style="text-decoration-line:2; text-align: left; font-size: 10px;">We offer convenient home delivery of medicines & general goods in several locations, with upload of a valid prescription for medicines.</p>
	</div>			
	</section>
	<div>
	<center><img height="200" width="500" border="2" src="/pms/images/medine.jpg"  title="" alt="" /></center>
		</div>
	</div>

<section >
	<div style="background-color: #2f5ba3;">
		<h2 style="color: #00ffce; text-decoration-line: 50; font-weight: bold; font-size: 80px; " >Top Offers<span>&nbsp;</span></h2>
	</div>

	<div>
    <header><img id="logo" src="/pms/images/doctors.png" height="65px" width="140px">
  </header>
 
<div>
<?php include("cart.php"); ?>
  <div id="main_div"><h3>Shooping Cart</h3>
    <div id="division" style="background-color: #070c16;">
      <section id="main_section" style="background-color:#243d35;">
        <?php display_cart(); ?>
      </section>
      <aside id="side"><span class="your_cart">Your Cart</span>&nbsp;&nbsp<img src="/pms/images/download1.jpg" height="45" width="150">
      <br/><br/>
      </aside>
      </div>
 </div></div></section>


<br/>
<section>
	<div align="center">
<table bgcolor="#3df7a3" style="padding: 15px; text-align: center;">
<tr><th><img src="/pms/images/product.png" width="100" height="100" title="100% Genuine Products" alt="100% Genuine Products"></th>
		<th><img src="/pms/images/track.jpg" width="100" height="100" title="Track Your Order" alt="Track Your Order">
		</th>
<th><img src="/pms/images/easy.jpg" height="100" width="100" >
			</th>
			<th>
<img src="/pms/images/cancel.jpg" height="100" width="100">
			</th></tr>
		</table>
		</div>
	</section>
<section ><form><center>	
<p style="color: #fafcd6; font-size:15px; "><input type="checkbox">I would like to receive information on offers,
new products and services<br><a style="color: #101f3a"><input type="button" name="update" value="update" onClick="alert('We SEND YOU CONFIRMATION TO YOUR MOBILE NO. AND EMAIL')"></a></p>
</center></form></section>

<div>
<fieldset><a style="margin: 0 auto; 
	font-size:15px;
    clear: both; 
    display: block;
    text-align: left; 
" href="faqs1.php" title="FAQs">FAQs</a>
<a style=" margin: 0 auto; 
  font-size:15px;
    clear: both; 
    display: block;
" href="" title="Locate a SM MEDICINE Store">Locate our <span>SM MEDICINE </span>SHOP</a>
<a style="    margin: 0 auto; 
text-align: left;
 font-size:15px;
clear: both; 
display: block;
" href="" title="Track Orders">Track Orders</a>
<a   style="  margin: 0 auto; 
 text-align: left ; 
  font-size:15px;
 clear: both; 
 display: block;" href="#top" title="Browse All Brands">Browse All Brands</a>
<a style="margin: 0 auto; 
text-align: left;
font-size:15px;
clear: both; 
display: block;
" href="" title="Customer Feedback">Customer Feedback</a></fieldset></div>
<table bgcolor="#313d4f" align="right" width="50%"><tr><td>Customer HELPLINE </td><td><div style="background-image: url('/pms/images/phone.jpg'); width:170px; height:310px;"><font size="2px" style="color:#f6ff05;" align="center">Contact Us<br>HELPING NUMBER: 76860-87195
		<br>
		96746-13341</font>
	</div></div></td></tr></table>
<div><a name="paytm"><p style="color: #ff0000; font-size: 30px; text-align: left; padding-top: 230px; background-color: #bbff32;">Payments</p></a>
	<table style=" border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;"><tr><td>
<a onClick="alert('YOU NEED TO CREATE A BILL FIRST')"><img src="/pms/images/mc.png" height="50" width="50" alt="MasterCard"  title="MasterCard"></a></td><td><a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')">
<img src="/pms/images/paytm3.jpg" height="50" width="50" alt="Paytm" title="Paytm"></a>
</td><td><a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')"><img src="/pms/images/nb.jpg" height="50" width="50" alt="Net Banking" title="Net Banking"></a> </td><td>	<a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')"><img src="/pms/images/cod.jpg" alt="Cash On Delivery" height="50" width="50"  title="Cash On Delivery"></a></td></tr></table></div>
<div >
<strong style="font-size: 15px; text-align: left;">Policies:</strong>
<span><a href="/privacypolicy" style="font-size:10px;">Privacy Policy</a>/</span>
<span><a href="/termsandconditions" style="font-size:10px;">Terms & Conditions</a>/</span>
</div>
<footer>
<div style="background-color: #ffca60;" ><h5 style="color: #2f331c; font-size: 10px;">Select Your<br><strong>Locality/Pincode</strong></h5>
			<ul style="color: blue;">
				<li style="font-size: 10px;">Check availability of services in your locality</li>
				<li  style="font-size: 10px;">Search a product</li>
				<li  style="font-size: 10px;">Add product to bag</li>
				<li  style="font-size: 10px;">Complete your order</li>
			</ul>
			</div>                  		
<p>Select the locality where you wish to receive delivery or store pickup</p>
			<span style="display:none;">
				
						 Home Delivery &amp; store pickup available
			</span>
			
<div style="background-color: #8301a0;"><a name="locality"><form name="locality">
<table align="center" width="90%" border="1"><tr><td align="center"><font size="3px">Enter Place Name In HOWRAH OR KOLKATA to find out Availability Of HOME DELIVERY</font></td><td align="center"><font size="3px">Pincode/Enter Locality</font></td></tr><tr><td align="center">
<input tabindex="101" type="text" id="sltdCity" name="enteredCity" autocomplete="off" placeholder="Enter Place">	</td><td>	<input tabindex="102" type="number" id="sltdLocality"  autocomplete="off"  name="enteredLoc"   placeholder="Enter Locality/Pincode" value=""/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Enter"></td></tr></table>
</form></a></div>
<div>
<p class="size-10 color-grey margin-t-5">Top selling cities: 
								
								
									<a onclick="selectCity('HOWRAH')" href="javascript:;">HOWRAH,</a>
								
									<a onclick="selectCity('KOLKATA')" href="javascript:;">KOLKATA,</a>
								
									<a onclick="selectCity('CHENNAI')" href="javascript:;">CHENNAI,</a>
								
									<a onclick="selectCity('MUMBAI')" href="javascript:;">MUMBAI,</a>
								  <a onclick="selectCity('ODISSA')" href="javascript:;">ODISSA</a>
								
							
						</p>
					</div>
				
			 </div> 
					
	<div>
	<p style="color: #611f93; text-align: center; font-size: 14px ;">Note: Selection of service locality / pincode is mandatory to place an order. Default locality will be selected as "Kadamtala, Howrah".</p>		
</div>
<div style="background-color: #aa6cfc;" align="center"><a style=" color:  #965718; font-size: 20px; text-decoration-color: #965718; text-decoration-style: none;" href="index.php" >
<strong>LOG OUT</strong></a></div>
<div style="background-image: url('/pms/images/item.png');">
<a style="color: #0d0814; position: absolute;
    right: 0; font-size:15px;">Participate in FlexiRewards program</a><br>
						<a style="color:#0d0814; position: absolute;
    right: 0; font-size:15px;">Available discounts at our stores</a><br>
	<a style="color:#0d0814; position: absolute; right: 0; font-size:15px;">Access your previous bills & records</a><br>
						<a style="color: #0d0814; position: absolute; right: 0; font-size:15px;">Exclusive SM MEDICINE SHOP Family Health Plan Offer</a></div></footer>
</body>
</html>