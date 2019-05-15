<?php
$servername = "localhost";
$username = "usjuego";
$password = "sql";
$bdname = "dbJuego";


// Create connection
$con=mysqli_connect($servername,$username,$password,$bdname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//mysqli_select_db($con,"");

?>
