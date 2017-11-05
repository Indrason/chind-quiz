<?php
	session_start();

	require_once 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz | CHIND QUIZ</title>
	<link rel="stylesheet" href="../style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header>
		CHIND QUIZ
	</header>

	<div id="menu">
		<ul>
			<li><a href="../home.php">Home</a></li>
			
			<li class="right user">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>
	<div id="lgsg">
		CATEGORY : <?php echo $_GET['cat']; ?>
	</div>

	<div id="attempt">
		
			
			<?php 

				$catn = $_GET['cat'];
				$sql_q = "SELECT * FROM questions WHERE category = '$catn'";
				$run_q = mysqli_query($con, $sql_q);

				$i = 1;

				while($row = mysqli_fetch_array($run_q)) {
					echo $i." ".$row['question']."<br>";
					echo "<input type='radio' value='1' name='res'> ".$row['option1']."<br>";
					echo "<input type='radio' value='2' name='res'> ".$row['option2']."<br>";
					echo "<input type='radio' value='3' name='res'> ".$row['option3']."<br>";
					echo "<input type='radio' value='4' name='res'> ".$row['option4']."<br><br>";

					$i++;
				}



			?>

		
	</div>



	<footer>&copy; CHIND Quiz, 2017</footer>

</body>
</html>