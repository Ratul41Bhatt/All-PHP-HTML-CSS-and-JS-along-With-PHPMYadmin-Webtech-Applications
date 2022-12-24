<?php 

$filename = "data.json";
$mode_w = "w";
$mode_r = "r";


$initial_content = array("colore"=>array('username','abc', 'password','123'));
$handle1 = fopen($filename, $mode_w);
fwrite($handle1, json_encode($initial_content));

$len = filesize($filename);

$username = "def";
$password = "789";

$handle2 = fopen($filename, "r");
$data = fread($handle2, $len);

if (count($data) > 0) {
	$data = json_decode($data);

	$updated_content = array();

	for ($i = 0; $i < count($data); $i++) {
		if ($username === $data[$i]->username) {
			$data[$i]->password = $password;
		}
		array_push($updated_content, $data[$i]);
	}



	$handle3 = fopen($filename, $mode_w);
	fwrite($handle3, json_encode($updated_content));
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
</head>
<body>

	<h1>Test</h1>

</body>
</html>