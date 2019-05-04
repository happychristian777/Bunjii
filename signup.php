<?php require "header.php" ?>

	<main>
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in all the details</p>
            <?php
                   if (isset($_GET['error'])) {
                       if ($_GET['error'] == "emptyfields") {
                           echo '<p class="errorclass">Fill in all fields</p>';
                       }
                       else if($_GET['error'] == "invaliduidmail"){
                           echo '<p class="errorclass">Invalid username and email</p>';
                       }
                       else if($_GET['error'] == "invalidmail"){
                           echo '<p class="errorclass">Invalid Email</p>';
                       }
                       else if($_GET['error'] == "invaliduid"){
                           echo '<p class="errorclass">Username cannot contain special characters</p>';
                       }
                       else if($_GET['error'] == "passwordcheck"){
                           echo '<p class="errorclass">Your passwords do not match</p>';
                       }
                       else if($_GET['error'] == "usertaken"){
                           echo '<p class="errorclass">Username is already taken</p>';
                       }
                   else if($_GET['signup'] == "success"){
                       echo '<p class="successclass">You successfully signed up</p>';
                   }
                   }
            ?>
            <form action="include/signup.inc.php" method="post">
                <input class="form-control col-md-5" type="text" name="uid" placeholder="Username">
                <input class="form-control col-md-5"  type="text" name="mail" placeholder="E-mail">
                <input class="form-control col-md-5"  type="password" name="pwd" placeholder="Password">
                <input class="form-control col-md-5"  type="password" name="pwd-repeat" placeholder="Confirm Password">
                <button class="btn btn-primary"  type="submit" name="signup-submit">Sign Up</button>
            </form>
        </div>
	</main>

<?php require "footer.php" ?>
