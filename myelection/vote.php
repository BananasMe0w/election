<?php
  include "connect.php";

  $id = $_GET['elec_id'];
  $elecid = $_SESSION['sess_id'];
  $sql = "SELECT * FROM tbl_election WHERE score ='$id'";
  $result = $con->query($sql);

  $row= $result ->fetch_assoc();
  $newscore = $row['score']+1;

  $sql = "UPDATE tbl_election SET score='$newscore' WHERE elec_id='$id'";
  $result = $con->query($sql);
  if ($result) {
    echo "
    <script type='text/javascript'>
      location = 'index.php';
    </script>
    ";
  }
?>
