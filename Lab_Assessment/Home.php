<?php

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $val= $_POST['value'];
   $select = $_POST['select_catagory'];

   if (empty($val) or empty($select)) {
     echo "Please give proper input..";
   }else{
     if(file_exists("coversiondata.json")){
               $handle = fopen("coversiondata.json","r");
               $data = fread($handle,filesize("coversiondata.json"));
               $data = explode("\n",$data);

               for($i=0;$i< count($data) -1 ;$i++){
                 $json = json_decode($data[$i]);
                 if($select === $json->Catagory ){
                   $rate = $json->Rate;
                   $result = $rate*$val;
                   $handle = fopen("historydata.json", "a");
                    $arr1 = array('Catagory' => $select, 'Unit' => $val,'Result'=>$result);
                    $arr1 = json_encode($arr1);
                    fwrite($handle, $arr1 . "\n");

                 }

             }
         }
       }
   }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page1</title>
  </head>
  <body>

    <h1>Page 1[Home]</h1><br>
    <h3>Consersion Site</h3><br>
    1.<a href="Home.php">Home</a> &nbsp 2.<a href="Conversion.php">Conversion Rate</a>&nbsp 3.<a href="History.php">History</a><br>
    <h3>Converter:</h3><br>

     <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
       Select Catagory :*&nbsp &nbsp&nbsp&nbsp<select  name="select_catagory">

                                    <option>Select a Value</option>
                                    <?php
                                   for ($j=0; $j <count($arr1)-1; $j++) {
                                     echo "<option>";
                                     echo $arr1[$j]->Catagory;
                                     echo "</option>";
                                   }
                                     ?>

                                </select><br><br><br>
       Value &nbsp&nbsp&nbsp<input type="text" name="value" placeholder="Enter a value">&nbsp <input type="submit"  name="submit"  value="Submit"><br><br>
      Result&nbsp&nbsp&nbsp<input type="text" name="result" placeholder="Result" value="<?php echo $result??"" ;?>" >


    </form><br>



  </body>
</html>
