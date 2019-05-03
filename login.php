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
<title>Bunjii -</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/rwd.css" rel="stylesheet" type="text/css">
<link href="css/member.css" rel="stylesheet" type="text/css">
<script src="js/member.js"></script>
<script src="js/nav.js"></script>
</head>
<body onLoad="run_first()">
<?php include("include/nav.inc") ?>
<div class="container">
<form action="login.php" method="post">
    <div class="row">
    	<div class="col-12 col-s-12">
            <h1>Login</h1>
			<p>Please enter your email and password</p>
		</div>
	</div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="email">Email:</label>
            <input type="email" id="email" name="email" 
              size="35" maxlength="50" required />
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label for="password">Password:</label>
            <input type="password" id="password" name="password" 
              size="20" maxlength="20" required />
        </div>
    </div>
    <div class="row">
    	<div class="col-s-12 col-12">
        	<label>&nbsp;</label>
            <input type="submit" id="submit" value="Submit" />
            <input type="reset" id="reset" value="Clear" />
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
<div class="row" id="footer">
    <div class="col-s-12 col-12" id="footer-col1"><h2>Design By 007 - 2017</h2></div>
</div>    
</body>
</html>



