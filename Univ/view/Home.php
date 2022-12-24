<!DOCTYPE html>
<?php
session_start();
include("../controller/header.php");

if(!isset($_SESSION['un_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<?php
		$user = $_SESSION['un_email'];
		$get_user = "select * from regis where un_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['un_name'];
	?>
	<title><?php echo "$user_name"; ?></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
	#cover-img{
		height: 400px;
		width: 100%;
	}#profile-img{
		position: absolute;
		top: 160px;
		left: 40px;
	}
	#update_profile{
		position: relative;
		top: -33px;
		cursor: pointer;
		left: 93px;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.1);
		transform: translate(-50%, -50%);
	}
	#button_profile{
		position: absolute;
		top: 82%;
		left: 50%;
		cursor: pointer;
		transform: translate(-50%, -50%);
	}
	#own_posts{
		border: 5px solid #5ED6E7 ;

		border-radius: 5px;
		padding: 40px 50px ;

	}
	#post_img{
		height: 300px;
		width: 100%;
	}
</style>
<body>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<?php
			echo"
			<div>
				<div><img id='cover-img' class='img-rounded' src='cover/$user_cover' alt='cover'></div>
				<form action='Home.php?un_id=$user_id' method='post' enctype='multipart/form-data'>

				<ul class='nav pull-left' style='position:absolute;top:10px;left:40px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn btn-default' data-toggle='dropdown'>Change Cover</button>
						<div class='dropdown-menu'>
							<center>
							<p>Click <strong>Select Cover</strong> and then click the <br> <strong>Update Cover</strong></p>
							<label class='btn btn-info'> Select Cover
							<input type='file' name='u_cover' size='60' />
							</label><br><br>
							<button name='submit' class='btn btn-info'>Update Cover</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			</div>
			<br>
			";
		?>
		<?php

			if(isset($_POST['submit'])){

				$u_cover = $_FILES['u_cover']['name'];
				$image_tmp = $_FILES['u_cover']['tmp_name'];
				$random_number = rand(1,100);

				if($u_cover==''){
					echo "<script>alert('Please Select Cover Image')</script>";
					echo "<script>window.open('Home.php?un_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "cover/$u_cover.$random_number");
					$update = "update regis set un_image='$u_cover.$random_number' where un_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your Cover Updated')</script>";
					echo "<script>window.open('Home.php?un_id=$user_id' , '_self')</script>";
					}
				}

			}

		?>
	</div>


	
	
</body><br><br>
<?php
		 include "../controller/footer.php";
		 ?>
</html>
