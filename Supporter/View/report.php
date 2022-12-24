<?php


include("../controller/Top.php");

?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/styles.css">
	<title>Report An Issue</title>
</head>
<body>

	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<h3>Contact us</h3>
		<label>Enter your email</label>
		<input type="email" name="email" value="">

		<label>Enter a subject</label>
		<input type="text" name="subject" value="">

		<label>Enter your message</label>
		<textarea name="message">This is my message</textarea>

		<input type="submit" name="submit" value="Send message">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	
</body>
</html>
<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>
