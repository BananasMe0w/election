<?php
  include "connect.php";

  $stdid = $_POST['std_id_signin'];
  $password = $_POST['password_signin'];

  if ($stdid == '' || $password=='') {
    echo "connot invalid";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE studentid='$stdid'";
    $result = $con->query($sql);

    if ($result->num_rows<1) {
      echo "
      <script type='text/javascript'>
        alert('not found id');
        location='signin.php';
      </script>
      ";
    }else {
      $sql = "SELECT * FROM tbl_user WHERE studentid='$stdid' AND password='$password'";
      $result = $con->query($sql);

      if ($result->num_rows<1) {
        echo "
        <script type='text/javascript'>
          alert('password wrong');
          location='signin.php';
        </script>
        ";
      }else {
        $row = $result->fetch_assoc();
        $_SESSION['sess_stdid'] = $row['studentid'];
        $_SESSION['sess_status'] = $row['status'];

        echo "
        <script type='text/javascript'>
          location='index.php';
          </script>
          ";
        }
      }
    }
?>
