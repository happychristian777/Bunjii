<?php
$page_title = 'Home';
require_once ("initialize.php");
include ('header.php');
require_once ("database.php");

if(isset($_SESSION['user'])) {

    global $conn;

    $id = $_SESSION['id'];

    $venueSQL = "select * from venue where signupid='$id'";
    $venueResult = mysqli_query($conn, $venueSQL);
    $venue = mysqli_fetch_assoc($venueResult);

    // Declaring venue id to a variable to use it to find courts and coaches

    $venue_id = $venue['venue_id'];

    $courtsSQL = "select * from courts where venue_id='$venue_id'";
    $courtsResult = mysqli_query($conn, $courtsSQL);

    $coachesSQL = "select * from coaches where venue_id='$venue_id'";
    $coachesResult = mysqli_query($conn, $coachesSQL);

}
?>
<div class="container">
    <h1>EDIT PROFILE</h1>
    <hr>
    <div class="col-md-6">
        <form action="editvenue.inc.php" method="POST">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" value="<?php echo $venue['venue_name'];?>">
            <label for="desc">Description</label>
            <textarea id="desc" class="form-control"><?php echo $venue['venue_desc'];?></textarea>
            <label for=""
        </form>
    </div>
</div>

<?php include ('footer.php'); ?>

