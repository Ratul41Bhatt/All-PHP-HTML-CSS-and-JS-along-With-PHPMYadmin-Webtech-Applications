<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","buyer1") or die("Connection Failed");

$sql = "SELECT * FROM product WHERE p_id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>Product Name</td>
      <td><input type='text' id='edit-fname' value='{$row["p_name"]}'>
          <input type='text' id='edit-id' hidden value='{$row["p_id"]}'>
      </td>
    </tr>
    <tr>
      <td>Details</td>
      <td><input type='text' id='edit-lname' value='{$row["p_details"]}'></td>
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
