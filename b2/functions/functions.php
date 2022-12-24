function user_posts(){
 	global $con;
 	if(isset($_GET['u_id'])){
 		$u_id = $_GET['u_id'];
 	}
 	$get_posts = "select * from posts where user_id='$u_id' ORDER by 1 DESC LIMIT 5";

 	$run_posts = mysqli_query($con,$get_posts);
 	while ($row_posts = mysqli_fetch_array($run_posts)) {
 		$post_id = $row_posts['post_id'];
 		$user_id = $row_posts['user_id'];
 		$upload_image = $row_posts['upload_image'];
 		$post_date = $row_posts['post_date'];

 		$user = "select * from users where user_id = '$user_id' AND posts='yes'";

 					$run_user = mysqli_query($con,$user);
 					$row_user = mysqli_fetch_array($run_user);

 					$user_name = $row_user['user_name'];
 					$user_image = $row_user['user_image'];

 	    if (isset($_GET['u_id'])) {
 						$u_id = $_GET['u_id'];
 						// code...
 					}
 					$get_posts ="select user_email from users where user_id='$u_id'";
 					$run_user = mysqli_query($con,$get_posts);
          $row = mysqli_fetch_array($run_user);
 					$user_email = $row['user_email'];

 					$user = $_SESSION['user_email'];

 					$get_user = "select * from users where user_email='$user'";
 					$run_user = mysqli_query($con,$get_user);

 					$row = mysqli_fetch_array($run_user);
 					$user_id = $row['user_id'];
 					$u_email = $row['user_email'];
 					if ($u_email != $user_email) {

 						echo"<script>window.open('my_post.php?u_id=$user_id','_self')</script>";
 						// code...
 					}
 	else{
 						if($content=="No" && strlen($upload_image) >= 1){
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						<p><img src='users/$user_image' class='img-circle'width='80px' height='80px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<img id='posts-img' src='imagepost/$upload_image' style='height:600px;'>
						</div>
					</div><br>

				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

		else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						<p><img src='users/$user_image' class='img-circle'width='80px' height='80px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<p>$content</p>
							<img id='posts-img' src='imagepost/$upload_image' style='height:600px;'>
						</div>
					</div><br>

				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

		else{
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						<p><img src='users/$user_image' class='img-circle' width='80px' height='80px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<h3><p>$content</p></h3>
						</div>
					</div><br>

				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

 	    }

    }

 }