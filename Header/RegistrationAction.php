<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Action</title>
</head>
<body>

	<center><h1>Registration Action</h1></center>

	<?php

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

     if (isset($_POST['gender'])) {


     } else {

       echo 'No gender were selected.';
       echo "<br>";

     }

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$u_birthday = $_POST['u_birthday'];
			$Religion = $_POST['Religion'];
			$u_address = $_POST['Address'];
	    $per_address = $_POST['Permanent'];
		  $Phone = $_POST['Phone'];
			$u_link = $_POST['urlink'];
			$mail = $_POST['mail'];
			$u_name = $_POST['u_name'];
			$pass = $_POST['pass'];
			if (empty($firstname) or empty($lastname) or empty($u_birthday) or empty($Religion)or empty($u_address) or empty($per_address) or empty($Phone) or empty($u_link) or empty($mail) or empty($u_name) or empty($pass)) {
				echo "Please fill up the form properly";
			}
			else {
				$firstname = validate($firstname);
				$lastname = validate($lastname);
        $gender = validate($gender);
				$u_birthday = validate($u_birthday);
				$Religion = validate($Religion);
        $u_address = validate($u_address);
				$per_address =validate($per_address );
				$Phone  = validate($Phone );
				$u_link = validate($u_link);
				$mail = validate($mail);
				$u_name = validate($u_name);
        $pass = validate($pass);


				$handle = fopen("regdata.json", "a");
				$arr1 = array('firstname' => $firstname, 'lastname' => $lastname,'gender'=>$gender,'u_birthday'=>$u_birthday,'Religion'=>$Religion,'Address'=>$u_address,'Permanent'=>$per_address,'Phone'=>$Phone,'urlink'=>$u_link,'mail'=>$mail,'u_name'=>$u_name,'pass'=>$pass);
				$arr1 = json_encode($arr1);
				fwrite($handle, $arr1 . "\n");

				echo "Registration Successful";
			}
		}

		function validate($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

 <?php
 	$handle = fopen("regdata.json", "r");
 	$data = fread($handle, filesize("regdata.json"));


 	$exploded = explode("\n", $data);

 	$arr1 = array();
 	for ($i =0; $i < count($exploded); $i++){

 		 $decode = json_decode($exploded[$i]);
 		 array_push($arr1, $decode);

 	}


 ?>

 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">


 	 <fieldset>
 			<legend><h3>Login</h3></legend>
 			<br>

 <p>	Username: <input type="text" name="name" placeholder="Username">
 	<br><br>

 		Password: <input type="password" name="pass"placeholder="Password">
 	<br><br>
 </p>

 	</fieldset>
 	<br>
  <h2>
 <center><input type="Submit" name="Login"></center>
 </h2>
 	</form>
 <br><br>

 <hr>

 <?php
 	if ($_SERVER['REQUEST_METHOD'] === "GET" & count($_REQUEST) >0) {
 		$flag = false ;
 		for ($k = 0; $k < count($arr1) -1; $k++){
 			if ($arr1[$k]->u_name === $_GET['name'] and $arr1[$k]->pass === $_GET['pass'] ){
 				$flag = true;
 				header("Location: welcome.html");


 		}
 }
 if ($flag === false )
		{
			echo "Username or password is incorret";
		}
}
 ?>
</body>
</html>
