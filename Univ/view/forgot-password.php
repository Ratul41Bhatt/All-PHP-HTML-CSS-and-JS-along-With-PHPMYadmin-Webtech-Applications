<!DOCTYPE html>

<html>
<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/home_style2.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40;
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
	#signup{
		width: 60%;
		border-radius: 30px;
	}
</style>
<body>

<div class="row">
  <div class="col-sm-12">
      <div class="main-content">
          <div class="header">
            <h3 style="text-align:center;">Change Your Password.</h3>
          </div>
          <div class="l_pass">
            <form action="" method="post">
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                 <input id="password" type="password" name="pass"class="form-control" placeholder="New Password" >
              </div><br>


              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" placeholder="Re-enter New Password" name="pass1">
              </div><br>
              <a style="text-decoration: none;float: right;color:#187FAB" data-toggle="tooltip" title="Signin" href="login-user.php">Back to Signin?</a><br><br>
               <center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>
            </form>
          </div>
      </div>
  </div>
</div>
</body>
</html>
<?php
 if (isset($_POST['change'])) {
   $user = $_SESSION['user_email'];
   $get_user="select * from admin where user_email='$user'";
   $run_user = mysqli_query($con,$get_user);
   $row = mysqli_fetch_array($run_user);

   $user_id = $row['user_id'];

   $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
   $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));

   if($pass == $pass1){
     if (strlen($pass)>=6 && strlen($pass)<=60) {
       $update = "update admin set user_pass='$pass' where user_id='$user_id'";
       $run = mysqli_query($con,$update);
       echo"<script>alert('Your Password is changed a moment ago')</script>";
       	echo "<script>window.open('home.php', '_self')</script>";
       // code...
     }
     else if(strlen($pass)==0) {
        echo"<script>alert('Please fillup all the fields')</script>";
       // code...
     }

     else {
        echo"<script>alert('Your Password greater than 6 characters')</script>";
       // code...
     }
   }
   else {
       echo"<script>alert('Your Password did not changed')</script>";
       	echo "<script>window.open('change_password.php', '_self')</script>";
       // code...
     }
   }


 ?>
 <?php
 		 include "../Controller/footer.php";
 		?>
