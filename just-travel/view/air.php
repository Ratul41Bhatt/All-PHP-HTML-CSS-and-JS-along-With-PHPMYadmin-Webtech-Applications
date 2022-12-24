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
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        <title>Air</title>
    </head>

    <body>

        <?php include 'header.php'; ?>

        <main>



            <fieldset style="width:35%; margin:0 auto; margin-top: 35px;">
                <form action="">
                    <label for="">From:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="joshore">Joshore</option>
                        <option value="saiadpur">Saiadpur</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="cox-bazar">Cox's Bazar</option>
                        <option value="sylhet">Sylhet</option>
                    </select>


                    <label for="">To:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="joshore">Joshore</option>
                        <option value="saiadpur">Saiadpur</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="cox-bazar">Cox's Bazar</option>
                        <option value="sylhet">Sylhet</option>
                    </select>
                    <!-- <br><br> -->

                    <label for="">JOURNEY DATE:</label>
                    <input type="date" id="journey-date" name="journey-date">

                    <input type="submit" value="Submit">
                </form>
            </fieldset>




            <table style="width:50%; margin:0 auto; margin-top: 25px;">
                <thead>
                    <tr>
                        <th colspan="4">
                            <h1>AVAILABLE PACKAGES</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul class="air-ticket-packages">
                                <dl><img src="./images/air-ticket-packages/air-ticket-1.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/air-ticket-packages/air-ticket-2.png" style="width: 100%; height: auto;" alt=""></dl>
                            </ul>
                        </td>

                        <td>
                            <ul class="air-ticket-packages">
                                <dl><img src="./images/air-ticket-packages/air-ticket-3.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/air-ticket-packages/air-ticket-4.png" style="width: 100%; height: auto;" alt=""></dl>
                            </ul>
                        </td>

                        <td>
                            <ul class="air-ticket-packages">
                                <dl><img src="./images/air-ticket-packages/air-ticket-5.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/air-ticket-packages/air-ticket-6.png" style="width: 100%; height: auto;" alt=""></dl>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>

            <fieldset style="width:40%; margin:0 auto; margin-top: 25px;">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4">
                                <h1>POPULAR AIR ROUTES</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-list routes">
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-COX'S BAZAR</a></dl>
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-CHITTAGONG</a></dl>


                                </ul>
                            </td>

                            <td>
                                <ul class="air-list routes">
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-RAJSHAHI</a></dl>
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-SYLHET</a></dl>

                                </ul>
                            </td>

                            <td>
                                <ul class="air-list routes">
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-JOSHOR</a></dl>
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BARISAL</a></dl>
                                    <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-SAIADPUR</a></dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <div style="width:50%; margin:0 auto; margin-top: 25px;">

                <center>
                    <h1>We Accept</h1>
                </center>
                <img src="./images/payment-methods.png" alt="" style="width: 100%; height: auto;">

            </div>
        </main>

        <?php include 'footer.php'; ?>
    </body>

    </html>

<?php
} else {
    header('location: ../control/login.php');
}
?>