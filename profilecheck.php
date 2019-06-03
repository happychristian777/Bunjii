<?php
$page_title = 'Home';
require_once ("initialize.php");
include ('header.php');
require_once ("database.php");

    if(isset($_SESSION['user'])) {

      if($_SESSION['type'] == 'venue'){
        redirect_to('venueprofile.php');
      }
      else if($_SESSION['type'] == 'customer'){
        redirect_to('customerprofile.php');
      }
      else{
        redirect_to('index.php');
      }
    }
