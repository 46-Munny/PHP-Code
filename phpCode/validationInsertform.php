<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      Id:<input type="text" name="id" value=""><br /><br />
      Name:<input type="text" name="name" value=""><br /><br />
      PhoneNo:<input type="text" name="phn" value=""><br /><br />
      <input type="text" name="email" value=""><br /><br />
      <input type="submit" name="submit" value="submit"><br />
       </form>
      <?php
       $db_host="localhost";
        $db_username="root";
         $db_password="";
          $db_name="studentdb";

          $con=mysqli_connect($db_host,$db_username,$db_password,  $db_name);
          if($con)
          {
            echo"database connected successfully<br />";
          }

          else{
            echo"database not connected";
          }

          if(isset($_POST['submit']))
          {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $phn=$_POST['phn'];
            $email=$_POST['email'];

            if($id=="")
            {
              echo"Please fill up your id<br />";
            }
            if(strlen($id)<3)
            {
              echo"Please your id have to at least 3 characters";
            }
            if($name=="")
            {
              echo"Please fill up your name<br />";
            }
            if(strlen($name)<3)
            {
              echo"Please your name have to at least 3 characters";
            }
            if(preg_match("/[^A-Za-z'-]/",$name))
            {
              echo "Invalid name<br />";
            }
            if($phn=="")
            {
              echo"Please fill up your phnNo<br />";
            }
            if(strlen($phn)<11)
            {
              echo"Please your phn no have to 11 characters";
            }
            if($email=="")
            {
              echo"Please fill up your email<br />";
            }
            if(strlen($email)>20)
            {
              echo"Please your email have to in 20 characters";
            }

            if($pos=strpos($email,'@')<=1)
            {
              echo"Invalid @ position ".$pos."<br />";
            }

            if(strlen($email)>20)
            {
              echo"Please your email have to in 20 characters";
            }
            if(strlen($email)-4!='.')
            {
              echo"Invalid '.' position";
            }





            if($id!=""&&$name!=""&&$phn!=""&&strlen($id)>=3&&strlen($name)>=3&&strlen($phn)==11&&preg_match("/[^A-Za-z'-]/",$name)==0)
            {
              $sql1="insert into info values('$id','$name','$phn')";
              if(mysqli_query($con,$sql1))
              {
                echo "Data inserted successfully<br />";
              }
              else{
                echo "data not inserted <br />";
              }

            }

           $sql2="select * from info";
           $result=mysqli_query($con,$sql2);
           $n=mysqli_num_rows($result);
           if($n>0)
           {
             while($array=mysqli_fetch_assoc($result))
             {
               echo $array['id']." ".$array['name']." ".$array['phnNo']."<br />";
             }
           }


          }

       ?>

  </body>
</html>
