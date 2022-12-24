<?php
	session_start();

	$uname = $_SESSION['username'];
				
    if(file_exists("../Controller/NGO's_Data.json")){
        $handle = fopen("../Controller/NGO's_Data.json","r");
        $data = fread($handle,filesize("../Controller/NGO's_Data.json"));
        $data = explode("\n",$data);

        for($i=0;$i< count($data) -1 ;$i++) {
            $json = json_decode($data[$i]);
                 		
            if($uname === $json->User_name ){
                $NGO_Name = $json->NGO_Name;
                $NGO_Owner_Name = $json->NGO_Owner_Name;
                $Type_Of_NGO = $json->Type_Of_NGO;
                $Email_Address = $json->Email_Address;
                $NGOs_Web_Link = $json->NGOs_Web_Link;
                $Present_Address = $json->Present_Address;
                $Permanent_Address = $json->Permanent_Address;
            }
			else{
				echo "User Name Not Match.";
			}
     	}
    }
	else{
		echo "File Not Found.";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NGO's Profile</title>
</head>
<body>
	<br>
	<center> <h2>My Profile</h2></center>
	<br>
	<hr>
	<?php
		require '../Model/Menu_Header.php';
	?>
	<form action="Edit_Profile.php" method="POST">
		<br>
		<fieldset>
			<br>
			<p style="font-size:18px">User Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['username'];?></p>

			<p style="font-size:18px">NGO's Owner Name : &nbsp; <?php echo $NGO_Owner_Name;?></p>

			<p style="font-size:18px">NGO's Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $NGO_Name;?></p>
			
			<p style="font-size:18px">NGO's Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Type_Of_NGO;?></p>
			
			<p style="font-size:18px">Email Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Email_Address;?></p>
			
			<p style="font-size:18px">Present Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Present_Address;?></p>
			
			<p style="font-size:18px">Permanent Address : &nbsp;&nbsp; <?php echo $Permanent_Address;?></p>
			
			<p style="font-size:18px">NGOs Web Link : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $NGOs_Web_Link;?></p>
			<br>
		</fieldset>
		<p align="right"> <input type="submit" name="Edit Profile" value="Edit Profile" style="width: 12%;"></P>
	</form>
</body>
</html>