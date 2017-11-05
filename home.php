<?php
	session_start();

	require_once('includes/database.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>CHIND QUIZ</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header>
		CHIND QUIZ
	</header>

	<div id="menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="profile.php">My Account</a></li>
			<li><a href="about.php">About</a></li>

			<li class="right"><img src="images/logout.png" alt="logout">&nbsp;<a href="includes/logout.php">Logout</a></li>
			<li class="right user">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>

	<div class="nav">
		<div class="title">CATEGORIES</div>

			<ul>
				
					<?php

						$sql_cat = "SELECT * FROM category";
						$run_cat = mysqli_query($con, $sql_cat); 

						while($row = mysqli_fetch_array($run_cat)) {
								$id = $row['id'];
								$name = $row['name'];
								echo "<li><a href='includes/quiz.php?cat=$name'>$name</a></li>";
						}

					?>

			</ul>



		<div class="title">SUBJECTS</div>

			<ul>
				<?php 
					$sql_sub = "SELECT name FROM subject";
					$run_sub = mysqli_query($con, $sql_sub);

					while($row = mysqli_fetch_array($run_sub)) {
						echo "<li>".$row['name']."</li>";
					}
				?>
			</ul>
		
	</div>

	<section>
		Subjects	
	</section>




	<footer>&copy; CHIND Quiz, 2017</footer>

</body>
</html>