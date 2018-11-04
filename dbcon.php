<?php
$con = mysqli_connect("localhost","root","","login");
$con2 = mysqli_connect("localhost","root","","login_1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
