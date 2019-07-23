<?php
  session_start();

  $name = $_POST['name'];
  $password = $_POST['password'];

  if($name == "admin" and $password == "123456") {
    $_SESSION['auth'] = true;
    header("location: albums.php");
  } elseif(($name !="admin" and $password != "123456") || ($name =="" or $password="")) {
    $_SESSION['message'] = "Invalid Login";
    header("location:index.php");
  } elseif($name != "admin") {
    $_SESSION['message'] = "Incorrect username";
    header("location:index.php");
  } else {
    header("location:index.php?password=wrong_password");
  }




