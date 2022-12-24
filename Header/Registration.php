<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>
	<center><h1>Registration</h1></center>
	<form action="RegistrationAction.php" method="POST">
    <fieldset>
      <legend><h3>Basic Information</h3></legend>
		First Name:* <input type="text" name="firstname" placeholder="FirstName">
		<br><br>
		Last Name* <input type="text" name="lastname" placeholder="Lastname">
		<br><br>
    Gender*:
      <input type="radio"  name="gender" class="gender" value="Male" >Male
      <input type="radio" name="gender" class="gender" value="Female" >Female
      <br><br>
   Date of Birth :* <input  type="date" name="u_birthday" ><br><br>
   Religion:*&nbsp	&nbsp	&nbsp	&nbsp<select class="religion" name="Religion">
                                 <option>Hindhu</option>
                                 <option>Muslim</option>
                                 <option>Christian</option>
                                 <option>Jews</option>
                                 <option>Buddha</option>
                             </select><br><br>
  </fieldset><br><br>
  <fieldset>
 <legend><h3>Contact Information</h3></legend>
 Present Address:* &nbsp	&nbsp&nbsp	&nbsp<input type="text" class="Address" name="Address" placeholder="Present Address" /><br><br>
Permanent Address:* <input type="text" name="Permanent" placeholder="Permanent Address" ><br><br>
Phone Number:* &nbsp	&nbsp&nbsp	&nbsp<input type="tel" name="Phone" placeholder="Phone Number"><br><br>
Email:* &nbsp	&nbsp&nbsp	&nbsp &nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp<input  type="email" name="mail"  placeholder="Email" ><br><br>
Personal Website link:* <input type="url" name="urlink" placeholder="Personal Link"><br><br>
</fieldset><br><br>
<fieldset>
   <legend><h3>Account Information</h3></legend>
   Username:* <input type="text" name="u_name" placeholder="Username"><br><br>
   Password:* <input type="password" name="pass" placeholder="Password"><br><br>
</fieldset>
		<center><input type="submit"  name="submit"></center>
	</form>
</body>
</html>
