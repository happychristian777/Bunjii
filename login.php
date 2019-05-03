<?php
	//must appear BEFORE the <html> tag
	session_start();
	include_once('include/config.php');	
	
	if (isset($_SESSION['valid_user'])) {
		header("location: member_only.php");
	}	
	//make the database connection
	$conn  = db_connect();
	     
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $email = $conn -> real_escape_string($_POST['email']);
      $password = $conn -> real_escape_string($_POST['password']); 
     	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;
	  $row = $result -> fetch_assoc();
	  if ($numOfRows == 1) {
         $_SESSION['valid_user'] = $email;         
         header("location: member_only.php");
      }else {
		  $error = 'Your Login Name or Password is invalid';
      }
   }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body onLoad="run_first()">
    <?php include("include/nav.inc") ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-s-12">
                <h1>Sign in to your Account</h1>
                <p>Please enter your email and password</p>
            </div>
        </div>
        <form class = "form-group" action="login.php" method="post">
            <div class="row">
                <div class="col-s-12 col-5">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required />
                </div>
            </div>
            <div class="row">
                <div class="col-s-12 col-5">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required />
                </div>
            </div>
            <div class="row">
                <div class="col-s-12 col-5">
                    <input class="btn btn-primary" type="submit" id="submit" value="Submit" />
                    <?php
                        if(isset($error)) {
                        echo "<p style=\"color: red;\">$error</p>";
                        unset($error);
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>
<?php include("include/footer.php") ?>
</html>



