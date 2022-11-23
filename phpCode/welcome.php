<?php
session_start();
if(!isset($_POST['logout']))
{
  if(isset($_SESSION['uname']))
  {
    echo"Username is:".$_SESSION['uname']."Password is:".$_SESSION['pass']."<br />";
  }
}

else{
  header("location:phpsession.php");
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="welcome.php" method="post">
       <input type="submit" name="logout" value="Logout">
     </form>
   </body>
 </html>
