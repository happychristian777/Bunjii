<?php
	session_start();
?>
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width= device-width, initial-scale=1">
			<title>Bunjii</title>
		</head>
		<body>
			<header>
				<nav>
					<a href="#">
						<img src="#" alt="Logo"/>
					</a>
					<ul>
						<a href="index.php">Home</a>
						<a href="#">About Us</a>
						<a href="#">Facilities</a>
						<a href="#">Contact Us</a>
					</ul>
					<div>
						<?php
							if (isset($_SESSION['userId'])) {
								echo'<form action="include/logout.inc.php" method="post">
							<button type="submit" name="logout-submit">Logout</button>
						</form>';
							}
							else{
								echo'<form action="include/login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="Email">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="login-submit">Login</button>
						</form>
						<a href="signup.php">Signup</a>';
							}
						?>
						
						
				</nav>
			</header>
</html>
