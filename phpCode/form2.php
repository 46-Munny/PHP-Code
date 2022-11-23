<?php
$db_host="localhost";
$db_username="root";
$db_passward="";
$db_name="cse";

$con=mysqli_connect($db_host,$db_username,$db_passward,$db_name);
if($con)
{
  echo "Connected successfully <br />";
}
else {
   die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <?php
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $gen=$_POST['gender'];



    $language="";
    if(isset($_POST["java"]))
    {
       $language=$language.$_POST["java"]." ";
    }

    if(isset($_POST["php"]))
    {
       $language=$language.$_POST["php"]." ";
    }

    if(isset($_POST["javascript"]))
    {
       $language=$language.$_POST["javascript"]." ";
    }

    //echo $gen;
    //echo $language;




    $sql= "insert into course (name,gender,language) values('$name','$gen','$language')";
    if(mysqli_query($con,$sql))
    {
      echo"New record inserted";
    }
    else {
      echo"New record insert failed";
    }

}

    $sql2= "select * from course";
    $result=mysqli_query($con,$sql2);
    //$n=mysqli_num_rows($result);
    //echo $n;
    ?>
    <table class="table table-border">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Language</th>
        <th>Action</th>

      </tr>
    <?php


    //if($n>0)
    //{
      while($array=mysqli_fetch_assoc($result))
      {
      ?>

        <tr>
          <td><?php echo $array['id'] ?></td>
            <td><?php echo $array['name'] ?></td>
              <td><?php echo $array['gender'] ?></td>
                <td><?php echo $array['language'] ?></td>
                <td>
                  <form class="" action="form2.php" method="post">
                    <input type="hidden" name="cid" value="<?php echo $array['id'] ?>">
                    <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                  </form>

                </td>

        </tr>
        <?php
      }
         ?>

      </table>
      <?php

  //  }

    if(isset($_POST["delete"]))
    {
      $sql3="delete from course where id = {$_POST['cid']}";

      if(mysqli_query($con,$sql3))
      {
          header("location:form2.php");
      }
      else {
         echo mysqli_error($con);;
      }
    }


     ?>
  </body>
</html>
