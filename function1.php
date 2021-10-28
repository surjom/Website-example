<?php
	function showdetails($name)
	{
		include('dbcon.php');
		$sql="SELECT * FROM `medicine` WHERE `name`='$name'";
		$run=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run);
			?>
			<form action="bill.php" method="post">
			<table align="center" width="80%" border="1" style="margin-top: 10px;"><tr style="background-color: #3a5946; color: #9ee5b9;">
			<tr><td> MEDICINE DETAILS</td>
			<td rowspan="6"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px;" /></td></tr>
			<th>ID NO</th><td><?php echo $data['id'];?></td></tr>
			<tr><th>DRUG NAME</th>
			<td><?php echo $data['name'];?></td>
			</tr>
			<th>PRICE</th>
			<td><?php echo $data['price'];?></td>
			</tr>
			<tr><th>DEPARTMENT</th>
			<td><?php echo $data['department'];?></td>
			</tr>
			<tr><th>QUNATITY</th>
			<td><?php echo $data['stock'];?></td>
			</tr>
			<tr>
			<td align="center" colspan="3"><input type="submit" name="cart" value="ADD TO CART"></td>
			</tr>
		</table>
	</form>

	


		<?php
		}
		else
		{
			echo "<script>alert('No MEDICINE FOUND');
			</script>";
			}
			
	}
	?>