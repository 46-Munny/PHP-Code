<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Date of Birth: ";
    $date=date('d-m-Y',strtotime($_POST['d']));
    echo $date;
     ?>
  </body>
</html>
