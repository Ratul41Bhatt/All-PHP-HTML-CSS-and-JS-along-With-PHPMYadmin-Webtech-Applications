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
        <title>Events</title>
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
                        <th colspan="2">
                            <h1>EVENTS</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul class="events">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/event-details/event-details-1.jpg" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Sreemangal</h1>
                                    </dl>
                                    <dl>
                                        <i class="far fa-calendar-alt fa-1x"></i>&nbsp;17 Sep, 2021 - 31 Oct, 2021
                                    </dl>
                                    <dl>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;Sreemangal, Bangladesh
                                    </dl>
                                    <dl>
                                        <p>The tales of a tea heaven! Enjoy 1 Night & 2 Days Group Tour to Sreemangal at the
                                            best prices!</p>
                                    </dl>
                                    <dl>
                                        <del>
                                            <h2>BDT: 5500</h2>
                                        </del>
                                        <h2>BDT: 5000</h2>
                                    </dl>
                                    <br>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="event-1.php" style="text-decoration:none; color:black"><big>SEE
                                                        DETAILS</big></a></center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="events">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/event-details/event-details-2.jpg" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Tanguar Haor</h1>
                                    </dl>
                                    <dl>
                                        <i class="far fa-calendar-alt fa-1x"></i>&nbsp;17 Sep, 2021 - 31 Oct, 2021
                                    </dl>
                                    <dl>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;Sunamganj, Bangladesh
                                    </dl>
                                    <dl>
                                        <p>Thinking of a Getaway? Enjoy 1 Night & 2 Days Group Tour to Tanguar Haor at the best
                                            rates!</p>
                                    </dl>
                                    <dl>
                                        <del>
                                            <h2>BDT: 4000</h2>
                                        </del>
                                        <h2>BDT: 3500</h2>

                                    </dl>
                                    <br>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="event-2.php" style="text-decoration:none; color:black"><big>SEE
                                                        DETAILS</big></a></center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <ul class="events">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/event-details/event-details-3.jpg" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Sundarban Group Tour</h1>
                                    </dl>
                                    <dl>
                                        <i class="far fa-calendar-alt fa-1x"></i>&nbsp;01 Oct, 2021 - 31 Oct, 2021
                                    </dl>
                                    <dl>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;Sundarban, Bangladesh
                                    </dl>
                                    <dl>
                                        <p>The Forest Awaits! Get best offers for 1 Night & 2 Days Group Tour to Sundarban at
                                            the best rates!...</p>
                                    </dl>
                                    <dl>
                                        <del>
                                            <h2>BDT: 5000</h2>
                                        </del>
                                        <h2>BDT: 4750</h2>
                                    </dl>
                                    <br>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="event-3.php" style="text-decoration:none; color:black"><big>SEE
                                                        DETAILS</big></a></center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="events">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <img src="./images/event-details/event-details-4.jpg" alt="" height="250px" width="400px">
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Bandarban Group Tour</h1>
                                    </dl>
                                    <dl>
                                        <i class="far fa-calendar-alt fa-1x"></i>&nbsp;17 Sep, 2021 - 31 Oct, 2021
                                    </dl>
                                    <dl>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;Bandardban, Bangladesh
                                    </dl>
                                    <dl>
                                        <p>The Mountains are calling! Enjoy 1 Night & 2 Days Group Tour to Bandarban at the best
                                            price!</p>
                                    </dl>
                                    <dl>
                                        <del>
                                            <h2>BDT: 6000</h2>
                                        </del>
                                        <h2>BDT: 5750</h2>
                                    </dl>
                                    <br>
                                    <hr>
                                    <dl>
                                        <fieldset>
                                            <center><a href="event-4.php" style="text-decoration:none; color:black"><big>SEE
                                                        DETAILS</big></a></center>
                                        </fieldset>
                                    </dl>
                                </fieldset>

                            </ul>
                        </td>
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