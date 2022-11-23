<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     if(isset($_POST["java"]))
     {
       echo $_POST["java"]."<br />";
     }

     if(isset($_POST["php"]))
     {
       echo $_POST["php"]."<br />";
     }

     if(isset($_POST["javascript"]))
     {
       echo $_POST["javascript"]."<br />";
     }
    ?>
  </body>
</html>
