
    <?php
     if ($_SERVER['REQUEST_METHOD'] === "POST") {
			 $username = $_POST['name'];
			 $password = $_POST['password'];
			 $remember = isset($_POST['rememberme'])? $_POST['rememberme'] : null ;

				if(empty($username) or empty($password)){

					echo "Please fill up the form properly";
				}else {
          $data_s = file_get_contents("../model/admindata.json");
         $data_s = json_decode($data_s, true);
         foreach($data_s as $row)
       {
           if($row["Username"]==$username && $row["Password"]==$password){
           $isset=true;
           break;
           }
       }

			if($isset){
           if($remember === "on"){
						 setcookie("username",$username, time()+ 3600);
					 }

					 session_start();
					 $_SESSION['username'] = $username;
					 header("Location:../view/adminhome.php");
					}
					else{

								echo "Your Username or Password is incorrect.";
					}
				}
			}

		 ?>
		 <br><br><br>
		 <form action="../view/Admin_Login.php" method="GET">
			 <fieldset>
			 	<i><h3>Please Try again...</h3></i>
			</fieldset><br>
		 	<center><input type="submit" class="btn btn-info" name="submit"value="Try Again"><center>

		 </form>
