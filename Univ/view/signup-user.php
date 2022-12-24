<?php require_once "../controller/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
             
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="University Name" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" >
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" >
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/signup.js"></script>   
</body>
</html>
<?php

if (isset($_POST['signup'])) {
	$f_name = htmlentities($_POST['name']);
	$u_pass = htmlentities($_POST['password']);
	$u_email = htmlentities($_POST['email']);
	
  if ($f_name == '') {
     echo "<script>alert('Please enter valid Name')</script>";
     echo "<script>window.open('signup-user.php','_self')</script>";

     exit();
     // code...
   }
  
    elseif ($u_pass=='') {
         echo "<script>alert('Please enter valid password')</script>";
         echo "<script>window.open('signup-user.php','_self')</script>";

         exit();
    }
    elseif ($u_email=='') {
         echo "<script>alert('Please enter valid email')</script>";
         echo "<script>window.open('signup-user.php','_self')</script>";

         exit();     // code...
    }

}


 ?>
