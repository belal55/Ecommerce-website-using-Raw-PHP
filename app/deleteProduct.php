<?php 

		session_start();
		if(!isset($_SESSION['email']))
		{
			header("location: login.php");
		}
		require_once('../data/dbconnector.php');
		require_once "../service/user_service.php";
		require_once "../service/product_service.php";
		$result = getProductCategory();	
		$cid=0;
		if(isset($_POST['selectCat']))
		{
			$cname=$_POST["cat"];
			global $cid;
			$cid=getCategoryIdByName($cname);
			
		}
		$products = getProductByCategoryId($cid);
		
		
			
		 
	   
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>E-Commerse</title>
	<link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
	<header class="menu" style="display:block;">
	
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
	<div class="left_menu"> 
		<ul>
			<li><input type="button" value="Dashboard"/></li>
			<li><input type="button" name="product" value="Products"/>
				<ul>
					<li><a href="addProduct.php">Add Product</a></li>
					<li><a href="deleteProduct.php">Delete Product</a></li>
					<li><a href="updateProduct.php">Update Proudct</a></li>
				</ul>
			</li>
			<li><input type="button" value="Category"/>
				<ul>
					<li><a href="addCategory.php">Add Category</a></li>
					<li><a href="#">Delete Category</a></li>
					<li><a href="#">Update Category</a></li>
				</ul>
			</li>
			<li><input type="button" value="Orders"/></li>
			<li><input type="button" value="Users"/></li>
			<li><a href="logout.php"><input type="button" value="Logout"/></a></li>
		</ul>
	</div>
	
	<div class="delete_area_right"> 
	
		<div class="add_category_area" style="margin-left: 0px;width: 50%; float:left;">
				
			<div class="login_area">
				<h2 style="text-align:center; color:#FFF">Select Category</h2>
				<form method="POST">
					<center>
						<select class="gender_class" name="cat" id="cat" >
							<option class="option_class" value="">Select Category</option>
							<?php
								
								while($row=mysqli_fetch_assoc($result))
								{
									echo '<option value="'.$row['category_name'].'">'.$row['category_name'].'</option>';
								}
								
							?>
						</select></br>
						
						<input type="submit" name="selectCat" id="selectCat" value="Select"/>
						
					
					</center>
				</form>
			</div>
		</div>
		<div class="delete_pro_area"> 
			<?php
				echo '<table border="1px" style="font-size:20px; padding:10px;">
						<tr > 
								<td style="font-size:20px; padding:10px;">ID</td>
								<td style="font-size:20px; padding:10px;">Title</td>
								<td style="font-size:20px; padding:10px;">Price</td>
								<td style="font-size:20px; padding:10px;"> </td>
							</tr>';
				while($row=mysqli_fetch_assoc($products))
				{
					echo ' <tr > 
								<td style="font-size:20px; padding:10px;">'.$row['id'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['title'].'</td>
								<td style="font-size:20px; padding:10px;">'.$row['price'].'</td>
								<td style="font-size:20px; padding:10px;"> <a href="confirmDeleteProduct.php?id='.$row['id'].'">delete</a></td>
							</tr>';
				}
				echo '</table>';
				
			?>
			
		
		</div>
	
	</div>
	
	
	
	
</body>
</html>