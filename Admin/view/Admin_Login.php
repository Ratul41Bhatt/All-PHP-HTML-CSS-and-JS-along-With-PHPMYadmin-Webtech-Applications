<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include "../controller/Header1.php";
?>
</head>
  <body>
<br><br>

   <form action="../controller/AdminAction.php" method="POST">
      <fieldset>
       <i><center><legend><h2>Admin Login</h2></legend></center></i><br>
        <center>Admin Username :*&nbsp&nbsp&nbsp <input type="text" name="name" placeholder="Username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] :"" ?>"></center><br><br>
        <center>Admin Password :*&nbsp&nbsp&nbsp <input type="password" name="password" placeholder="Password" value=""></center><br>
						<center><a href="forgetpass.php">Forget Password</a><br><br></center>
				<i><b><center> <input type="checkbox" name="rememberme">Remember Me<center></i>

      </fieldset><br>
         <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="Submit"></center>
    </form><br>

		<form action="Select_Rolel.php">
		  <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="
Go Back To Select Role"></center>

</form><br><br><br>
  </body>
	<?php
 include "../controller/Footer.php";
 ?>
</html>
