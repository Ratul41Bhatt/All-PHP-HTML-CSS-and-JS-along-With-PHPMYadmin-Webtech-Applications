<?php
$con = mysqli_connect("localhost","root","","eone");

if($con){
  echo "Connection succesfull";
}


 ?><br><br><br><br>
<?php
$hostname = "localhost";
$username = "root";
$pass= "";

$conn = new mysqli($hostname,$username,$pass,"eone");

if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}

$sql = "INSERT INTO user (user_id, password,gender) VALUES ('Nadim','789','female')";

$response = $conn->query($sql);

if ($response) {

	echo "Record Inserted Succssfully";
}
else {
	echo "Failed to Insert";
}

echo "<hr>";

$sql = "SELECT id,user_id, password, email,gender FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
    echo "ID :";
    echo $row["id"];
    echo "<br>";
    echo "Name :";
		echo $row["user_id"];
    echo "<br>";
    echo "Gender :";
    echo $row["gender"];
		echo "<hr>";
	}
}

$conn->close();
 ?>
