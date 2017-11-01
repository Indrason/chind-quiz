<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CHIND QUIZ</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<header>
		CHIND QUIZ
	</header>

	<div id="menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="profile.php">My Account</a></li>
			<li>About</li>

			<li class="right"><img src="images/logout.png" alt="logout">&nbsp;<a href="index.php">Logout</a></li>
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

		<div class="title">TOPICS</div>
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