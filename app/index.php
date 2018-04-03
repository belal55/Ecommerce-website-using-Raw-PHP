<?php

	session_start();
	if(isset($_SESSION['email'])){
		if($_SESSION['id']==1)
		{
			require_once('header3.php'); 
		}else{
			require_once('header2.php'); 
		}
		
	}else if(isset($_COOKIE['email']))
	{
		
		$_SESSION['id']=$_COOKIE['id'];
		$_SESSION['name']=$_COOKIE['name'];
		$_SESSION['password']=$_COOKIE['password'];
		$_SESSION['email']=$_COOKIE['email'];
		require_once('header2.php'); 
	}else{
		require_once('header.php');
	}
	
	require_once "../service/product_service.php";
	$products = ProductByPaiging();
	require_once('../data/dbconnector.php');
	//for pagination
	$result_per_page=5;
	
	$number_of_pages = getNumberOfPages();
		
?>


	
	<div class="mainbody"> 
		<div class="main_container"> 
			<h1 style="margin:0px; padding:20px;">Featured Product:</h1>
			<div class="pro_and_cart"> 
				<div class="product_container" id="pro_area"> 
				
				<?php
					//for showing products
						
					
						foreach($products as $row)
						{
							
							echo'<div class="product">'
									.'<img style="height:150px; width:80%; margin:auto;display: block;padding: 20px;" src="images\\'.$row['img_path'].'" alt="" />'
									.'<h2 id="pro_title">'.$row['title'].'</h2>'
									.'<h3 id="pro_price">Price: '.$row['price'].' tk</h3>'
									.'<h3 id="pro_stock">Stock: '.$row['stock'].'</h3>
									<h3><a href="cart.php?pid='.$row['id'].'" style="background-color:green;color:#fff;font-size:20px;margin:10px;border-radius:5px;padding:5px;text-decoration:none;">Add to cart</a></h3>
								</div>';
								
						}	
										 
				?>
				
				<?php
				//for showing page numbers
				echo'<center>
						<div class="page_number" style="display:inline-block;color:red;width:100%;margin:auto;margin-top:50px;">';
							for($page=1;$page<=$number_of_pages;$page++)
							{
								echo '<a style="color:#fff; border-radius:2px; text-decoration:none; padding:20px; background-color:green; " href="index.php?page='.$page.'">Page'.$page.'</a>  ';
							}
				    echo'</div>
					</center>';
				?>
				
				</div>
			
				
			</div>
			
			
		</div>
	
	</div>
	
	
</body>
</html>