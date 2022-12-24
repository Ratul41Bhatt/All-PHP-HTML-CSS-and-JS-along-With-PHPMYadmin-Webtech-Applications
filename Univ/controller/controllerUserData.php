<?php
include("../model/connection.php");

	if(isset($_POST['signup'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
		
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));

		$check_username_query = "select user_name from admin where un_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <9 ){
			echo"<script>alert('Password should be minimum 9 characters!')</script>";
            echo "<script>window.open('../view/signup-user.php', '_self')</script>";
			exit();
		}

		$check_email = "select * from regis where un_email='$email'";
		$run_email = mysqli_query($con,$check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exist, Please try using another email')</script>";
            echo "<script>window.open('../view/signup-user.php', '_self')</script>";
			exit();
		}


		$insert = "insert into regis (un_name,un_pass,un_email,un_image)
		values('$first_name','$pass','$email','default_cover.jpg')";

		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
			echo "<script>window.open('../view/login-user.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
            echo "<script>window.open('../view/signup-user.php', '_self')</script>";
		}
	}
?>
