<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    function registration()
  {

      var fname= document.getElementById("t1").value;
      var lname= document.getElementById("t2").value;
      var pwd= document.getElementById("t3").value;

      var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
      var letters = /^[A-Za-z]+$/;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if(fname=='')
      {
          alert('Please enter your firstname');
      }
      else if(!letters.test(fname))
      {
          alert('Name field required only alphabet characters');
      }
      else if(lname=='')
      {
          alert('Please enter your last name');
      }
      else if(!letters.test(lname))
      {
          alert('Name field required only alphabet characters');
      }
      else if(pwd=='')
      {
          alert('Please enter Password');
      }
      else if(!pwd_expression.test(pwd))
      {
          alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
      }

      else
      {
             alert('Thank You for Registration & You are Redirecting to Website');
             window.location = "home.html";
      }
  }
</script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
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
		background-color: #18ab9a;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}

</style>
<body>
<div class="row">
	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">Gracious Giver</h1></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Add Gracious Giver</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" id="t1"  class="form-control" placeholder="First Name" name="first_name">
					</div><br>
					<div>
						  <input type="submit" value="Create Account" class="btn" onclick="registration()" />
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
