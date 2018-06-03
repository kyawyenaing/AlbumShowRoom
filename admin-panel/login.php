<?php
  // session_start();

  $name = $_POST['name'];
  $password = $_POST['password'];

  if($name == "admin" and $password == "123456") {
    $_SESSION['auth'] = true;
    header("location: albums.php");
  } elseif(($name !="admin" and $password != "123456") || ($name =="" or $password="")) {
    header("location:index.php?login=failed");
  } elseif($name != "admin") {
    header("location:index.php?username=wrong_name");
  }
?>
