<?php
  include "connect.php";

  $sql = "DELETE FROM `vote` WHERE 1";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('vote close');
    location='index.php';
  </script>
  ";
?>
