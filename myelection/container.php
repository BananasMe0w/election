<div class="container">
  <div class="row">
      <?php
        $sql = "SELECT * FROM tbl_election";
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {
      ?>
        <div class="col-4">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="text-white"><?php echo $row['number']; ?></h3>
            </div>
            <div class="card-body">
              <img class="d-block w-100" src="<?php echo $row['image']; ?>">
              <p class="mt-4">Name: <?php echo $row['name']; ?></p>
              <p class="mt-4">class: <?php echo $row['class']; ?></p>
              <p class="mt-4">Elction Name: <?php echo $row['election_name']; ?></p>
              <p class="mt-4">
                Slogan: <?php echo $row['slogan']; ?>
              </p>
              <p class="mt-4">Tel: <?php echo $row['tel']; ?></p>
              <p class="mt-4">Email: <?php echo $row['email']; ?></p>

              <?php
                $sql2 = "SELECT * FROM `vote`";
                $result2 = $con->query($sql);
                $row2 = $result2->fetch_assoc();
                $_SESSION['vote_status'] = $row['status'];

                if ($_SESSION['vote_status']=='') {
              ?>
                <?php if ($_SESSION['sess_status']==1) { ?>
                  <form action="vote.php" method="post">
                    <div class="col-12 text-center mt-4">
                      <a href="vote.php?elec_id=<?php echo $row['elec_id']; ?>"><button class="btn btn-success" type="submit">vote</button></a>
                    </div>
                  </form>
                  <?php }else if($_SESSION['sess_status']==2){?>
                  <form action="vote.php" method="post">
                  <div class="col-12 text-center mt-4">
                    <button class="btn btn-success" type="submit" disabled>vote</button>
                    <p class="text-danger mt-2">cannot vote</p>
                  </div>
                  </form>
                  <?php }else{ ?>
                  <form action="vote.php" method="post">
                  <div class="col-12 text-center mt-4">
                    <button class="btn btn-success" type="submit" disabled>vote</button>
                    <p class="text-danger mt-2">Sign in to vote</p>
                  </div>
                  </form>
                <?php } ?>
            <?php } ?>
            </div>
          </div>
      </div>
    <?php } ?>
  </div>
</div>
