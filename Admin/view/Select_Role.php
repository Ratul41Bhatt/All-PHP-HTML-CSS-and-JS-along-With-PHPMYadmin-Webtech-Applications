<!DOCTYPE html>
<html>
<head>
	<title>Select Role</title>
<meta charset="utf-8">

</head>
  <body>
		<fieldset>
			<i><center><h1> <b>Gracious Giver</b></h1></center></i>
		</fieldset>
    <center><h2>Select Role</h2></center><br><br><br><br>
    <form  action="NGO_Login.php" method="post">
      <fieldset>
       <center><legend><h3>NGO</h3></legend></center><br><br>
          &nbsp&nbsp&nbsp<p>NGO can register in this system and do their program very comfortablly. They can request for any type of charitable program.
						They can also request for volunteer if they need . They can't go for program without submiting the deatils of the program.After their program request admin can accpet
						the program and post it to the website for Donations and volunteers.
        </p>
      </fieldset><br><hr>
      <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="
Proceed"><center>

    </form><br><br>
    <form  action="Volunteer_Login.php" method="post">
      <fieldset>
       <center><legend><h3>Volunteer</h3></legend></center><br><br>
        <p>Anyone can help by volunteering in this system. If anyone wants to perform some volunteery task they can see the program details and and if they are iterested the can request for the program.
					But there is a condition if anyone wants to be volunteer they must be older than 18 years old.
        </p>
      </fieldset><br><hr>
         <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="
Proceed"><center>

    </form><br><br>
    <form  action="Donor_Login.php" method="post">
      <fieldset>
       <center><legend><h3>Donor</h3></legend></center><br><br>
        <p>A donor is a person who donates something of value to a person or an organization, especially a charity. A wealthy donor might leave her book collection to the local library in her will.In this program anyone one can donate by registering to the system.Their is no restriction
					for the donate amount. They can also report about anything.
        </p>
      </fieldset><br><hr>
      <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="
Proceed"><center>

    </form>
  </form><br><br>
  <form  action="./view/Admin_Login.php">
    <fieldset>
     <center><legend><h3>Admin</h3></legend></center><br><br>
      <p>One who administers, especially one who works as a manager in the system.Admin or manager can manage or see all the details of the program.
				Admin can add a manager to the system and enter a new user and edit his profile. Admin can post for a program and accept or reject a program.

      </details>.
      </p>
    </fieldset><br><hr>
    <center><input type="submit" class="btn btn-info" name="submit" style="width:200px;" value="
Proceed"><center>

</form><br>
<fieldset>
	<center><p> <b>Copyrights&nbsp&nbsp&copy <?php echo date("Y/m/d") ; ?></b></p></center>
</fieldset>
  </body>
</html>
