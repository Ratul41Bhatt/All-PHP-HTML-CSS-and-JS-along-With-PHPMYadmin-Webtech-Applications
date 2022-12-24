<?php
	// include database connection file

	include "../model/db_conn.php";

	// delete data from student table..

	if (isset($_POST['deleteId'])) {
		
		$deleteId = $_POST['deleteId'];
		// implode function break the array in to string 
		$deleteId = implode(',', $deleteId);
		
		$query  = "DELETE FROM orders WHERE id IN($deleteId)";

		$result = mysqli_query($conn, $query);

		if ($result === true) {
			echo 1;
		}else{
			echo 0;
		}

	}
	
?>