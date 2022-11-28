<?php
  $host = "localhost";
  $user = "root";
  $d_password  = "meowmeow";
  $database = "election";

  $con = new mysqli($host, $user, $d_password, $database);
  session_start();

  if ($con->connect_error) {
    echo "connect error";
  }
?>
