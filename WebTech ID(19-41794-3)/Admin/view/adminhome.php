<?php
session_start();
if(count($_SESSION)===0){
  header("Location: adminlogout.php");
}
 ?>
 <?php

    if(file_exists("../model/post.json")){
        $handle = fopen("../model/post.json","r");
        $data = fread($handle,filesize("../model/post.json"));
        $data = explode("\n",$data);

        for($i=0;$i< count($data) -1 ;$i++) {
            $json = json_decode($data[$i]);
                $Program = $json->Program;
                $type = $json->Type;
                $start = $json->Start;
                $end = $json->End;
                $Phone = $json->Phone;
                $post = $json->post;

      }
 }
  else{
    echo "File Not Found.";
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
      require '../controller/Header.php';
    ?>
  <body><br><br>
    <hr>
    <center><h1>Welcome <?php echo $_SESSION['username']; ?></h1></center>
    <hr><br><br>

   <center><form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset>
      <i><center><legend><h2>Post For Volunteers And Donors</h2></legend></center></i><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program : <input type="text" name="Program" value=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Type : <input type="text" name="Type" value=""><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date : <input type="date" name="start" value=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    End Date  : <input type="date" name="end" value=""><br><br>
    Mobile Baking Number: <input type="number" name="mobile" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Details: <textarea type="text" name="Post" value=""></textarea><br><br>
    <center><input type="submit" class="btn btn-info" name="submit"  value="Post"></center>

</fieldset>

</form></center><br><br>

   	<?php
  if (($_SERVER["REQUEST_METHOD"] == "POST")){
    $program = $_POST['Program'];
    $Type = $_POST['Type'];
    $Start = $_POST['start'];
    $end = $_POST['end'];
    $phone = $_POST['mobile'];
    $post = $_POST['Post'];

   			if (empty($program) or empty($Type)  or empty($Start) or empty($end) or empty($phone) or empty($post)) {
   				echo "Please fill up the form properly";
   			}
   			else {
   				  $program = validate(  $program);
   				$Type = validate($Type);
           $Start = validate($Start);
   				$end = validate($end);
   			$phone = validate($phone);
           $post = validate($post);
   				$handle = fopen("../model/post.json", "a");
   				$arr1 = array('Program' => $program, 'Type' => $Type,'Start'=>$Start,'End'=>$end,'Phone'=>$phone,'post'=>$post);
   				$arr1 = json_encode($arr1);
   				fwrite($handle, $arr1 . "\n");

   				echo "Posted Successfully";
   			}
}

   		function validate($data) {
   			$data = trim($data);
   			$data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
   		}
   	?>
    <form action="edit_profile.php" method="POST">
     <br>
     <fieldset>
       <br>
         <i><center><legend><h2>Recent Post</h2></legend></center></i><br>
       <p style="font-size:18px">Program Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Program;?></p>

       <p style="font-size:18px">Program Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $type;?></p>

       <p style="font-size:18px">Start Time : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo   $start;?></p>

       <p style="font-size:18px">End Time : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $end;?></p>

        <p style="font-size:18px">Mobile Banking : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $Phone;?></p>
        <p style="font-size:18px">Details : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $post;?></p>

       <br>
     </fieldset>

   </form><br><br>
    <?php
       include "../controller/Footer.php";
       ?>
  </body>
</html>
