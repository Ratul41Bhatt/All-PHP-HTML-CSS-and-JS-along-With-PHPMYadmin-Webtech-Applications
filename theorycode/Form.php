<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>

	<h1>Form</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		First Name: <input type="text" name="firstname">
		<br><br>

		Last Name: <input type="text" name="lastname">
		<br><br>

		<input type="submit" name="submit">
	</form>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			echo "First Name is: " . htmlentities($_POST['firstname']);	
			echo "<br>";
			echo "<br>";
			echo "Last Name is: " . htmlentities($_POST['lastname']);
		}

	?>

</body>
</html>