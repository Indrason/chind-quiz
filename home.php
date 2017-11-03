<?php
	session_start();

	require_once('includes/database.php');

	$sql_cat = "SELECT * FROM category";
	$run_cat = mysqli_query($con, $sql_cat);
	$data_cat = mysqli_fetch_array($run_cat);

	$sql_sub = "SELECT * FROM subject";
	$run_sub = mysqli_query($con, $sql_sub);
	$data_sub = mysqli_fetch_array($run_sub);
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
				<li>Computer Science</li>
				<li>General Knowledge</li>
				<li>Current Affiars</li>
			</ul>		


		<div class="title">SUBJECTS</div>
			<ul>
				<li>C</li>
				<li>C++</li>
				<li>HTML/CSS</li>
				<li>Open Source</li>
			</ul>
		
	</div>

	<section>
		Subjects	
	</section>




	<footer>&copy; CHIND Quiz, 2017</footer>

</body>
</html>