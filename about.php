<?php
	session_start();
	require_once('includes/database.php');

	$uname = $_SESSION['uname'];
	$sql = "SELECT fullname, email FROM users WHERE username='$uname'";
	$run = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($run);

?>

<!DOCTYPE html>
<html>
<head>
	<title>About | CHIND QUIZ</title>
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

	<div>
		CHIND QUIZ is a site that helps the students to increase their knowledge by the attempting various quizes and helps themselves to improve.
	</div>

	<div id="ab_query">
		<div id="lgsg">ANY QUERY</div>
		<form method="post" action="includes/login.php">
			<center>
			<table>
				<tr>
					<td><label for="name">Name</label></td>
					<td><input type="text" name="name" id="name" value="<?php echo $data['fullname']; ?>" required></td>
				</tr>
				<tr>
					<td><label for="sub">Subject</label></td>
					<td><input type="text" name="subject" id="sub" required></td>
				</tr>
				<tr>
					<td><label for="mail">Email</label></td>
					<td><input type="email" name="email" id="email" value="<?php echo $data['email']; ?>" required></td>
				</tr>
				<tr>
					<td><label for="msg">Message</label></td>
					<td><textarea name="message" id="msg" rows="4" cols="24" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="submit" name="query">SEND</button></center></td>
				</tr>
			</table>
			</center>
		</form>
	</div>
	

	<section id="ab_cont">
		<div id="lgsg">OUR CONTACTS</div>
		<center>
		<table name="cont">
			<tr>
				<td><img src="images/icon-people.png" alt="people"></td>
				<td>Ngangbam Indason<br>Registration Number: 11401214<br>Roll No.: RK1421A28</td>
			</tr>
			<tr>
				<td><img src="images/icon-email.png" alt="email"></td>
				<td>info@chindquiz.com<br>indrasonkangla@gmail.com</td>
			</tr>
			<tr>
				<td><img src="images/icon-phone.png" alt="phone"></td>
				<td>+91 8559065396</td>
			</tr>
			<tr>
				<td><img src="images/icon-add.png" alt="address"></td>
				<td>Lovely Professional University<br>Phagwara, Punjab - 144411<br>India</td>
			</tr>
		</table>
		<table>
			<tr>
				<td><img src="images/logo_facebook.gif" alt="Facebook"></td>
				<td><img src="images/logo_twitter.gif" alt="Twitter"></td>
				<td><img src="images/logo_linkedin.gif" alt="LinkedIn"></td>
			</tr>
		</table>
		</center>
	</secton>





	<footer>&copy; CHIND Quiz, 2017</footer>

</body>
</html>