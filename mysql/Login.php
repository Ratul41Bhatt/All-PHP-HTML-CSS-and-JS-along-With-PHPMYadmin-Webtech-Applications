<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
<br><br>

   <form action="Action.php" method="POST">
      <fieldset>
       <i><center><legend><h2>Login</h2></legend></center></i><br>
        <center> Username :*&nbsp&nbsp&nbsp <input type="text" name="name" placeholder="Username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] :"" ?>"></center><br><br>
        <center>Password :*&nbsp&nbsp&nbsp <input type="password" name="password" placeholder="Password" value=""></center><br>
						<center><a href="Register.php">Sign Up</a><br><br></center>

      </fieldset><br>
         <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="Submit"></center>
    </form><br>

</form><br><br><br>
  </body>
</html>
