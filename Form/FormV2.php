<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>

	<h1>Form</h1>


	<?php
		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			$fname = $_POST['f_name'];
			$lname = $_POST['l_name'];

			if (empty($fname)) {
				echo "Please fill up the form properly";
			}
			else {
				echo "First Name is: " . sanitize($fname);
				echo "<br>";
				echo "<br>";
				echo "Last Name is: " . sanitize($lname);
			}
		}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	?>

</body>
</html>
