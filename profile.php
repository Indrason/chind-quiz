<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Account | CHIND Quiz</title>
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
			<li class="right">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>

	<div class="nav">
		<ul>
			<li>View Profile</li>
			<li>Edit Profile</li>
		</ul>
	</div>


	<section id="pro">
		<table>
					<caption>My Details</caption>
					<tr>
						<td><label for="fname">Full Name</label></td>
						<td><input id="fname" type="name" name="fname" placeholder="Full Name"></td>
					</tr>
					<tr>
						<td><label for="unames">Username</label></td>
						<td><input id="unames" type="name" name="username" placeholder="Username"></td>
					</tr>
					<tr>
						<td><label for="email">Email</label></td>
						<td><input id="email" type="email" name="email" placeholder="Email"></td>
					</tr>
					<tr>
						<td><label for="dob">Date of Birth</label></td>
						<td><input id="dob" type="date" name="dob" placeholder="dd-mm-yyyy"></td>
					</tr>
					<tr>
						<td><label for="qual">Qualification</label></td>
						<td><select name="qual" style="width: 310px">
							<option value="">-- Choose your qualification --</option>
							<option value="">B.Tech</option>
							<option value="">B.Sc</option>
							<option value="">B.BA</option>
							<option value="">B.A</option>
							<option value="">M.Tech</option>
							<option value="">M.Sc</option>
							<option value="">M.BA</option>
							<option value="">M.A</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="college">College/School</label></td>
						<td><input id="college" type="name" name="college" placeholder="College/School"></td>
					</tr>
					<tr>
						<td><label for="passs">Password</label></td>
						<td><input id="passs" type="password" name="password" placeholder="Password"></td>
					</tr>
				
				</table>	
	</section>




	<footer>&copy; CHIND Quiz, 2017</footer>

</body>
</html>