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
     <i><center><h1>Volunteers</h1></center></i>
     <hr>

     <?php
      $handle = fopen("../model/report.json", "r");
      $data = fread($handle, filesize("../model/report.json"));
      $exploded = explode("\n", $data);

      $arr1 = array();
      for ($i =0; $i < count($exploded); $i++){

         $decode = json_decode($exploded[$i]);
         array_push($arr1, $decode);
      }

      ?>
      <br><br>
      <table border="7" align = "right">
      <thead>
      <tr>
       <th>Username</th>
       <th>Project Name</th>
       <th>Progress</th>
       <th>Area</th>
       <th>Experience</th>
       <th>Suggestions</th>
      </tr>
      </thead>
      <tbody>
      <?php
      for ($j=0; $j <count($arr1)-1; $j++) {
      echo "<tr>";
      echo "<td>";
      echo $arr1[$j]->username;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->projectname;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->progress;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->area;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->experience;
      echo "</td>";
      echo "<td>";
      echo $arr1[$j]->suggestions;
      echo "</td>";
      echo "</tr>";
      }
      ?>

  </body>
</html>
