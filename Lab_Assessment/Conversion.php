<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conversion Page2</title>
  </head>
  <body>
    <h1>Page 2[Conversion Rate]</h1><br>
    <h3>Consersion Site</h3><br>
    1.<a href="Home.php">Home</a> &nbsp 2.<a href="Conversion.php">Conversion Rate</a>&nbsp 3.<a href="History.php">History</a><br>
    <h3>Conversion Rate:</h3><br>

     <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
       Catagory: &nbsp&nbsp&nbsp<input type="text" name="Catagory" placeholder="Enter a value"> Unit:&nbsp&nbsp&nbsp<input type="text" name="unit" placeholder="Enter a value">&nbspRate:&nbsp&nbsp&nbsp<input type="text" name="Rate" placeholder="Enter a value">&nbsp <input type="submit"  name="submit"  value="Submit"><br><br>

     </form>
     <?php

   		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   			$cata= $_POST['Catagory'];
   			$unit = $_POST['unit'];
        $rate = $_POST['Rate'];

   			if (empty($cata) or empty($unit) or empty($rate)) {
   				echo "Please give  proper input..";
   			}
   			else {
   				$cata = validate($cata);
   				$unit = validate($unit);
          $rate = validate($rate);


   				$handle = fopen("coversiondata.json", "a");
   				$arr1 = array('Catagory' => $cata, 'Unit' => $unit,'Rate'=>$rate);
   				$arr1 = json_encode($arr1);
   				fwrite($handle, $arr1 . "\n");

   				echo "Input successful.... ";
   			}
   		}

   		function validate($data) {
   			$data = trim($data);
   			$data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
   		}
   	?>

    <?php
   	$handle = fopen("coversiondata.json", "r");
   	$data = fread($handle, filesize("coversiondata.json"));
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
     <th>Rate</th>
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
    echo $arr1[$j]->Rate;
    echo "</td>";
    echo "</tr>";
  }
    ?>
 </tbody>
</table>
  </body>
</html>
