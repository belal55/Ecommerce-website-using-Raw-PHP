<?php 

		require_once('../data/dbconnector.php');
		require_once "../service/user_service.php";
		require_once "../service/product_service.php";
		session_start();
		
		if(isset($_GET['pid']))
		{
			$products=getProductUsingId($_GET['pid']);
			$_SESSION['cart'][]=$products;
		}

		
		
	 
	  
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
				
			</div>
		</div>
	</header>
	
	<div class="cart_product" id="cart"> 
		<?php
			echo '<center><table border="1px" style="font-size:20px; padding:10px;margin-bottom:20px;">
						<tr > 
								<td style="font-size:20px; padding:10px;">ID</td>
								<td style="font-size:20px; padding:10px;">Title</td>
								<td style="font-size:20px; padding:10px;">Price</td>
								<td style="font-size:20px; padding:10px;">Quantity</td>
							</tr>';
			if(isset($_SESSION['cart']))
			{
				$total_price=0;
				$q=0;
				for($i=0;$i<count($_SESSION['cart']);$i++)
				{
					$total_price = $total_price + $_SESSION['cart'][$i]['price'];
					$q++;
					echo ' <tr > 
									<td style="font-size:20px; padding:10px;">'.$_SESSION['cart'][$i]['id'].'</td>
									<td style="font-size:20px; padding:10px;">'.$_SESSION['cart'][$i]['title'].'</td>
									<td style="font-size:20px; padding:10px;">'.$_SESSION['cart'][$i]['price'].'</td>
									<td style="font-size:20px; padding:10px;"> 1</td>
							</tr>';
					
				}
				echo ' <tr > 
							<td style="font-size:20px; padding:10px;"></td>
							<td style="font-size:20px; padding:10px;">Total</td>
							<td style="font-size:20px; padding:10px;">'.$total_price.'</td>
							<td style="font-size:20px; padding:10px;">'.$q.'</td>
					</tr>';
				echo '</table></center>';
				$_SESSION['total_price']=$total_price;
				$_SESSION['quantity']=$q;
				
			}
			
			
			
		?>
		<center><a href="order.php" style="text-decoration:none;color:#fff;background-color:green;padding:10px;">Place Order</a></center>
	</div>
	// <?php
		// require_once "userLeftMenu.php";
	// ?>
	
	
	</body>
</html>