<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","university_database") or die("Connection Failed");

$sql = "SELECT * FROM student WHERE st_id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>First Name</td>
      <td><input type='text' id='edit-fname' value='{$row["f_name"]}'>
          <input type='text' id='edit-id' hidden value='{$row["st_id"]}'>
      </td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type='text' id='edit-lname' value='{$row["l_name"]}'></td>
    </tr>
    <tr>
      <td></td>
      <td><input type='submit' id='edit-submit' value='save'></td>
    </tr>";

  }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
