<?php
	$name = "";
	$ownername = "";
	$password = "";
	$username = "";
	$typeof  = "";
	$emailaddress = "";
	$confirmpassword = "";
	$weblink = "";
	$presentaddress = "";
	$permanentaddress = "";
	
	$nameErrMsg = "";
	$ownernameErrMsg = "";
	$emailErrMsg = "";
	$usernameErrMsg = "";
	$passwordErrMsg = "";
	$confirmpasswordErrMsg = "";
	$ownernameErrMsg = "";
	$typeof ErrMsg = "";
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
	
		$weblink = $_POST[' weblink'];
		$presentaddress = $_POST['presentaddress'];
		$permanentaddress = $_POST['permanentaddress'];
	
		if (empty($_POST[' name'])) {
			$nameErrMsg = "*  Name is Required";
			$errors[] = $nameErrMsg;
		} else if (!preg_match("/^[a-z A-z ]*$/", $_POST['name'])) {
			$nameErrMsg = "Only alphabets and whitespace are allowed.";
			$errors[] = $nameErrMsg;
		} else {
			$name = $_POST['name'];
		}
	
		if (empty($_POST['ownername'])) {
			$ownernameErrMsg = "*  Owner Name is Required";
			$errors[] = $ownernameErrMsg;
		} else if (!preg_match("/^[a-z A-z ]*$/", $_POST[' ownername'])) {
			$ownernameErrMsg = "Only alphabets and whitespace are allowed.";
			$errors[] = $ ownernameErrMsg;
		} else {
			$ownername = $_POST[' ownername'];
		}
	
		if (empty($_POST['emailaddress'])) {
			$emailErrMsg = "*Email Address is Required";
			$errors[] = $emailErrMsg;
		} else if (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)) {
			$emailErrMsg = "Invalid email format. Email like : example@example.com";
			$errors[] = $emailErrMsg;
		} else {
			$emailaddress = $_POST['emailaddress'];
		}
	
		if (empty($_POST[' username'])) {
			$usernameErrMsg = "*User Name is Required";
			$errors[] = $usernameErrMsg;
		} else if (!preg_match("/^[a-zA-z0-9]*$/", $_POST[' username'])) {
			$usernameErrMsg = "Alphabets and Numbers combination are allowed.";
			$errors[] = $usernameErrMsg;
		} else {
			$username = $_POST[' username'];
		}
	
		$number = preg_match('@[0-9]@', $_POST[' password']);
		$uppercase = preg_match('@[A-Z]@', $_POST[' password']);
		$lowercase = preg_match('@[a-z]@', $_POST[' password']);
		$specialChars = preg_match('@[^\w]@', $_POST[' password']);
	
		if (empty($_POST[' password'])) {
			$passwordErrMsg = "*Password is Required";
			$errors[] = $passwordErrMsg;
		} else if (strlen($_POST[' password']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
			$passwordErrMsg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
			$errors[] = $passwordErrMsg;
		} else {
			$ password = $_POST[' password'];
		}
	
		if (empty($_POST['confirmpassword'])) {
			$confirmpasswordErrMsg = "*Confirm Password is Required";
			$errors[] = $confirmpasswordErrMsg;
		} else if ($_POST[' password'] != $_POST['confirmpassword']) {
			$confirmpasswordErrMsg = "Enter Same Password.";
			$errors[] = $confirmpasswordErrMsg;
		} else {
			$confirmpassword = $_POST['confirmpassword'];
		}
	
		if (isset($_REQUEST['typeof ']) && $_REQUEST['typeof '] === '0') {
			$typeof ErrMsg = "Select Your   Type.";
			$errors[] = $typeof ErrMsg;
		} else {
			$typeof  = $_POST['typeof '];
		}

		// $image = $_FILES['image']['name'];
		// $tempname = $_FILES["image"]["tmp_name"];    
        // $folder = "image/".$image;
	
			if ($nameErrMsg === '' && $emailErrMsg === '' && $usernameErrMsg === '' && $passwordErrMsg === '' && $confirmpasswordErrMsg === '' && $ ownernameErrMsg === '' && $typeof ErrMsg === '') {
	
				require_once "../Model/connection.php";
	
				require_once "../Model/Registrasion_Data.php";
	
				$conn->close();
			} 
			else {
				
			}
	} else {
	}
?>