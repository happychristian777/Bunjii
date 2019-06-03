<?php
    session_start();
    if(!isset($page_title)){ $page_title = 'Bunjii';}
    if(!isset($home)){ $home = '';}
    if(!isset($facilities)){ $facilities = '';}
    if(!isset($about)){ $about = '';}
    if(!isset($contact)){ $contact = '';}
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
        <li><a class="<?php echo $home ?>" href="<?php echo url_for('/index.php')?>">Home</a></li>
        <li><a class="<?php echo $facilities ?>" href="<?php echo url_for('/facilities.php') ?>">Facilities</a></li>
        <li><a class="<?php echo $about ?>" href="#">About Us</a></li>
        <li><a class="<?php echo $contact ?>" href="#">Contact Us</a></li>
    </ul>
    <?php if(isset($_SESSION['user'])){ ?>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("profilecheck.php")?>" name="profile">Profile</a>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("include/logout.inc")?>" name="logout">Logout</a>
    <?php } else{ ?>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("login.php")?>" name="login">Login</a>
        <a class="btn btn-primary menubuttons" href="<?php echo url_for("signup.php")?>" name="signup">Sign Up</a>
    <?php }?>

</nav>

<main>
