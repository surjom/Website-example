<!doctype html>
<html lang="en">
<center>
<head>
	<title>Online Pharmacy Store in India. Best value on medicines - SM MEDICINE SHOP</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
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
.bluecolor { background: blue; } 
@-webkit-keyframes flash {
 0% { opacity: .3; }
 100% { opacity: 1; }
}
@keyframes flash {
 0% { opacity: .3; }
 100% { opacity: 1; }
}
.flash:hover {
 opacity: 1;
 -webkit-animation: flash 1s;
 animation: flash 1s;
}
@-webkit-keyframes flash {
 0%, 50%, 100% { opacity: 1; }
 25%, 75% { opacity: 0; }
}
@keyframes flash {
 0%, 50%, 100% { opacity: 1; }
 25%, 75% { opacity: 0; }
}
</style>
<h1 style="color:#3c8782;
	background-color: #b7ff70;
	text-decoration: overline;
  margin-top:5px;
  padding-top: 10px;
  font-size: 40px;">SM MEDICINE SHOP - Online Pharmacy Store in India.</h1>
</head>

<body style="background: linear-gradient(#ff6a00, #2594fc);">



<header>
		    	<a href="index.php"><img src="/pms/images/download.png" height="50 px" width="100 px" title="SM MEDICINE" alt="SM MEDICINE"></a> 
	<div align="right" style=" padding-right: 150px;">			
	<img src="/pms/images/camera.jpg" height="10" width="15" title="Cart" align="right" >
	<font color="#0cf446" size="4">Cart</font>
	<span>0</span>
	</div>
	<div align="right">
					You have not added any products to Cart 
				</div>
<br/>
	<table width="60%" bgcolor="#154799"><tr><td background="/pms/images/doctors.png" width="50px" >
		    	<p color="#13b5a7" style="font-size: 3em;">Shop by Category</p>
		  	</td>
		 <td>
		<form method="POST" action="shop.php">
		<table style="width:50%" align="center" border="1">						
		<tr><td colspan="2" align="center">MEDICINE INFORMATION</td>
		<tr><td align="left">CHOSE DEPARTMENT</td><td align="left"><select name="department" required>
					<option>Body Cream & Lotion</option>
					<option>Scrubs & Face Packs</option>
					<option>Men Skin Care</option>
					<option>Baby Care</option>
					<option>Hand Wash & Sterilizers</option>
					<option>Oral Care</option>
					<option>Tooth Paste & Powder</option>
					<option>Tooth Brush</option>
					<option>Mouth Wash</option>
					<option>Tooth Aids</option>
					<option>First Aid Kits</option>
					<option>Antiseptics</option>
					<option>Pain Relief</option>
					<option>Sprays</option>
					<option>Massage Oils</option>
					<option>Cold Relief</option>
					<option>Rubs & Balms</option>
					<option>Cough Aids</option>
					<option>Inhalers</option>
					<option>Joint Care & Support</option>
					<option>Skin & Foot Care</option>
					<option>Itch & Rash</option>
					<option>Burns & Scars</option>
					<option>Foot Cracks & Corns</option>
					<option>Digestives & Laxatives</option>
					<option>Healthcare Devices</option>
					<option>Diabetic Testing Needs</option>
					<option>BP & Weight Monitoring</option>
					<option>Thermometers</option>
					<option>Health Protection</option>
					</select></td></tr>
		<tr><td align="left">NAME</td><td><input type="text" name="name" placeholder="ENTER DRUG NAME"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="SEARCH"></td></tr>
		</table>						
		</form>
	</td>
	</tr></table>
<?php
if(isset($_POST['submit']))
{
	$department = $_POST['department'];
	$name = $_POST['name'];
	include('dbcon.php');
	include('function.php');
	showdetails($department,$name);
}
?>
<div align="left" style="background-color:#10a357;">		
<a style="color: #16ff54;" href="javascript:void(0);" role="button" title="Locality/Pincode"  data-toggle="modal" data-target="#LocalityModal" onclick="alert('For MORE DETAILS GO INTO OUR SYSTEM');">
<img src="/pms/images/locality.png" height="60" width="100">
							 HOWRAH, WEST BENGAL
<h2 style="color: #f7ff16;">Home Delivery Available</h2>
</a>
</div>	</center></header>
<body>
<div style="background-color: #370851;" align="center">
<font style="color: #2679ff ; font-size: 50px; ">General Store</font>
</div>  
 <div>   
<form name="myform" action="">
<table width="80%" align="center"><tr><td style="background-color: #140d23;">                      
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
                <option value="1">1DETTOLE</option>
                <option value="2">2SAVLON</option></select><br/>
 <select name="select_value" onchange="myFunction4()">
                <option value="1">1BOROLINE</option></select><br>

<select name="select_value" onchange="myFunction4()">
                <option value="1">1DISPRINE</option><br>
                <option value="2">2SARIDON</option></select><br/>
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
  if (x.innerHTML === "You Must Need To LOG IN in our SYSTEM")
   {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "You Must Need TO LOGED IN In Our SYSTEM before BUY IT";
  }
}  
 ;</script></td><td align="center" bgcolor="#1a2d27"><font size="5px" style="color:#b413f9;">HELLO USER WE ARE WAITING FOR YOUR WELCOME</font></td></tr>
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
<a style="color: #6f7cf2; font-size: 30px; text-align: center; text-decoration-style: ;" href="userlogin.php">LOGIN/REGISTER </a></div>	
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
  if (x.innerHTML === "You Must Need To LOG IN in our SYSTEM") {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "You Must Need TO LOGED IN In Our SYSTEM before BUY IT";
  }
}   </script>
		     	</div>           
	      </div>
	      <br>

<table style="
  border-spacing: 5px 12px;
  padding: 0 8px 8px 0;
  border: 2px solid #c625ea;
 background-color: #ea2567;" align="center"><tr>
<td background="/pms/images/special.gif" style="background-size: 50% 50%;" >
<p> <a href="userlogin.php" style="color: #1022e8;">Upto 40% Off<small style="color: #1022e8;">Jumbo Offer on Using PAYTM</small></a></p>
<p><a href="userregister.php" style="color: #541063;">Upto 40% Off<small style="color: #541063;">Jumbo Offer on First ACCOUNT CREATE </small></a></p>
</td>
<td style="background-size: contain;" bgcolor="#7eea25"><a href="" ><img src="/pms/images/banner2.png" title="banner" alt="" width="400px" height="300px"></a></td>
</tr>
<tr><td>
<img class="flash" src="/pms/images/banner.png" title="SportsNutrition" alt="banner2" width="500px" height="400px" >     
</td><td>
<a href="userlogin.php" onClick="alert('YOU MUST USE PAYTM 2nd TIME FOR PAYMENT TO CART ANY PRODUCT!')"><img src="/pms/images/paytm" height="400px" width="400px" title="Flexi Rewards" alt="Flexi Rewards"></a>	    
</td></tr>
</table>

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
 <center>          
<form>
 <table ><tr><td style="background-color: #3d5953;" align="center">
 <a href="">
 <img class="flash" src="/pms/images/him.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/him.jpg'" alt="" title="Himalaya" /><div>
  <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">HIMALAYA COUGF SYRUP</span>
  </p></a>
 <div style="background-color: #5a5fe8;">
 <strong>Rs 77.00</strong>
 <br/> <small>
 <span >Rs 50</span>(Save 28.5%) </small>
 </div><div>
<button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" value="ADD TO CART">Add to Cart</button>
</div>           
</td></tr>
<tr><td style="background-color: #3d5953;" align="center" >
<a href="">
<img class="flash" src="/pms/images/aleved.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/aleved.jpg'" alt="" title="ALEVED" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">ALEVED</span>
</p></a>
<div style="background-color: #5a5fe8;"> 
<strong>Rs 1500.00</strong>
<br/><small>
	<span >Rs 1247</span>
	        (Save 16.9%)
	    </small></div><div>
<button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')">Add to Cart</button>
</div>
</td></tr>
<tr><td style="background-color: #3d5953;" align="center">
<a href="">
<img class="flash" src="/pms/images/boroline.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/boroline.jpg'" alt="" title="BOROLINE" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">BOROLINE</span></p></a> 
<div style="background-color: #5a5fe8;" >          
<strong>Rs 390.00</strong>
<br/><small>
	<span >Rs 305</span>
(Save 21.8%)</small></div>
<div>
<button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
</td></tr>
<tr><td style="background-color: #3d5953;" align="center">
<a href=""><img class="flash" src="/pms/images/dettol2.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/dettol2.jpg'" alt="" title="DETTOLE" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">DETTOLE</span>
</p></a>
<div style="background-color: #5a5fe8;" >
<strong>Rs 167.00</strong><br/> <small>
 <span >Rs 106</span> (Save 36.52%)  </small></div><div>
 <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div></td></tr>
<tr><td style="background-color: #3d5953;" align="center">
<a href="">
<img class="flash" src="/pms/images/digest.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/digest.jpg'" alt="" title="DIGEST" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">DIGEST</span>
</p></a>
  <div style="background-color: #5a5fe8;">
 <strong>Rs 1250.00</strong>
<br/><small> <span >Rs 599</span>
	        (Save 52.08%)
 </small></div><div>
 <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
<tr><td style="background-color: #3d5953;" align="center">
<a href="">
<img class="flash" src="/pms/images/disprine.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/disprine.jpg'" alt="" title="disprine" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">DISPRINE</span>
</p></a>
<div style="background-color: #5a5fe8;"> <strong>Rs 60.00</strong>
 <br/><small> <span >Rs 40</span>
	        (Save 33.3%)</small></div>
	        <div>
 <button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div></td></tr>
<tr><td style="background-color: #3d5953;" align="center">
	<a href="">
<img class="flash" src="/pms/images/faces.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/faces.jpg'" alt="" title="faces" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">FACE PRODUCT</span>
                            </p></a>
 <div style="background-color: #5a5fe8;"><strong>Rs 356.00</strong>
<br/> <small> <span >Rs 150</span>
(Save 57.86%)</small></div>
<div>        
<button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td></tr>
    <tr><td style="background-color: #3d5953;" align="center">
         <a href=""><img class="flash" src="/pms/images/Gelusil.png" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/Gelusil.png'" alt="" title="GELUSIL" />
                </a>
        
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">GELUSIL</span></p>
<div style="background-color: #5a5fe8;">
            <strong>Rs 141.00</strong>
                       <br/>   <small><span >Rs 78</span>
	        (Save 44.68%)</small>
	    </div>
	     <div>
       <button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
    </div></td></tr>
		         
   <tr><td style="background-color: #3d5953;" align="center">
     <a href="">
    <img class="flash" src="/pms/images/med2.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/med2.jpg'" alt="" title="Viagra" /></a>
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">VIAGRA</span>
</p>
</a>
<div style="background-color: #5a5fe8;"><strong>Rs 677.00</strong>
<br/><small><span >Rs 417</span>
	        (Save 38.40%)</small></div>
<div><button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div></td></tr>
<tr>
<td style="background-color: #3d5953;" align="center">
<a href="">
<img class="flash" src="/pms/images/neemoil.jpg" style="width:300px; height:50 px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/neemoil.jpg'" alt="" title="NEEMOIL" />
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">NEEM OIL</span>
</p></a>
<div style="background-color: #5a5fe8;"><strong>Rs 105.00</strong>
 <br/>   <small><span >Rs 74</span>
(Save 29.52%) </small>
 </div>
 <div> <button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div></td></tr>
</table>   
</form>
</div>
<div>	
<a href="#top" style="color: #153829; font-size: 50px">Top</a></div>
<div style="background-color: #38d18c;">
	<p style="color: #0a2938; font-size: 45px ; text-align: center;">BEST OFFERS</p>
	</div>


<div align="center">
	<form>
	<table bgcolor="#23001d" border="2" style=" padding: 5px; text-align: center;" align="center" width="80%">
	<tr><td>
		<a href="">
    <img class="flash" src="/pms/images/polycrol.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/polycrol.jpg'" alt="" title="POLYCROL" />
                <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">POLYCROL</span>
                            </p>
                   </div></a>
                
        <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 150.00</strong>
                       <br/>   <small>
	                           <span >Rs 125</span>
	        (Save 16.6%) </small></font></div>
	        <div>
        <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
</td>

 <td> <a href=""><img class="flash" src="/pms/images/prods.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/prods.jpg'" alt="" title="P-PRO-DS" />
 <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">P-PRO-DS</span>
</p></div></a>
        
        <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 1090</strong>
 <br/>   <small>  <span >Rs 450.00</span>
	       (Save 60.95%) </small></font></div><div>
<button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>

		      <td>
     <a href="">
    <img class="flash" src="/pms/images/rantac_150.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/rantac_150.jpg'" alt="" title="RANTAC" />
      <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">RANTAC</span>
                            </p>
                   </div></a>
                     
        <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 9.84</strong>
 <br/>   <small> <span >Rs 6.00</span>
	        (Save 33.3%) </small></font></div><div>
      <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>
		      <td><a href="">
    <img class="flash" src="/pms/images/s2.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/s2.jpg'" alt="" title="SBL" />
               <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span >SBL</span> </p>
</div></a>
        
        <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 92.00</strong>
<br/>   <small><span >Rs 77</span>
	        (Save 16.30%) </small>
       </font></div> <div>
      <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>
</tr>
<tr>
<td> <a href="">  <img class="flash" src="/pms/images/saridon.gif" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/saridon.gif'" alt="" title="SARIDON" />
               <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">SARIDON</span>
 </p> </div> </a>        
        <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 27.00</strong>
                       <br/>   <small>
	                           <span >Rs 19</span>
	        (Save 29.62%)</small></font>
        </div><div>
      <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    
</td>
 <td>
 	<a href=""> <img class="flash" src="/pms/images/savlon.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/savlon.jpg'" alt="" title="SAVLON" />
 <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">SAVLON</span>
                            </p>
                   </div>
                </a>
                
        <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 99.00</strong>
                       <br/>   <small>
	                           <span >Rs 63</span>
	        (Save 36.36%)
	                    </small></font></div>
        <div>
       <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
</td><td>
	<a href="">
     <img class="flash" src="/pms/images/revital.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/revital.jpg'" alt="" title="REVITAL" />
<div> <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">REVITAL</span>
</p></div></a>        
        <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 239.00</strong>
                       <br/>   <small>   <span >Rs 100</span>
	        (Save 58.15%)</small></font></div>
	        <div><button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
<div style="display:none;">Added to Cart</div>
 </td>
 <td>
 	<a href="">
          <img class="flash" src="/pms/images/sensodyne.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/sensodyne.jpg'" alt="" title="SESODYNE" />
  <div> <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">SENSODYNE</span>
                            </p>
                   </div>
              </a>
                      
        <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 170.00</strong>
 <br/>   <small>
	                           <span >Rs 140</span>
	        (Save 17.64%)</small>
        </font></div>
          <div><button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
</td></tr>
 <tr>
 <td>
<a href="">
    <img class="flash" src="/pms/images/sm.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/sm.jpg'" alt="" title="VICKS" />
            <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">VICKS VAPORUB</span>
                            </p>
                   </div></a>
               
        <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 50.00</strong>
                       <br/>   <small>
	                           <span >Rs 25</span>
	        (Save 50%)
	                               
	                           
                            </small>
        </font>
           </div><div><button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>
		      <td>
     <a href=""><img class="flash" src="/pms/images/mucix.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/mucix.jpg'" alt="" title="MUCINEX" />
           <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">MUCINEX</span>
                            </p>
                   </div></a>
           <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 5000</strong>
                       <br/>   <small>
	                           <span >Rs 4819.00</span>
	        (Save 3.62%) </small></font>
        </div><div>
            <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >>Add to Cart</button>
</div>
</td>
 <td>
 <a href="">
 	<img class="flash" src="/pms/images/pampers.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/pampers.jpg'" alt="" title="PAMPERS" />
        <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">PAMPERS</span>
                            </p>
                   </div></a>
                  <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 615.00</strong>
                       <br/>   <small>
	                           <span >Rs 490</span>
	        (Save 20.32%) </small></font>
        </div>
        <div>
           <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>
		      <td>
         <a href=""><img class="flash" src="/pms/images/pillcase.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="/pms/images/this.src='pillcase.jpg'" alt="" title="PILLCASE" />
                <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">PILL CASE</span>
                            </p>
                   </div>
</a>
       <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 268.00</strong>
                       <br/>   <small>
	                           <span >Rs 131</span>
	        (Save 51.11%) </small></font>
 </div><div><button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
 </td></tr>
    <tr>
		      <td>
     <a href="">
    <img class="flash" src="/pms/images/shampoo.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="/pms/images/this.src='shampoo.jpg'" alt="" title="SHAMPOO" />
<div><p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">SHAMPOO</span></p>
                   </div></a>
             
       <div align="center" style="background-color: #019e09;">
            <font size="5px"><strong>Rs 300.00</strong>
                       <br/>   <small>
	                           <span >Rs 150</span>
	        (Save 50%)</small></font>
        </div><div>
           <button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>
		      <td>
     
        <div><form>
         <a href="">
             <div class="photo">
    <img class="flash" src="/pms/images/curegardon.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="/pms/images/this.src='curegardon.jpg'" alt="" title="CUREGARDON" />
                </div>
        <div>
           <p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">CUREGARDON</span>
                            </p></div></a>
       <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 845.00</strong>
                       <br/>   <small>
	                           <span >Rs 690</span>
	        (Save 18.34%)</small></font>
        </div><div><button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
                                    	</div>
                                    	</td>
		      <td>
         <a href="">
    <img class="flash" src="/pms/images/black.jpeg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="/pms/images/this.src='black.jpeg'" alt="" title="black" />
<div>
<p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">BLACK CUMIN SEED OIL</span>
</p></div></a>
<div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 425.00</strong>
 <br/>   <small><span >Rs 227</span>
	        (Save 46.58%) </small></font>
        </div><div><button type="button" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div></td><td><a href="">
  <img class="flash" src="/pms/images/oxycontin.jpg" style="width:250px; height:100px; border:3; backface-visibility: 2; "  onerror="this.src='/pms/images/oxycontin.jpg'" alt="" title="OXYCONTIN" />
  <div><p style="color: 1a0f1e; text-align-last: center;">
<span class="productName">OXYCONTIN</span>
                            </p>
              </div></a>
        <div align="center" style="background-color: #019e09;">
            <font size="4px"><strong>Rs 15000.00</strong>
                       <br/>   <small>
	                           <span >Rs 8956</span>
	        (Save 40.29%) </small></font></div>
        <div><button type="submit" onClick="alert('YOU MUST LOGED IN OUR SYSTEM')" >Add to Cart</button>
</div>
 </td></tr>
</table></form>
</div>
<br/>
<section>
	<div align="center">
<table bgcolor="#3df7a3" style="padding: 15px; text-align: center;">
<tr><th><img class="flash" src="/pms/images/product.png" width="100" height="100" title="100% Genuine Products" alt="100% Genuine Products"></th>
		<th><img class="flash" src="/pms/images/track.jpg" width="100" height="100" title="Track Your Order" alt="Track Your Order">
		</th>
<th><img class="flash" src="/pms/images/easy.jpg" height="100" width="100" title="Easy Delivery" >
			</th>
			<th>
<img class="flash" src="/pms/images/cancel.jpg" height="100" width="100" title="Easy Cancelling Your Order">
			</th></tr>
		</table>
		</div>
	</section>
<div>
<fieldset><a style="margin: 0 auto; 
	font-size:15px;
    clear: both; 
    display: block;
    text-align: left; 
" href="faqs.php" title="FAQs">FAQs</a>
<a style="    margin: 0 auto; 
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
<div><p style="color: #ff0000; font-size: 30px; text-align: left; padding-top: 230px; background-color: #bbff32;">Payments</p>
	<table style=" border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;"><tr><td>
<a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')"><img class="flash" src="/pms/images/mc.png" height="50" width="50" alt="MasterCard"  title="MasterCard"></a></td><td><a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')">
<img class="flash" src="/pms/images/paytm3.jpg" height="50" width="50" alt="Paytm" title="Paytm"></a>
</td><td><a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')"><img class="flash" src="/pms/images/nb.jpg" height="50" width="50" alt="Net Banking" title="Net Banking"></a> </td><td><a href="javascript:void();" onClick="alert('YOU NEED TO CREATE A BILL FIRST')"><img class="flash" src="/pms/images/cod.jpg" alt="Cash On Delivery" height="50" width="50"  title="Cash On Delivery"></a></td></tr></table></div>
<div >
<strong style="font-size: 15px; text-align: left;">Policies:</strong>
<span><a href="privacy.php" style="font-size:10px;">Privacy Policy</a>/</span>
<span><a href="t&c.php" style="font-size:10px;">Terms & Conditions</a>/</span>
</div>
<footer>

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
			<div style="background-color: 
#063d00
;"> <font size="5px" color="#210e8e">I am looking for information only <a onclick="closeLocalityPopup()" href="userlogin.php" title="Skip & Explore">Skip & Explore</a></font></div>
<div style="background-color: #aa6cfc;" align="center"><a style=" color:  #965718; font-size: 20px; text-decoration-color: #965718; text-decoration-style: none;" href="index.php" >
<strong>HOME</strong></a></div>
<div style="background-image: url('/pms/images/item.png');">
	<font size="100px"><a style = "clear: left; float: left; text-align: left;" href="aboutus.php">ABOUT US</a></font>
<a style="color: #0d0814; position: absolute;
    right: 0; font-size:15px;">Participate in FlexiRewards program</a><br>
						<a style="color:#0d0814; position: absolute;
    right: 0; font-size:15px;">Available discounts at our stores</a><br>
</div></footer>
</body>
</html>