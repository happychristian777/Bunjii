<?php
    $page_title = 'Home';
    $home = '';
    $facilities = 'active';
    $about = '';
    $contact = '';
    require_once ("initialize.php");
    include ('header.php');

    $displayVenueSQL = "select * from venue";
    $venueResult = mysqli_query($conn, $displayVenueSQL);
?>
<main>
  <div class="container">
    <div class="row">
      <div class="col">
          <h1>SPORTS FACILITIES</h1>
          <hr>
          <div class="row">
          <?php while ($venue = mysqli_fetch_assoc($venueResult)) { ?>

          <div class="card" style="width:21rem; margin: 20px;">
            <img class="card-img-top" src="images/sample.png" />
            <div class="card-body">
              <h2><?php echo $venue['venue_name']; ?></h2>
              <p><?php echo substr($venue['venue_desc'], 0, 140); ?></p>
              <a href="<?php echo url_for('facilitiesdetail.php?id=').$venue['venue_id'];?>" class="text-primary">View >></a>
            </div>
          </div>
         <?php } ?>
          </div>
      </div>
    </div>
  </div>
</main>

<?php include ('footer.php'); ?>
