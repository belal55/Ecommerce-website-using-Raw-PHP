<?php 

		session_start();
		if(!isset($_SESSION['email']))
		{
			header("location: login.php");
		}
		require_once('../data/dbconnector.php');
		require_once "../service/user_service.php";
		require_once "../service/product_service.php";
		
		
	 
	  
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
	

</body>
</html>
