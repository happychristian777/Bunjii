<?php
    $page_title = 'Home';
    $home = '';
    $facilities = 'active';
    $about = '';
    $contact = '';
    require_once ("../private/initialize.php");
    include (SHARED_PATH.'/header.php');

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

          <div class="col-md-4">
              <h2><?php echo $venue['venue_name']; ?></h2>
              <p><?php echo substr($venue['venue_desc'], 0, 100); ?></p>
              <a href="<?php echo url_for('facilitiesdetail.php?id=').$venue['venue_id'];?>" class="text-primary">View >></a>
              <p></p>
          </table>
          </div>
         <?php } ?>
          </div>
      </div>
    </div>
  </div>
</main>

<?php include (SHARED_PATH.'/footer.php'); ?>
