
<?php
    include("./includes/connection.php");
     if ($_SERVER['REQUEST_METHOD'] === "POST") {
			 $username = $_POST['name'];
			 $password = $_POST['password'];

				if(empty($username) or empty($password)){

					echo "Please fill up the form properly";
				}
        else{
        $sql = "SELECT * FROM user WHERE u_name= '$username' AND pass = '$password'  ";
  			$stmt = $conn->prepare($sql);

  			$stmt->execute();
  			$result = $stmt->get_result();



  			if($result > 0)
  			{

         echo "<script>window.open('home.php', '_self')</script>";
  			}
  			else
  			{
  				echo "Login error";
  			}
       }
}
		 ?>
		 <br><br><br>
		 <form action="Login.php" method="GET">
			 <fieldset>
			 	<i><h3>Please Try again...</h3></i>
			</fieldset><br>
		 	<center><input type="submit" class="btn btn-info" name="submit"value="Try Again"><center>
		 </form>
