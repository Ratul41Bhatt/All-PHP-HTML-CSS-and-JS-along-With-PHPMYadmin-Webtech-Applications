<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget Password</title>
  </head>
  <body>
   <center><h1>Forget Password</h1></center>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
      <fieldset>
      <legend><h3>Reset Password</h3></legend><br>
          <b><center>Enter Username :</b>*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" placeholder="Username" value=""></center><br>
         <b><center>New Password :</b>*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" name="newpass" placeholder="New Password" value=""></center><br>
        <b><center>Confirm Password :</b>*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" name="Confirmpass" placeholder="Confirm Password" value=""><center><br>
      </fieldset><br>
         <center><input type="submit" class="btn btn-info" name="submit"  value="Submit"></center>
    </form><br>
    <?php

      if ($_SERVER['REQUEST_METHOD'] === "GET" & count($_REQUEST) >0) {
        $username = $_GET['name'];
        $newpass = $_GET['newpass'];
        $Confirmpass = $_GET['Confirmpass'];
        if(empty($username) or empty($newpass) or empty($Confirmpass)) {
        echo "Please fill up the form properly";
        }
        elseif ($newpass === $Confirmpass) {

          $username = validate($username);

          $handle1 = fopen("admindata.json","w");
          $handle2 = fopen("admindata.json","r");
          $data = fread($handle2,filesize("admindata.json"));
          $data = explode("\n",$data);
          $arr = array();
          for($i=0;$i< count($data)-1 ;$i++){

                 $json = json_decode($data[$i]);
                 if($username === $json->username ){
                   $json->pass = $newpass;
                   array_push($arr,$json);


                 }else {
                    array_push($arr,$json);
                 }

             }
             $str = "";
             for ($j=0; $j <count($arr) ; $j++) {
               $str .= json_encode($arr[$j]);
               $str .= "\n";

               // code...
             }
             fwrite($handle1,$str);



          echo "Password Successfully Updated";
        }
        else {
          echo "Confirm password doesn't match please try again. ";
        }
      }

      function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <br><br><br><br><br><br>
    <form action="adminlogout.php" method="GET">
      <input type="submit" class="btn btn-info" name="submit"value="Logout">

    </form>
  </body>
</html>
