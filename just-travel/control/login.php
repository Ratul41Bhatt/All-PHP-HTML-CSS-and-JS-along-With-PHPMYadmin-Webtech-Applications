<?php
session_start();

if (isset($_POST['login'])) {

  $username   = $_POST['username'];
  $password   = $_POST['password'];

  if ($username != "") {
    if ($password != "") {

      $myfile = fopen('../model/user.txt', 'r');

      while (!feof($myfile)) {

        $data = fgets($myfile);
        $user = explode('|', $data);

        if ($username == trim($user[1]) && $password == trim($user[2])) {
          setcookie('flag', 'true', time() + 3600, '/');
          header('location: ../view/bus.php');
        } else {
          break;
        }
      }
      echo "<center><h1>[!] Invalid Username/Password</h1></center>";
    } else {
      echo "<center><h1>[!] Invalid Password</h1></center>";
    }
  } else {
    echo "<center><h1>[!] Invalid Username</h1></center>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">

  <title>Login</title>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body>

  <div>
    <form method="POST">


      <section id="login" style="margin-top:300px;">
        <center>
          <h1>LOGIN</h1>
          <fieldset style="width:20%">
            <br>
            <div>
              <i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Enter Your Username" size="30">
            </div>
            <br>
            <div>
              <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Enter Your Password" size="30">
            </div>
            <br>
            <input type="submit" name="login" value="Log-in"> <br><br>
            <fieldset style="width:30%">
              <a href="register.php" style="text-decoration: none; color:black"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Sign-up</a>
            </fieldset>

          </fieldset>
          <br>
          <fieldset style="width:10%">
            <a href="../index.php" style="text-decoration:none; color:black"><i class="fas fa-arrow-circle-left"></i>&nbsp;Home</a>
          </fieldset>
        </center>


      </section>


    </form>
  </div>
</body>

</html>