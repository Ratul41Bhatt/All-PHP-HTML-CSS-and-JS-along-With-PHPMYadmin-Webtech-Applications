<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Form Desing</title>


  </head>
  <body>
     <center><h1>Registration</h1></center>

            <form  action="FormV2.php" method="POST">

                 <fieldset>


                  <center><legend><h2>Basic Information</h2></legend></center>


                 Firstname:* <input type="text" name="f_name" placeholder="Firstname"  required value="<?php echo $_POST['f_name']??""; ?>"><br><br>
                 Lastname:* <input  type="text" name="l_name" placeholder="Lastname" required value="<?php echo $_POST['l_name']??""; ?>"><br><br>

                Gender

                      <input type="radio" class="gender" name="gender"  />
                      <label for="gendermale">Male</label>
                      <input type="radio" class="gender" name="gender" value="Female"/>
                          <label for="gendermale">Female</label>
                          <input type="radio" class="gender" name="gender" value="Other"/>
                          <label for="gendermale">Other</label><br><br>
                Date of Birth :* <input  type="date" name="u_birthday" required value="<?php echo $_POST['u_birthday']??""; ?>"><br><br>
                        Religion:*&nbsp	&nbsp	&nbsp	&nbsp<select class="religion" name="Religion" required value="<?php echo $_POST['Religion']??""; ?>">

                                  <option>Hindhu</option>
                                  <option>Muslim</option>
                                  <option>Christian</option>
                                  <option>Jews</option>
                                  <option>Buddha</option>

                              </select><br><br>

              </fieldset><br><br>
               <fieldset>


                <center><legend><h2>Contact Information</h2></legend></center>


                Present Address:* &nbsp	&nbsp&nbsp	&nbsp<input type="text" class="Address" name="Address" placeholder="Present Address" required value="<?php echo $_POST['Address']??""; ?>"/><br><br>



              Permanent Address:* <input type="text" name="Permanent" placeholder="Permanent Address" required value="<?php echo $_POST['Permanent']??""; ?>"><br><br>

              Phone Number:* &nbsp	&nbsp&nbsp	&nbsp<input type="tel" name="Phone" placeholder="Phone Number" required value="<?php echo $_POST['Phone']??""; ?>" ><br><br>
              Email &nbsp	&nbsp&nbsp	&nbsp &nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp&nbsp	&nbsp<input  type="email" name="mail"  placeholder="Email" required value="<?php echo $_POST['mail']??""; ?>"><br><br>
            Personal Website link <input type="url" name="urlink" placeholder="Personal Link"required value="<?php echo $_POST['urlink']??""; ?>"><br><br>
          </fieldset><br><br>
          <fieldset>


           <center><legend><h2>Account Information</h2></legend></center>


         Username:* <input type="text" name="u_name" placeholder="Username" required value="<?php echo $_POST['u_name']??""; ?>"><br><br>



        Password:* <input type="password" name="pass" placeholder="Password" required value="<?php echo $_POST['pass']??""; ?>"><br><br>

     </fieldset>
            <center><input type="submit" name="submit"><center>
            </form>
            <br><br>
            <?php
            
                $f_name = $_POST['f_name'];
                $l_name = $_POST['l_name'];
                $u_birthday = $_POST['u_birthday'];
                $Religion = $_POST['Religion'];
                $u_address = $_POST['Address'];
                $per_address = $_POST['Permanent'];
                $Phone = $_POST['Phone'];
                $u_link = $_POST['urlink'];
                $mail = $_POST['mail'];
                $u_name = $_POST['u_name'];
                $pass = $_POST['pass'];
                if (empty($f_name)||empty($l_name)||!isset($_POST['gender'])||empty($u_birthday)||empty($u_reli)||empty($u_address)||empty($per_address)||empty($Phone)||empty($mail)||empty($u_link)||empty($u_name)||empty($pass)) {
                  echo "Please fill up the form properly";
                }

              }

            ?>
  </body>
</html>
