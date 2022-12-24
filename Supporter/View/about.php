<?php


include("../controller/Top.php");

?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<html>
    <head>
        <title>
           About
        </title>
        <style type="text/css">
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
        </style>
    </head>

    <body>
    <div class="about-section">
  <h1>About Us </h1>
  <p>We are providing good facilities.</p>
  <p>Give us the chance to serve you..</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Alvi</h2>
        <p class="title">Supporter</p>
        <p>Deterministic.</p>
        <p>alvi@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


        
    </body>
</html>
<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>