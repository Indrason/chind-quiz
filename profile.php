<?php
	require_once('includes/database.php');
	session_start();

	$nam = $_SESSION['uname'];
	$sql = "SELECT * FROM users WHERE username='$nam'";
	$run = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Account | CHIND Quiz</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<header>
		CHIND QUIZ
	</header>

	<div id="menu">
		<ul>
			<a href="home.php"><li>Home</li></a>
			<a href="profile.php"><li class="active">My Account</li></a>
			<a href="about.php"><li>About</li></a>

			<a href="includes/logout.php"><li class="right"><img src="images/logout.png" alt="logout">&nbsp;Logout</li></a>
			<li class="right user">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>

	<div class="nav">
		<ul>
			<span id="viewData"><li>View Profile</li></span>
			<span id="editData"><li>Edit Profile</li></span>
			<span id="viewMarks"><li>View Quiz History</li></span>
		</ul>
	</div>


	<section id="pro">
		<div id="lgsg">MY DETAILS</div>
	
		<table>
			<form method="post" action="includes/login.php">
					<tr>
						<td><label for="fname">Full Name</label></td>
						<td><input id="fname" type="text" name="fname" placeholder="Full Name" value="<?php echo $data['fullname']; ?>" readonly></td>
					</tr>
					<tr>
						<td><label for="unames">Username</label></td>
						<td><input id="unames" type="text" name="username" placeholder="Username" value="<?php echo $data['username']; ?>" readonly></td>
					</tr>
					<tr>
						<td><label for="email">Email</label></td>
						<td><input id="email" type="email" name="email" placeholder="Email" value="<?php echo $data['email']; ?>" readonly></td>
					</tr>
					<tr>
						<td><label for="dob">Date of Birth</label></td>
						<td><input id="dob" type="date" name="dob" placeholder="dd-mm-yyyy" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" value="<?php echo $data['dob']; ?>" readonly></td>
					</tr>
					<tr>
						<td><label for="qual">Qualification</label></td>
						<td><select name="qual" style="width: 310px">
							<option value="">-- Choose your qualification --</option>
							<option value="B.Tech">B.Tech</option>
							<option value="B.Sc">B.Sc</option>
							<option value="B.BA">B.BA</option>
							<option value="B.A">B.A</option>
							<option value="M.Tech">M.Tech</option>
							<option value="M.Sc">M.Sc</option>
							<option value="M.BA">M.BA</option>
							<option value="M.A">M.A</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="college">College/School</label></td>
						<td><input id="college" type="text" name="college" placeholder="College/School" value="<?php echo $data['college']; ?>" readonly></td>
					</tr>
					<tr>
						<td><label for="passs">Password</label></td>
						<td><input id="passs" type="password" name="password" placeholder="Password" value="<?php echo $data['password']; ?>" readonly></td>
					</tr>
					<tr id="ucpass">
						<td><label for="cpasss">Confirm Password</label></td>
						<td><input id="cpasss" type="password" name="cpassword" placeholder="Confirm Password"></td>
					</tr>
					<tr>
						<td colspan="2"><center><button type="submit" name="update">Update</button></center></td>
					</tr>
				</form>
				</table>

	</section>

	<section id="quizHis">
		<div id="lgsg">MY QUIZ HISTORY</div>

		<table>
			<tr>
				<th>SL. NO</th>
				<th>DATE / TIME</th>
				<th>CATEGORY</th>
				<th>MARKS OBTAINED</th>
				<th>TOTAL MARKS</th>
			</tr>

			<?php

				$uname = $_SESSION['uname'];
				$sl = 1;
				$sql_test = "SELECT * FROM result WHERE username = '$uname'";
				$run_test = mysqli_query($con, $sql_test);
				while($row = mysqli_fetch_array($run_test)) {
					echo "<tr>";
					echo "<td>".$sl."</td><td>".$row['dated']."</td><td>".$row['category']."</td><td>".$row['marks']."</td><td>".$row['totalmarks']."</td>";
					echo "</tr>";
					$sl++;
				}	

				?>
		</table>
		<br>
		
	</section>



	<footer>&copy; CHIND Quiz, 2017</footer>

	<script src="js/chind.js"></script>

	<?php
		mysqli_close($con);
	?>


</body>
</html>