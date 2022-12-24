<?php

$conn = mysqli_connect("localhost","root","","university_database") or die("Connection Failed");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["st_id"]}</td><td>{$row["f_name"]} {$row["l_name"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["st_id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["st_id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
