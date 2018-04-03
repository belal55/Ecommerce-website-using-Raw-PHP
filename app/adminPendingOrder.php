<?php 

		session_start();
		if(!isset($_SESSION['email']))
		{
			header("location: login.php");
		}
		require_once('../data/dbconnector.php');
		require_once "../service/user_service.php";
		require_once "../service/product_service.php";
		require_once "../service/order_service.php";
		$orders=findOrderUsingStatus("pending");
		
	 
	  
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>E-Commerse</title>
	<link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
	<header class="menu">
	
		<div class="container">
			<div class="leftcontainer">
				<a href="index.php"><h1>SOSTA.COM</h1></a>
			</div>
			<div class="rightcontainer">
				<h3>Welcome</h3>
				<h3><?php echo $_SESSION['name'];?></h3>
			</div>
		</div>
	</header>
	
	<?php
		if($_SESSION['id']==1)
		{
			require_once "adminLeftMenu.php";
		}else{
			require_once "userLeftMenu.php";
		}
	?>
	
	<div class="delete_area_right"> 
	
		
			<?php
				echo '<center><table border="1px" style="font-size:20px; padding:10px;">
						<tr > 
								<td style="font-size:20px; padding:10px;">Order Id</td>
								<td style="font-size:20px; padding:10px;">Customer Id</td>
								<td style="font-size:20px; padding:10px;">Customer Address</td>
								<td style="font-size:20px; padding:10px;">Total Amount</td>
								<td style="font-size:20px; padding:10px;">Shipping Date</td>
								<td style="font-size:20px; padding:10px;">Status</td>
								<td style="font-size:20px; padding:10px;"></td>
							</tr>';
				foreach($orders as $row)
				{
					echo ' <tr > 
								<td style="font-size:20px; padding:10px;">'.$row['id'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['customer_id'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['customer_address'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['order_amount'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['shipping_date'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['delivery_status'].'</td>
								<td style="font-size:20px; padding:10px;"> <a href="deliver.php?id='.$row['id'].'">Deliver</a></td>
							</tr>';
				}
				echo '</table></center>';
				
			?>
			
		
		
	
	</div>
	

</body>
</html>
