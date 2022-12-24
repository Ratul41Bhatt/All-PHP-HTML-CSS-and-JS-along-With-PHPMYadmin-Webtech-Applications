<?php


include("../controller/Top.php");

?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php
	// include database connection file

	include "../model/db_conn.php";

	// fetch data from student table..

	$output = "";
	
	$sql = "SELECT * FROM orders ORDER BY id ASC";
	
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		$output .= "<table class='table table-hover table-striped'>
		<thead>
   		   <tr>
		    <th>Id</th>
		    <th>Product name</th>
		    <th>Product Type</th>
		    <th>Delete</th>
		   </tr>
		</thead>";
		while ($row = mysqli_fetch_assoc($query)) {
		$output .= "<tbody>
			<tr>
		    	    <td>{$row['id']}</td>
			    <td>{$row['o_name']}</td>
			    <td>{$row['o_type']}</td>
			    <td><input type='checkbox' class='delete-id' value='{$row['id']}'></td>
			</tr>
    		    </tbody>";
		}
	$output .="</table>";
		echo $output;
	}else{
		echo "<h5>No record found</h5>";
	}
	
?>
<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>
