<?php 
	
	 require_once "../service/user_service.php";
?>
<?php
	//for login
	require_once('../data/dbconnector.php');
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$result=login_service($email,$password);
			
			if($result['password']==$password and $result['password']!=null)
			{
				if(isset($_POST['remember']))
				{
					setcookie('id',$result['id'],time()+(60*60*24));
					setcookie('email',$result['email'],time()+(60*60*24));
					setcookie('name',$result['name'],time()+(60*60*24));
					setcookie('password',$result['password'],time()+(60*60*24));
				}
				session_start();
				//$_SESSION['loggedIn']=true;
				$_SESSION['id']=$result['id'];
				$_SESSION['name']=$result['name'];
				$_SESSION['email']=$result['email'];
				$_SESSION['password']=$result['password'];
				header('Location:dashboard.php');
			}
			else
			{
				echo'<script> 
							alert("Email or passwrod is invalid!!");
					</script>';
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
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="">about</a></li>
					<li><a href="">products</a></li>
					<li><a href="">contact </a></li>
					<li><a href="login.php">login</a></li>
				
				</ul>
			</div>
		</div>
	</header>

	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<input type="text" placeholder="Enter Email" name="email" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>" /></br>
					
					<input type="password" placeholder="Enter Password" name="password" value="<?php if (isset($_POST['password'])) { echo $_POST['password']; } ?>" /></br>
					
					<input style="width:20px;margin-left:40px;display:inline-block;float:left;" type="checkbox"  name="remember" /><h3 style="float:left;color:#fff;text-align:left;margin-top:20px;margin-left:10px;">Remember Me</h3></br>
					
					<input type="submit" value="Login" name="login_btn" />
					
					<a href="registration.php"><input class="reg_btn" type="button" value="Register" name="reg_btn" /></a>
				
				</center>
			</form>
		</div>
	</div>
</body>
</html>