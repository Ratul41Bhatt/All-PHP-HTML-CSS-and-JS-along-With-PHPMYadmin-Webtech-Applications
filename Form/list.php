<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User List</title>
  </head>
  <body>
    <h1>User list</h1>
    <?php
   $handle = fopen("data.json","r");
   $data = fread($handle,filesize("data.json"))

     ?>
  </body>
</html>
