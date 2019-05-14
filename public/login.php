<?php
    $page_title = 'Login';
    require_once("../private/initialize.php");
    include(SHARED_PATH . '/header.php');
    $email = isset($_GET['email']) ? $_GET['email'] : "";
?>

<div class="container">
    <h1>LOGIN</h1>
    <hr>
    <div class="col-md-5">
        <form action="<?php echo url_for('/include/login.inc.php')?>" method="POST">
            <label for="email">E-Mail</label>
            <input class = "form-control" type="text" id="email" name="email" value="<?php echo $email?>" placeholder="Enter your email address" />
            <label for="password">Password</label>
            <input class = "form-control" type="password" id="password" name="password" placeholder="Enter your password"/>
            <input class=" btn btn-primary" type="submit" name="submit" id="submit"/>
        </form>
    </div>

<?php include(SHARED_PATH . '/footer.php'); ?>
