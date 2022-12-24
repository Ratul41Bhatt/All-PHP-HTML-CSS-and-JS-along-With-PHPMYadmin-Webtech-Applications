<?php

      $current = file_get_contents("../model/donation.json");
      $current = json_decode($current, true);
      foreach($current as $key=>$value){

          $id =$value['ID'];
          $Program=$value['Program'];
          $type =$value['Type'];
          $amount=$value['Amount'];
          $vol =$value['volunteer'];
          $status =$value['status'];
          break;
        }

?>
<?php
if(($_SERVER["REQUEST_METHOD"] == "POST") & count($_REQUEST) >0)
{
  $ID = $_POST['id'];
  $data = file_get_contents("../model/donation.json");
  $data = json_decode($data, true);
if (!empty($data))
{
foreach ($data as $key => $row){
   if ($row["ID"] == $ID){
     $data[$key]['status'] = 'Accepted';
     header("Location:notification.php");
    file_put_contents('../model/donation.json', json_encode($data));
    echo "Accepted";
   }
}
}
else{
  echo "Server Error...";
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
      require '../controller/header.php';
    ?>
  <body>
  <br><br><br><hr>
  <i><center><h1>Activities</h1></center></i>
  <hr><br><br>

<br><br>
   <i><h3>Programs.</h3></i>
   <form action="edit_profile.php" method="POST">
    <br>
    <fieldset>
      <br>

      <p>ID : &nbsp; <?php echo $id;?></p>

      <p>Program Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Program;?></p>

      <p>Program Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $type;?></p>

      <p>Required Amount : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo   $amount;?></p>

      <p>Required Number of Volunteers : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $vol;?></p>

       <p>Status : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $status;?></p>

      <br>
    </fieldset>

  </form>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
   <fieldset>
     <center><input type="number" name="id" value=""></center>
   </fieldset>
    <p align="center"> <input type="submit" name="Save" value="Accept" style="width: 10%;"></P>
  </form>
 </body><br><br>

</html>
