<?php
$student=array(
  array(1,"munny",22),
  array(2,"honey",23)

);

foreach ($student as  $value) {
  foreach ($value as  $svalue) {
    echo $svalue." ";
  }
  echo "<br />";
}

 ?>
