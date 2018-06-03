<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "store";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass); //MySQLi Procedural
  // $conn = new mysqli($dbhost, $dbuser, $dbpass); //MySQLi Object-Oriented
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } else {
  	mysqli_select_db($conn, $dbname);
  }
  
?>
