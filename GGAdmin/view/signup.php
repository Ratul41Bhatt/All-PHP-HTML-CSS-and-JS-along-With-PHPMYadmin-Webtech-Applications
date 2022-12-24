<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
*,*::after,*::before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    user-select: none;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items:center;
    font-family: 'Oswald', sans-serif;
    font-size: 12px;
    background-color: #ecf0f3;
    color: #121213;
}

.form-control{
  width: 350px;
  height: 40px;
  margin: 4px 0;
  padding-left: 25px ;
  font-size: 13px;
  letter-spacing:0.15px;
  border: none;
  outline: none;
  background-color: #ecf0f3;
  transition: 0.25s ease;
  border-radius: 8px;
  box-shadow: inset 2px 2px 4px #d1d9e6,inset -2px -2px 4px #f9f9f9  ;

}
.logo{
  background: url(../images/r.gif);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin : 0 auto;
  box-shadow: 0px 0px 2px #5f5f5f, 0px 0px 0px 5px #ecf0f3,8px 8px 15px #a7aaaf,-8px -8px 15px #fff;

}
.main-div{
 	 width: 70%;
 	 height:103%;
 	 padding: 60px 35px 35px 35px;
 	 border-radius: 40px;
 	 background-color: #ecf0f3;
 	 box-shadow: 13px 13px 20px #cbced1,
 	 -13px -13px 20px #fff;
  }
	.main-content{
		width: 50%;
		height: 30%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}

</style>
<body>

<div class="main-div">
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<div class="logo">

				</div>
				<h3 style="text-align: center;"><strong>Join Gracious Giver</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_country" required="required">
							<option disabled>Select your Country</option>
							<option>Bangladesh</option>
							<option>United States of America</option>
							<option>India</option>
							<option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Germany</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required">
							<option disabled>Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
					</div><br>
					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>

					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
					<?php include("../includes/insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
