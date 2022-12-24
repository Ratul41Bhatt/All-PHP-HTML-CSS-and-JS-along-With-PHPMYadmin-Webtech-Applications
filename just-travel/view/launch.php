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
        <title>Launch</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>
        <?php include 'header.php'; ?>

        <main>
            <fieldset style="width:41%; margin:0 auto; margin-top: 35px;">
                <form action="">
                    <label for="">From:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="cox-bazar">Cox's Bazar</option>
                        <option value="bargona">Bargona</option>
                        <option value="bangabandhu-island">Bangabandhu Island</option>
                        <option value="elisha">Elisha</option>
                        <option value="kuakata">Kuakata</option>
                        <option value="mawa">Mawa</option>
                        <option value="saint-martin">Saint Martin</option>
                    </select>


                    <label for="">To:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="cox-bazar">Cox's Bazar</option>
                        <option value="bargona">Bargona</option>
                        <option value="bangabandhu-island">Bangabandhu Island</option>
                        <option value="elisha">Elisha</option>
                        <option value="kuakata">Kuakata</option>
                        <option value="mawa">Mawa</option>
                        <option value="saint-martin">Saint Martin</option>
                    </select>
                    <!-- <br><br> -->

                    <label for="">JOURNEY DATE:</label>
                    <input type="date" id="journey-date" name="journey-date">

                    <input type="submit" value="Submit">
                </form>
            </fieldset>

            <div style="width:100%; margin:0 auto; margin-top: 35px;">
                <center>
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/nhwtKxTDrRY?list=PL4pcb3feGRyYbJdcz1XnnpF_zpi9R75vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>

            </div>


            <fieldset style="width:50%; margin:0 auto; margin-top: 25px;">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4">
                                <h1>POPULAR LAUNCH ROUTES</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="launch-list routes">
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chandpur</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Kolmi</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Khali</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Cawkhali</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chand Khali</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chondromohon</a></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-list routes">
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Darial</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chairmanbari Ghat</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Kolmi</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To C&B Ghat</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Voyarabi</a></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-list routes">
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chobipur</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chalita Toli</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Borhan</a></dl>
                                    <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Babugong</a></dl>
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



            <?php include 'footer.php'; ?>
    </body>

    </html>
<?php
} else {
    header('location: ../control/login.php');
}
?>