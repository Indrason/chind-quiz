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
			<a href="home.php"><li class="active">Home</li></a>
			<a href="profile.php"><li>My Account</li></a>
			<a href="about.php"><li>About</li></a>

			<a href="includes/logout.php"><li class="right"><img src="images/logout.png" alt="logout">&nbsp;Logout</li></a>
			<li class="right user">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>

	<div class="nav">
		<div class="title">CATEGORIES</div>

			<ul>
				
					<?php

						$sql_cat = "SELECT id, name FROM category";
						$run_cat = mysqli_query($con, $sql_cat); 

						while($row = mysqli_fetch_array($run_cat)) {
								$id = $row['id'];
								$name = $row['name'];
								echo "<a href='includes/quiz.php?cat=$name'><li>$name</li></a>";
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

	<section id="home_img">
		<div id="lgsg">QUOTES</div>
		<table>
			<tr>
				<td><img src="images/1.jpg"></td>
				<td><img src="images/2.jpg"></td>
				<td><img src="images/3.jpg"></td>
			</tr>
			<tr>
				<td><img src="images/4.jpg"></td>
				<td><img src="images/5.jpg"></td>
				<td><img src="images/6.jpg"></td>
			</tr>
			<tr>
				<td><img src="images/7.jpg"></td>
				<td><img src="images/8.jpg"></td>
				<td><img src="images/9.jpg"></td>
			</tr>
		</table>	
	</section>




	<footer>&copy; CHIND Quiz, 2017</footer>

	<?php
		mysqli_close($con);
	?>

</body>
</html>