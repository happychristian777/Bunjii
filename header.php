<?php
	session_start();
?>
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width= device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <title>Bunjii</title>
		</head>
		<body>
			<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="#">Facilities</a>
                    <a class="nav-link" href="#">Contact Us</a>
                    <?php
						if (isset($_SESSION['userId'])) {
							echo'<form action="include/logout.inc.php" method="post">
					           	    <button  class ="btn btn-primary menubuttons" type="submit" name="logout-submit">Logout</button>
						        </form>';
							}
						else{
								echo'<a  class ="btn btn-primary menubuttons" href="login.php">Login</a>
                                    <a  class ="btn btn-primary menubuttons" href="signup.php">Sign Up</a>';
							}
					?>
				</nav>
			</header>
        </body>
</html>
