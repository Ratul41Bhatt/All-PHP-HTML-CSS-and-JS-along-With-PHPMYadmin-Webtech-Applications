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
        <title>Bus</title>

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
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
                        <option value="mymensingh">Mymensingh</option>
                        <option value="khulna">Khulna</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="rangpur">Rangpur</option>
                        <option value="sylhet">Sylhet</option>
                    </select>


                    <label for="">To:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="mymensingh">Mymensingh</option>
                        <option value="khulna">Khulna</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="rangpur">Rangpur</option>
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
                            <ul class="bus-ticket-packages">
                                <dl><img src="./images/bus-ticket-packages/package-1.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/bus-ticket-packages/package-2.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/bus-ticket-packages/package-3.png" style="width: 100%; height: auto;" alt=""></dl>
                            </ul>
                        </td>

                        <td>
                            <ul class="bus-ticket-packages">
                                <dl><img src="./images/bus-ticket-packages/package-4.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/bus-ticket-packages/package-10.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/bus-ticket-packages/package-6.png" style="width: 100%; height: auto;" alt=""></dl>
                            </ul>
                        </td>

                        <td>
                            <ul class="bus-ticket-packages">
                                <dl><img src="./images/bus-ticket-packages/package-7.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/bus-ticket-packages/package-8.png" style="width: 100%; height: auto;" alt=""></dl>
                                <dl><img src="./images/bus-ticket-packages/package-9.png" style="width: 100%; height: auto;" alt=""></dl>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>

            <fieldset style="width:50%; margin:0 auto; margin-top: 25px;">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4">
                                <h1>AVAILABLE BUS OPERATORS</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-list">
                                    <dl><i class="fas fa-bus"></i>&nbsp;AK Travels</dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Aqib Enterprise</dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Bablu Enterprise </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Bappy Enterprise </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Barkat Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Desh Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Dhaka Express </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Dolphin Chair Coach Service </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Econo Service </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Falguni Modhumoti PVT LTD </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Falguni Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Grameen Travels</dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-list">
                                    <dl><i class="fas fa-bus"></i>&nbsp;Green Saintmartin Express</dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Hanif Enterprise </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;HR Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Jatayat AC </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Jline Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Khadiza VIP Service </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Kingfisher Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;KLine </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Kuakata Express </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Modern Line </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;National Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;President Travels </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-list">
                                    <dl><i class="fas fa-bus"></i>&nbsp;Relax Transport </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;RM Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Rumin Paribahan Limited </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;S.Alam </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Saintmartin Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Saintmartin Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Sakalsandhya Enterprise </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Sakura Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Sarbick Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Sarker Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Senjuti Travels </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Seven Star Paribahan </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-list">
                                    <dl><i class="fas fa-bus"></i>&nbsp;Shah Ali Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Shanti Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Shanti Paribahan AC </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Shyamoli ( NR ) </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;SI Enterprise </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Silk Line </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Sonartori Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Surovi Paribahan </dl>
                                    <dl><i class="fas fa-bus"></i>&nbsp;Uzzal Travels </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>


            <fieldset style="width:50%; margin:0 auto; margin-top: 25px;">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4">
                                <h1>POPULAR BUS ROUTES</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-list routes">
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-COX'S BAZAR</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KHAGRACHARI</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BANDARBAN</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-TEKNAF</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-RANGAMATI</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-CHAPAINAWABGANJ</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-RAJSHAHI</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-RANGPUR</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BARISAL</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BARGUNA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KUAKATA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-SATKHIRA</a></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-list routes">
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KHULNA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-PATUAKHALI</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-THAKURGAON</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-CHITTAGONG</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-SHYAMNAGAR</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KANSAT</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KAPTAI</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BENAPOLE</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;CHAPAINAWABGANJ-DHAKA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-PATHORGHATA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KOLKATA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-PANCHAGARH</a></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-list routes">
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-VANDARIA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-KHEPUPARA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-PAIKGASA</a></dl>
                                    <dl><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BURIMARI</a></dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <div style="width:50%; margin:0 auto; margin-top: 50px;">

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