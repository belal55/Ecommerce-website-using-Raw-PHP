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
		require_once "../service/orderDetails_service.php";
		
		
		
		
		
		if(isset($_GET['pid']))
		{
			$products=getProductUsingId($_GET['pid']);
			$_SESSION['cart'][]=$products;
		}

		if($_SERVER['REQUEST_METHOD']== "POST"){
			$result=addOrder($_SESSION['id'], $_POST['shipadd'], $_SESSION['total_price']);
			if($result)
			{
				echo'<script> 
						alert("Order Placed Successfully!!");
					</script>';
					
				for($i=0;$i<count($_SESSION['cart']);$i++)
				{
					$result2=addOrderDetails($_SESSION['cart'][$i]['id'],$_SESSION['cart'][$i]['price'],1,$_SESSION['cart'][$i]['price']);
				}
				unset($_SESSION['cart']);
				
				
			}
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
	
	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<input type="text" placeholder="Enter Shipping Address" name="shipadd" value="<?php if (isset($_POST['shipadd'])) { echo $_POST['shipadd']; } ?>" /></br>
				
					
					<input type="submit" value="Confirm Order" name="order_btn" id="order_btn" />
				
				</center>
			</form>
		</div>
	</div>
	
	</body>
</html>