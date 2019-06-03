<?php

$page_title = 'Home';
$home = '';
$facilities = 'active';
$about = '';
$contact = '';
require_once ("../private/initialize.php");
include (SHARED_PATH.'/header.php');

require_once ("../private/initialize.php");
require_once ("../private/database.php");

if(isset($_GET['id'])) {

    global $conn;

    $id = $_GET['id'];

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
    <h1>PROFILE</h1>
    <hr>
    <h2><?php echo $venue['venue_name'];?></h2>
    <table>
        <tr>
            <td><strong>Description</strong></td>
            <td class="profiletable"><?php echo $venue['venue_desc']?></td>
        </tr>
        <tr>
            <td><strong>Phone</strong></td>
            <td class="profiletable"><?php echo $venue['venue_phone'] ?></td>
        </tr>
    </table>
    <hr>
    <h2>Courts</h2>

    <div class="row">
        <?php while ($courts = mysqli_fetch_assoc($courtsResult)) { ?>

            <div class="col-md-4">
                <table>
                    <tr>
                        <td class="profiletable"><strong><?php echo $courts['court_name']; ?></strong></td>
                        <?php if (isset($_SESSION['user'])){?>
                            <td><a href=<?php echo url_for('booking.php?id=').$courts['court_id']; ?>>Book Now >></a></td>
                        <?php }?>
                    </tr>
                </table>
            </div>

        <?php } ?>
    </div>

    <hr>

        <h2>Coaches</h2>
            <?php while($coaches = mysqli_fetch_assoc($coachesResult)) { ?>
                <table>
                     <td class="profiletable"><b><?php echo $coaches['coach_name']; ?></b></td>
                     <td class="profiletable"><?php echo $coaches['coach_desc']; ?></td>
                </table>
            <?php } ?>
    </div>

<?php include (SHARED_PATH.'/footer.php'); ?>
