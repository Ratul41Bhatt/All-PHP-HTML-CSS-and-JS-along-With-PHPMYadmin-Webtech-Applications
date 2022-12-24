<?php
session_start();

if (isset($_COOKIE['flag'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <title>Profile</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>

        <main>
            <center>
                <h1>PROFILE</h1>
            </center>
            <fieldset style="margin: 0 auto; margin-top: 25px; width: 35%;">
                <center>
                    <img src="./images/users-profile-picture/user-1.png" alt="" width="50%" height="auto">
                    <br>
                    <h1>Saidul Mursalin Khan</h1>
                </center>
                <br>
                <hr>
                <p><strong><i class="far fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Username:</strong>&nbsp;@KhanSaab</p>
                <hr>
                <p><strong><i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Password:</strong>&nbsp;Kh@n1980</p>
                <hr>
                <p><strong><i class="fas fa-at"></i>&nbsp;&nbsp;&nbsp;Email:</strong>&nbsp;saidulmursalinkhan@gmail.com</p>
                <hr>
                <p><strong><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;Gender:</strong>&nbsp;Male</p>
                <hr>
                <p><strong><i class="fas fa-baby"></i>&nbsp;&nbsp;&nbsp;Date of Birth:</strong>&nbsp;01-11-2000</p>
                <hr>
                <p><strong><i class="fas fa-house-user"></i>&nbsp;&nbsp;&nbsp;Address:</strong>&nbsp;383/1 Free School Street, Dhanmondi, Dhaka-1205</p>
                <hr>
                <center>
                    <fieldset style="width:120px;">
                        <a href="edit-profile.php" style="text-decoration:none; color:black"><i class="far fa-edit"></i>&nbsp;Edit Profile</a>
                    </fieldset>
                    <fieldset style="width:35%; margin-top: 10px;">
                        <a href="order-status.php" style="text-decoration:none; color:black"><i class="fas fa-shopping-cart"></i>&nbsp;See Order Status</a>
                    </fieldset>
                </center>



            </fieldset>
        </main>

        <?php include 'footer.php'; ?>

    </body>

    </html>

<?php
} else {
    header('location: ../control/login.php');
}
?>