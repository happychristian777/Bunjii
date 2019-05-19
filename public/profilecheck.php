<?php
$page_title = 'Home';
require_once ("../private/initialize.php");
include (SHARED_PATH.'/header.php');

require_once ("../private/initialize.php");
    require_once ("../private/database.php");

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
