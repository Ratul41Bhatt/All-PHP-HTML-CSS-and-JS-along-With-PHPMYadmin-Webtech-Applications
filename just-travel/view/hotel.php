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
        <title>Hotel</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>


        <main>
            <table style="width:35%; margin:0 auto; margin-top: 25px;">
                <thead>
                    <tr>
                        <th colspan="4">
                            <h1>HOTELS</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul class="hotel">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/hotels/hotel-1.png" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h2>Hotel The Cox Today</h2>
                                        <h4><i class="fas fa-map-marked-alt"></i>&nbsp;Location: Hotel The Cox Today Rd,
                                            Chittagong 4700</h4>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-bed"></i>&nbsp;4-star hotel</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-coffee"></i>&nbsp;Free breakfast</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-wifi"></i>&nbsp;Free wifi</small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-utensils"></i>&nbsp;Restaurant
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-umbrella-beach"></i>&nbsp;Beach access
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-dumbbell"></i>&nbsp;Gym
                                        </small>
                                    </dl>
                                    <dl>
                                        <h3><i class="fas fa-money-bill-wave"></i>&nbsp;<del>Regular Price: 5500 BDT</del></h3>
                                        <h2><i class="fas fa-tags"></i>&nbsp;Discount Price: 3878 BDT</h2>
                                    </dl>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="payment.php" style="text-decoration:none; color:black"><big>BOOK NOW</big></a>
                                            </center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="hotel">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/hotels/hotel-2.png" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h2>Sayeman Beach Resort</h2>
                                        <h4><i class="fas fa-map-marked-alt"></i>&nbsp;Location: Marine Drive, Road, Cox's Bazar
                                            4700</h4>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-bed"></i>&nbsp;5-star hotel</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-coffee"></i>&nbsp;Free breakfast</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-wifi"></i>&nbsp;Free wifi</small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-utensils"></i>&nbsp;Restaurant
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-umbrella-beach"></i>&nbsp;Beach access
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-dumbbell"></i>&nbsp;Gym
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-swimmer"></i>&nbsp;Outdoor pool
                                        </small>
                                    </dl>
                                    <dl>
                                        <h3><i class="fas fa-money-bill-wave"></i>&nbsp;<del>Regular Price: 10000 BDT</del></h3>
                                        <h2><i class="fas fa-tags"></i>&nbsp;Discount Price: 8000 BDT</h2>
                                    </dl>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="payment.php" style="text-decoration:none; color:black"><big>BOOK NOW</big></a>
                                            </center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="hotel">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/hotels/hotel-3.png" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h2>Ocean Paradise Hotel & Resort</h2>
                                        <h4><i class="fas fa-map-marked-alt"></i>&nbsp;Location: 28-29, Hotel Motel Zone, Road,
                                            Cox's Bazar 4700</h4>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-bed"></i>&nbsp;4-star hotel</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-coffee"></i>&nbsp;Free breakfast</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-wifi"></i>&nbsp;Free wifi</small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-utensils"></i>&nbsp;Restaurant
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-umbrella-beach"></i>&nbsp;Beach access
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-dumbbell"></i>&nbsp;Gym
                                        </small>
                                    </dl>
                                    <dl>
                                        <h3><i class="fas fa-money-bill-wave"></i>&nbsp;<del>Regular Price: 8000 BDT</del></h3>
                                        <h2><i class="fas fa-tags"></i>&nbsp;Discount Price: 6500 BDT</h2>
                                    </dl>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="payment.php" style="text-decoration:none; color:black"><big>BOOK NOW</big></a>
                                            </center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>



                    <tr>
                        <td>
                            <ul class="hotel">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/hotels/hotel-4.png" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h2>Sikder Resort & Villas</h2>
                                        <h4><i class="fas fa-map-marked-alt"></i>&nbsp;Location: Opposite of ECO Park, Kuakata
                                        </h4>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-bed"></i>&nbsp;4-star hotel</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-coffee"></i>&nbsp;Free breakfast</small>
                                    </dl>
                                    <dl>
                                        <small><i class="fas fa-wifi"></i>&nbsp;Free wifi</small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-utensils"></i>&nbsp;Restaurant
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-umbrella-beach"></i>&nbsp;Beach access
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-dumbbell"></i>&nbsp;Gym
                                        </small>
                                    </dl>
                                    <dl>
                                        <small>
                                            <i class="fas fa-hot-tub"></i>&nbsp;Hot tub
                                        </small>
                                    </dl>
                                    <dl>
                                        <h3><i class="fas fa-money-bill-wave"></i>&nbsp;<del>Regular Price: 6000 BDT</del></h3>
                                        <h2><i class="fas fa-tags"></i>&nbsp;Discount Price: 4000 BDT</h2>
                                    </dl>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="payment.php" style="text-decoration:none; color:black"><big>BOOK NOW</big></a>
                                            </center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>
                    </tr>

                    </tr>
                </tbody>
            </table>
        </main>

        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php
} else {
    header('location: ../control/login.php');
}
?>