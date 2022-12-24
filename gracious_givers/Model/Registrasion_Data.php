<?php
	$sql = "INSERT INTO  data ( un_Name , User_Name,  un_Password,  Owner_Name, Type_Of, Email_Address, Present_Address, Permanent_Address,  Web_Link, Profile_Picture) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ssssssssss', $Name, $User_Name, $Password, $Owner_Name, $Type_Of , $Email_Address, $Present_Address, $Permanent_Address, $Web_Link, $Profile_Picture);
	$Name = $name;
	$User_Name = $username;
	$Password = $confirmpassword;
	$Owner_Name = $ownername;
	$Type_Of = $typeof ;
	$Email_Address = $emailaddress;
	$Present_Address = $presentaddress;
	$Permanent_Address = $permanentaddress;
	$ s_Web_Link = $ weblink;
	$Profile_Picture = $image;

	if ($stmt->execute()) {
		$success[] = "Account Created Succssfully";
	} else {
		$errors[] = "Something is wrong.Try again";
	}
?>