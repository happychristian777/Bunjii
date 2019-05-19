<?php
$page_title = 'Home';
require_once ("../private/initialize.php");
include (SHARED_PATH.'/header.php');

require_once ("../private/initialize.php");
    require_once ("../private/database.php");

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
    <?php while($courts = mysqli_fetch_assoc($courtsResult)) { ?>
    <table>
        <tr>
            <td><strong>Court <?php echo $courts['court_id']; ?></strong></td>
            <td class="profiletable"><?php echo $courts['court_name']; ?></td>
        </tr>
        <tr>
          <td></td>
            <?php

            // Declaring court id to a variable to use it to find timings

            $court_id = $courts['court_id'];
            $timingsSQL = "select * from timings where court_id='$court_id'";
            $timingsResult = mysqli_query($conn, $timingsSQL);

            while ($timings = mysqli_fetch_assoc($timingsResult)) { ?>
              <td class="profiletable"> <?php  echo $timings['time_range']; }?> </td>
            </tr>
    </table>
    <?php } ?>
    <hr>
    <h2>Coaches</h2>
    <?php while($coaches = mysqli_fetch_assoc($coachesResult)) { ?>
        <table>
            <tr>
                <td><strong>Coach <?php echo $coaches['coach_id']; ?></strong></td>
                <td class="profiletable"><?php echo $coaches['coach_name']; ?></td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td class="profiletable"><?php echo $coaches['coach_desc']; ?></td>
            </tr>
        </table>
    <?php } ?>

</div>
