<?php
$page_title = 'Home';
require_once ("../private/initialize.php");
include (SHARED_PATH.'/header.php');

require_once ("../private/initialize.php");
    require_once ("../private/database.php");

    if(isset($_SESSION['user'])) {

        global $conn;

        $id = $_SESSION['id'];

        $sql_1 = "select * from venue where signupid='$id'";
        $result_1 = mysqli_query($conn, $sql_1);
        $row_1 = mysqli_fetch_assoc($result_1);

        $venue_id = $row_1['venue_id'];

        $sql_2 = "select * from courts where venue_id='$venue_id'";
        $result_2 = mysqli_query($conn, $sql_2);
        $row_2 = mysqli_fetch_assoc($result_2);


    }
?>
<div class="container">
    <h1>My Profile</h1>
    <hr>
    <h2><?php echo $row_1['venue_name'];?></h2>
    <table>
        <tr>
            <td><strong>Description: </strong></td>
            <td class="profiletable"><?php echo $row_1['venue_desc']?></td>
        </tr>
        <tr>
            <td><strong>Phone: </strong></td>
            <td class="profiletable"><?php echo $row_1['venue_phone'] ?></td>
        </tr>
    </table>
    <hr>
    <h2>Courts</h2>
    <table>
        <td><strong>Court Name:</strong></td>
        <td class="profiletable"><?php echo $row_2['court_name'] ?></td>
    </table>

</div>