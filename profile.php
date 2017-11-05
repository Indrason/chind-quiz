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
			<li><a href="home.php">Home</a></li>
			<li><a href="profile.php">My Account</a></li>
			<li><a href="about.php">About</a></li>

			<li class="right"><img src="images/logout.png" alt="logout">&nbsp;<a href="includes/logout.php">Logout</a></li>
			<li class="right user">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>

	<div class="nav">
		<ul>
			<li><span id="viewData">View Profile</span></li>
			<li><span id="editData">Edit Profile</span></li>
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






	<footer>&copy; CHIND Quiz, 2017</footer>

	<script src="js/chind.js"></script>


</body>
</html>