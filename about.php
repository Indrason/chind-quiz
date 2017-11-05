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
<body bgcolor="#ffffb3">
	<header>
		CHIND QUIZ
	</header>

	<div id="menu">
		<ul>
			<a href="home.php"><li>Home</li></a>
			<a href="profile.php"><li>My Account</li></a>
			<a href="about.php"><li>About</li></a>

			<a href="includes/logout.php"><li class="right"><img src="images/logout.png" alt="logout">&nbsp;Logout</li></a>
			<li class="right user">Welcome <?php echo $_SESSION['uname']; ?></li>
		</ul>

	</div>

	<div id="ab_detail">
		<center><img src="images/quiz.gif" height="250px"></center> <br>
		CHIND QUIZ is a site that helps the students or other people to increase their knowledge by attempting various quizes and keep themselves up to date. Any user can attempt quiz in any category where they want. They can even read new updates or information that they need to know.<br>

		<br>
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
		<table name="social">
			<tr>
				<td><a href="https://www.facebook.com/indrason.ngangbam.7" target="_blank"><img src="images/logo_facebook.gif" alt="Facebook"></a></td>
				<td><a href="https://twitter.com/IndrasonC" target="_blank"><img src="images/logo_twitter.gif" alt="Twitter"></a></td>
				<td><a href="https://www.linkedin.com/in/indrason-ngangbam-154493129/" target="_blank"><img src="images/logo_linkedin.gif" alt="LinkedIn"></a></td>
				<td><a href="https://github.com/Indrason" target="_blank"><img src="images/GitHub-Logo.png"></a></td>
			</tr>
		</table>
		</center>
	</secton>





	<footer>&copy; CHIND Quiz, 2017</footer>

</body>
</html>