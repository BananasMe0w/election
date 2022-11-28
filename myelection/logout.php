<?php
  include "connect.php";

  unset($_SESSION['sess_stdid']);
  unset($_SESSION['sess_status']);
  session_destroy();

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
