<?php
session_start();

include("../controller/header.php");
if(!isset($_SESSION['un_email'])){
	header("location: index.php");
}

?>
<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
            Student Informations
        </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
    table{
        border-collapse:collapse;
        width: 100%;
        color: #d96459;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th{
        background-color: #d96459;
        color: white;
    }
   </style>
        
    </head>
    <body>
        <h1>Student Informations
        </h1>
        <table>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php
        $conn =mysqli_connect("localhost","root","","university_database");
        if($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);

        }
        $sql = "select st_id,f_name,l_name from student";
        $result =$conn-> query($sql);
        if($result->num_rows >0){
            while($row = $result-> fetch_assoc()){
              echo"<tr><td>".$row["st_id"]."</td><td>".$row["f_name"]."</td><td>".$row["l_name"]."</td></tr>"; 
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn->close();
        ?>
        </table>
    </body><br> <br><br>
    <?php
		 include "../controller/footer.php";
		 ?>
</html>