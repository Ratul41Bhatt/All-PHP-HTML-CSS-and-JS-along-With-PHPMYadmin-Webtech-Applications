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
     <i><center><h1>Donations</h1></center></i>
     <hr><br><br>
     <center><i><h3>Donor List</h3></i></center>
     <?php
      $handle = fopen("../model/Donordata.json", "r");
      $data = fread($handle, filesize("../model/Donordata.json"));
      $exploded = explode("\n", $data);

      $arr1 = array();
      for ($i =0; $i < count($exploded); $i++){

         $decode = json_decode($exploded[$i]);
         array_push($arr1, $decode);
      }

      ?>
      <table border="30" align = "center">
      <thead>
      <tr>
       <th>Donor Name</th>
       <th>Phone Number</th>
       <th>Bank Account Number</th>
       <th>Donation Amount</th>
      </tr>
      </thead>
      <tbody>
      <?php
      for ($j=0; $j <count($arr1)-1; $j++) {
      echo "<tr>";
      echo "<td>";
      echo $arr1[$j]->Donorname;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->Phone;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->BankAccount;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->Amount;
      echo "</td>";
      echo "</tr>";
      }
      ?>

  </body>
</html>
