<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Election</title>
  </head>
  <body>
    <?php include "navbar.php"; ?>
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card mt-4">
            <div class="card-header bg-info">
              <h4 class="text-white">Sign in</h4>
            </div>
            <div class="card-body">
              <form action="signin_script.php" method="post">
                <div class="col-12">
                  <label>Student ID :</label>
                  <input class="form-control" placeholder="student id" type="text" name="std_id_signin" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Password :</label>
                  <input class="form-control" placeholder="password" type="password" name="password_signin" required>
                </div>
                <div class="col-12 mt-4">
                  <button class="btn btn-outline-success" type="submit">submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
