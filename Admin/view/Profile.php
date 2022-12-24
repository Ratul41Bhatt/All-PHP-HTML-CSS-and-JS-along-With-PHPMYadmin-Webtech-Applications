<?php
session_start();
if(count($_SESSION)===0){
  header("Location: adminlogout.php");
}
 ?>
 <?php
   $isset=false;

   if(isset($_SESSION['username']))
   {
       $current = file_get_contents("../model/admindata.json");
       $current = json_decode($current, true);
       foreach($current as $key=>$value){
           if($value['Username']===$_SESSION["username"])
           {
           $F_Name =$value['FirstName'];
           $L_Name=$value['Lastname'];
           $gender=$value['Gender'];
           $u_birthday=$value['DOB'];
           $Religion =$value['Religion'];
           $Phone =$value['Phone'];
           $Email_Address =$value['Email'];
           $Web_Link =$value['Link'];
           $Present_Address =$value['Present Address'];
           $Permanent_Address=$value['Permanent Address'];
           $isset=true;
           break;
           }
       }


   }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
      require '../controller/Header.php';
    ?>
  <body><br><br>
    <hr>
    <center><h1>Hello!! <?php echo $_SESSION['username']; ?></h1></center>
    <hr>
    <form action="edit_profile.php">
  		<br>
  		<fieldset>
  			<br>


  				<p >First Name : &nbsp; <?php echo $F_Name;?></p>

  				<p >Last Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $L_Name;?></p>

  			<p >Gender : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $gender;?></p>

  				<p >Birthday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo   $u_birthday;?></p>

  			<p >Religion : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Religion;?></p>

        <p >Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Phone;?></p>

  				<p >Email Address : &nbsp;&nbsp; <?php echo $Email_Address;?></p>

  		<p >Web Link : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Web_Link;?></p>

        	<p >Present Address : &nbsp;&nbsp; <?php echo $Present_Address;?></p>

          	<p >Permanent Address : &nbsp;&nbsp; <?php echo $Permanent_Address;?></p>
  			<br>
  		</fieldset>

  		<p align="right"> <input type="submit" name="Edit Profile" value="Edit Profile" style="width: 12%;"></P>
  	</form><br><br>

    <?php
   include "../controller/Footer.php";
   ?>

  </body>
</html>
