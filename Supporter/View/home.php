<?php


include("../controller/Top.php");

?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
     <center><h1>Hello, <?php echo $_SESSION['name']; ?></h1></center>
</body>
</html>

<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>