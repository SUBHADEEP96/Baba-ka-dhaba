<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'ppd');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login For PindPunjabiDhaba</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
			
			
			
				<form class="login100-form validate-form" method="post" action="" name="">
					

					<span class="login100-form-title p-b-34 p-t-27">
						Admin Login
					</span>

					<div class="wrap-input100 " >
						<input class="input100" type="text" name="username" placeholder="Username" required autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 " >
						<input class="input100" type="password" name="password" placeholder="Password" required autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					
				</form>
				
				<?php
				
				if(isset($_POST['submit']))
				{	
			     $username=$_POST['username'];
				 $password=$_POST['password'];
				
				$result=mysqli_query($con,"select * from admin_login where username='$username' and password='$password' ");
				
				while($row=mysqli_fetch_array($result))
				{
					
					$_SESSION["admin"]=$row["username"];
					?>
					
				<script>
				
				
				window.location="index.php";
				
				</script>	
					
				<?php	
				}
				}
				?>
				
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>