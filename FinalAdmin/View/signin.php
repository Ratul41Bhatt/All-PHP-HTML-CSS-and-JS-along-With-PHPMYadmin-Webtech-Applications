<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #18ab9a;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
</style>
<body>
  <?php
	include("../Controller/header1.php");
	?>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Admin Login to Gracious Giver</strong></h3>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<input type="email" name="email" placeholder="Email"class="form-control input-md"><br>
					<div class="overlap-text">
						<input type="password" name="pass" placeholder="Password" class="form-control input-md"><br>
						<a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_pass.php">Forgot?</a>
					</div>
           <br><br>
					<center><button id="signin"  class="btn btn-info btn-lg" name="login">Login</button></center>
          <?php include("../Controller/login.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
		 include "../Controller/footer.php";
		 ?>
</body>
</html>
