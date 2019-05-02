<?php
require "header.php"
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Sign Up</h1>
                <form class="form-inline my-2 my-lg-0" action="includes/signup.inc.php" method="post">
                    <div class="form-group">
                        <input class="form-control mr-sm-2" type="text" name="uid" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input class="form-control mr-sm-2" type="text" name="mail" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control mr-sm-2" type="password" name="pwd-repeat" placeholder="Repeat Password">
                    </div>
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="signup-submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require "footer.php"
?>
