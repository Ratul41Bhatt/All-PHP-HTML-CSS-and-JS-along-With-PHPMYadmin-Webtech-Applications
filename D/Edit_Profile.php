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
	<title>Edit Profile</title>
</head>
<body>
	<br>
	<center> <h2>Edit Profile</h2></center>
	<br>
	<hr>
	<?php
		require '../Model/Menu_Header.php';
	?>
	<form action="" method="POST">
		<br>
		<fieldset>
			<br>
			<p style="font-size:18px">User Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['username'];?></p>
			
			<p style="font-size:18px">NGO's Owner Name : &nbsp; <input type="text" name="ngoownername" placeholder="NGO Owner Name" value="<?php echo $NGO_Owner_Name;?>"></p>
			
			<p style="font-size:18px">NGO's Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="ngoname" placeholder="NGO Name" value="<?php echo $NGO_Name;?>"></p>
			
			<p style="font-size:18px">NGO's Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select class="TypeofNGO" name="TypeofNGO" value = "<?php echo $Type_Of_NGO;?>" >


					<option>Charitable</option>
					<option>Participatory</option>
					<option>Service</option>
					<option>Empowering</option>

					</select></p>
			
			<p style="font-size:18px">Email Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="emailaddress" placeholder="Email Address" value="<?php echo $Email_Address;?>"></p>
			
			<p style="font-size:18px">Present Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="presentaddress" placeholder="Present Address" value="<?php echo $Present_Address;?>"></p>
			
			<p style="font-size:18px">Permanent Address : &nbsp;&nbsp; <input type="text" name="permanentaddress" placeholder="Permanent Address" value="<?php echo $Permanent_Address;?>"></p>
			
			<p style="font-size:18px">NGOs Web Link : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="ngosweblink" placeholder="NGO's Web Link" value="<?php echo $NGOs_Web_Link;?>"></p>
			<br>
		</fieldset>
		<p align="right"> <input type="submit" name="Save" value="Save" style="width: 10%;"></P>
	</form>
</body>
</html>