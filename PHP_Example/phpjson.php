<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP JSON</title>
</head>
<body>
  <h1>PHP JSON</h1>
  <?php 

    $arr1  = array("Apple","Mango","Banana");
    var_dump($arr1);
    echo "<hr>";
    $encode = json_encode($arr1);
    var_dump($encode);
    $arr2= array('fullname' => 'Mir Md Ratul','age'=>'21');
    var_dump($arr2);
    echo "<hr>";
    $encode2 = json_encode($arr2);
    var_dump($encode2);
   ?>
</body>
</html>