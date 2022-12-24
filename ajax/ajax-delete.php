<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","gracious_giver") or die("Connection Failed");

$sql = "DELETE FROM program WHERE program_id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
