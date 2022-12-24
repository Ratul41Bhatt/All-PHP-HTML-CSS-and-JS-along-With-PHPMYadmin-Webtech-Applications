<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File I/O</title>
</head>
<body>

	<h1>File I/O</h1>

	<p>Open the file using:</p>
	<p>fopen("data.txt", "a")</p>
	<hr>

	<?php
		$handle = fopen("data.txt", "a");
	?>

	<br>

	<p>Write something in the file using: </p>
	<p>$write = fwrite($handle, "Mir Md. Kawsur");</p>
	<hr>

	<?php
		$write = fwrite($handle, "Ratul Bhattacharjee");
	?>

	<br>

	<p>After writing, value in $write: </p>
	<p>var_dump($write);</p>
	<hr>

	<?php
		var_dump($write);
	?>
</body>
</html>
