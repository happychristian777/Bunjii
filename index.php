<?php require "header.php" ?>

	<main>
		<?php 
		if (isset($_SESSION['userId'])) {
			echo'<p>You are logged in!</p>';
		}
		else{
			echo'<p>You are logged out!</p>';
		}
		?>
      <!--  <img class="coverphoto" src="images/cover.jpg" style="background-size:cover;"> --!>
	</main>

<?php require "footer.php" ?>
