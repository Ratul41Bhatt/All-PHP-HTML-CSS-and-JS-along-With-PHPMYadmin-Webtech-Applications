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
        <title>Places</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>

        <main>
            <table style="width:25%; margin:0 auto; margin-top: 25px;">
                <thead>
                    <tr>
                        <th colspan="4">
                            <h1>TOURIST SPOTS</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/nhwtKxTDrRY?list=PL4pcb3feGRyYbJdcz1XnnpF_zpi9R75vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Kuakata Sea Beach</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-1.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-1.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/T4gSrcpdfaU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Cox's Bazar</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-2.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-2.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/1K5XYkrDEUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Sundarbans</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-3.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-3.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>
                            </ul>
                        </td>

                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/UxIqi-gOIb8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Sajek Valley</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-4.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-4.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/K5HASR2KotY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Srimangal</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-5.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-5.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/YMkrqGcoj9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Saint Martin</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-6.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-6.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>

                            </ul>
                        </td>

                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/1s0-W8S-45k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Paharpur</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-7.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-7.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
                                </fieldset>
                            </ul>
                        </td>

                        <td>
                            <ul class="tourist-spots">
                                <fieldset>
                                    <center>
                                        <dl>
                                            <iframe width="350px" height="250px" src="https://www.youtube.com/embed/ZzWqjU6VPqM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </dl>
                                    </center>

                                    <dl>
                                        <h1>Barisal</h1>
                                    </dl>
                                    <dl>
                                        <?php
                                        $myfile = fopen("../model/place-descriptions/places-8.txt", "r") or die("Unable to open file!");
                                        echo fread($myfile, filesize("../model/place-descriptions/places-8.txt"));
                                        fclose($myfile);
                                        ?>
                                    </dl>
                                    <br>
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