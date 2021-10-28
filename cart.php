<?php
include('connection.php');
if(!session_id()) session_start();
function display_cart(){
	global $dbc;
	$q="SELECT `id`,`image`,`name`,`department`,`price` FROM medicine where `stock`>0 ";
	$run=mysqli_query($dbc,$q);
	$num=mysqli_num_rows($run);
	while($fetch=mysqli_fetch_assoc($run)){
		echo'<img src="../pms/dataimg/'.$fetch['image'].'" width="120px" height="120px"/><br/><span id="name">'
		.$fetch['name'].'</span><br>'.$fetch['department'].'<br>RS.'.$fetch['price'].'<br>'.'
		<a href="cart.php?add='.$fetch['id'].'">Add to Cart</a><br/><br/>';
	}
}


if(isset($_GET['add']) && !empty($_GET['add']))
{
$id=$_GET['add'];
$q="SELECT `id`, `stock` FROM medicine where `id`= '".$id." ' ";
$run=mysqli_query($dbc,$q);
while($stock=mysqli_fetch_assoc($run))
{
if($stock['stock'] != @$_SESSION['cart_'.$id])
{
	echo "You Have successfully carted<br/>";
	echo @$_SESSION['cart_'.$id]+=1;
	echo "<br/>PRODUCT";
}
}
}

if(isset($_GET['remove']))
{
	$_SESSION['cart_'.$_GET['remove']]--;
	header('Location:shop12.php');
}
if(isset($_GET['delete']))
{
	$_SESSION['cart_'.$_GET['delete']]=0;
	header('Location:shop12.php');
}
function product(){
	foreach ($_SESSION as $name => $value) {
		if($value > 0){
			if(substr($name,0,5)=='cart_'){
				$id = substr($name,5,(strlen($name-5)));
				$q="SELECT `id`,`name`,`department`,`price` FROM medicine where `id`= '".$id." '";
                $run=mysqli_query($dbc,$q);    
				while($_GET=mysqli_fetch_assoc($run)){
					$total= $value * $_GET['price'];
					echo $_GET['name'].'X'.$value.'@'.$_GET['price'].'=$ '.$total.'<a href="cart.php?add='.$id.'">[+]</a><a href="cart.php?remove='.$id.'">[-]>/a><a href="cart.php?delete='.$id.'">[DELETE]>/a><br/><br/>';
				}
			}
		}
	}
}
?>
<html>
<body>
	<a href="shop1.php">BACK TO INDEX</a>
	</body>
</html>