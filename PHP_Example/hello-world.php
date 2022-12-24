<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
    <h1>Hello PHP</h1>
    <?php echo 2+5 ; ?><br>
    <?php
      $txt = "Hello";
      echo $txt," " ,"World";
     ?><br>

     <?php 
          $fruits = array("apple","banana","mango");
          print_r($fruits); echo"<br>";
          var_dump($fruits);
          echo "<br>";
          $b = "false";
          var_dump($b);
      ?><br>
      <?php  
         for ($i=0; $i <5; $i++) { echo $i ," ";
          
         }
         $i=0;
         while ($i<5) {
           echo $i ," ";
           $i++;
   
         }
         echo "<br>";
         $myArray = array("abc",450,true);
         foreach ($myArray as $arr) {
          echo "$arr ";
          
         }

       ?><br>
       <?php 
             define('PI', 3.1416);

        ?>
       <?php 
          function addnumber($num1,$num2){
            return $num1+$num2;
          }
          $result = addnumber(1,PI);
          echo "result =" ,$result;
        ?>
  </body>
</html>
