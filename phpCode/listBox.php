<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      foreach ($_POST["subject"] as $key => $value) {
        echo "$value"."<br />";
      }
     ?>

  </body>
</html>
