<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ABC School - Member Page</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/rwd.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
</head>
<body onLoad="run_first()">
	<?php include("include/nav.inc") ?>
    <div class="row">
    <div class="col-12 col-s-12">
    <h1>Member Page</h1>
	<?php
  	// check session variable
  	if (isset($_SESSION['valid_user']))
  	{
		//make the database connection
		$conn  = db_connect();	
		$user_check = $_SESSION['valid_user'];
   
    	//make a query to check if a valid user
    	$ses_sql = "select name from users where email='$user_check'";
    	$result = $conn -> query($ses_sql);
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$name = $row['name'];
    		echo "<p>Welcome <b>$name!</b></p>";
			echo "<p><a href=\"logout.php\">Logout</a></p>";
		}
		else {
			echo "<p>Something is wrong.</p>";
			echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">Login</a></p>";
		}
  	}
  	else
  	{
    	echo "<p>You are not logged in.</p>";
		echo "<p><a href=\"login.php\" id=\"4\" 
			onClick=\"nav_item_selected(4)\">Login</a></p>";
  	}  
	?> 
    </div>
    </div>
    <div class="row" id="footer">
    	<div class="col-s-12 col-12" id="footer-col1"><h2>Design By Cue007 - 2017</h2></div>
    </div>
</body>
</html>
