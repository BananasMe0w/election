<div class="container mt-5">
  <div class="row">
      <?php
        $sql = "SELECT * FROM tbl_election";
        $result = $con->query($sql);

        $sql2 = "SELECT * FROM tbl_election ORDER BY score DESC";
        $result2 = $con->query($sql2);

        while ($row = $result2->fetch_assoc()) {
      ?>
        <div class="col-12">
          <div class="bg-dark text-white p-3">
            <h3><?php echo $row['number']; ?></h3>
            <p>score: <?php echo $row['score']; ?></p>
          </div>
        </div>
    <?php } ?>
  </div>
</div>
