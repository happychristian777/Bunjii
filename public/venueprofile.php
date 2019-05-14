<?php
$page_title = 'Home';
require_once ("../private/initialize.php");
include (SHARED_PATH.'/header.php');

require_once ("../private/initialize.php");
    require_once ("../private/database.php");

    if(isset($_SESSION['user'])) {

        global $conn;

        $id = $_SESSION['id'];

        $sql = "select * from venue where signupid='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

            echo $row['venue_name'];

    }