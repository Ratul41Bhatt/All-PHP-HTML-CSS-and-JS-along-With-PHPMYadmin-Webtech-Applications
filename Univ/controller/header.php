<?php
include("../model/connection.php");
include("../controller/functions.php");
?>

	<body>
		<nav class="navbar navbar-default">
			<div id="re"class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">University management</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
		<?php
		$user = $_SESSION['un_email'];
		$get_user = "select * from regis where un_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);

		$user_id = $row['un_id'];
		$user_name = $row['un_name'];
	
		$user_pass = $row['un_pass'];
		$user_email = $row['un_email'];
		
		$user_cover = $row['un_image'];
		

		?>    
		      
			    <li><a href="Home.php">Home</a></li>
					<li><a href="student_manage.php">Student Management</a></li>
					<li><a href="Show.php">Show Students</a></li>
					
					
				
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<form class="navbar-form navbar-left" method="get" action="logout.php">
							<div class="form-group">

							</div>
							<button type="submit" style="width:80px;color:black;background-color:white;" class="btn btn-info" name="search">Logout </button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
