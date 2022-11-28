<?php
  include "connect.php";

  $sql = "INSERT INTO `vote`(`status`) VALUES ('open')";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('vote open');
    location='index.php';
  </script>
  ";
?>
