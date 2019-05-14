<?php
    $page_title = 'Home';
    require_once ("../private/initialize.php");
    include (SHARED_PATH.'/header.php');
?>

<div id="content">
<?php

if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
    echo $_SESSION['id'];
}

?>
</div>

<?php include (SHARED_PATH.'/footer.php'); ?>

