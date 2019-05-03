<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ABC School - Signup</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/rwd.css" rel="stylesheet" type="text/css">
<link href="css/nav_responsive.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
</head>
<body onLoad="run_first()">
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['zip'])) {
	//make the database connection
	$conn  = db_connect();
	$name = $conn -> real_escape_string($_POST['name']);
	$email = $conn -> real_escape_string($_POST['email']);
	$password = $conn -> real_escape_string($_POST['password']);
	$postcode = $conn -> real_escape_string($_POST['zip']);	
	//create an insert query 	
	$sql = "insert into users (name, email, password, postcode) 
			VALUES ('$name', '$email', '$password', '$postcode')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "<div class=\"row\">";
		echo "<div class=\"col-s-12 col-12\">";
		echo "<h1>Welcome to ABC School</h1>";
		echo "<p>Hi <b>$name</b></p>";
		echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">You can login now</a></p>";
		echo "</div>";
		echo "</div>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>    
<div class="row" id="footer">
    <div class="col-s-12 col-12" id="footer-col1"><h2>Design By Cue007 - 2017</h2></div>
</div>
</body>
</html>

