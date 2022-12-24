<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>History</title>
  </head>
  <body>
    <h1>Page 3[History]</h1><br>
    <h3>Consersion Site</h3><br>
    1.<a href="Home.php">Home</a> &nbsp 2.<a href="Conversion.php">Conversion Rate</a>&nbsp 3.<a href="History.php">History</a><br><br><br>
    <?php
    $handle = fopen("historydata.json", "r");
    $data = fread($handle, filesize("historydata.json"));
    $exploded = explode("\n", $data);

    $arr1 = array();
    for ($i =0; $i < count($exploded); $i++){

       $decode = json_decode($exploded[$i]);
       array_push($arr1, $decode);
    }

    ?>
    <table border="1">
    <thead>
    <tr>
     <th>Catagory</th>
     <th>Unit</th>
     <th>Result</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($j=0; $j <count($arr1)-1; $j++) {
    echo "<tr>";
    echo "<td>";
    echo $arr1[$j]->Catagory;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Unit;
    echo "</td>";
    echo "<td>";
    echo $arr1[$j]->Result;
    echo "</td>";
    echo "</tr>";
    }
    ?>
    </tbody>
    </table>
  </body>
</html>
