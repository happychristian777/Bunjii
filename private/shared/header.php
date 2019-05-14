<?php
    session_start();
    if(!isset($page_title)){ $page_title = 'Bunjii';}
        ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?php echo url_for("/css/style.css")?>" />
    <script src="<?php echo url_for('js/functions.js') ?>"></script>
</head>

<body>

<nav>
    <ul>
        <li><a href="<?php echo url_for('/index.php')?>">Home</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    <?php if(isset($_SESSION['user'])){ ?>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("include/logout.inc")?>" name="login">Logout</a>
    <?php } else{ ?>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("login.php")?>" name="login">Login</a>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("signup.php")?>" name="signup">Sign Up</a>
    <?php }?>

</nav>