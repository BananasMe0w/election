<?php
  include "connect.php";

  $id = $_GET['id'];

  $sql = "SELECT * FROM tbl_election";
  $result = $con->query($sql);
  $row= $result ->fetch_assoc();

  $newscore = $row['score']+1;

  $sql = "UPDATE `tbl_election` SET `score` = '$newscore' WHERE `tbl_election`.`elec_id` = '$id';";
  $result = $con->query($sql);
  if ($result) {
    echo "
    <script type='text/javascript'>
      location = 'index.php';
    </script>
    ";
  }
?>
