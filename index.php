<!DOCTYPE html>
<html>
<head>
	<title>CHIND Quiz</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header>
		CHIND QUIZ
	</header>

	<div id="slider">
		<div id="image">
			<img id="img" src="images/1.jpg">
		</div>
	</div>

	<div id="users">
		<div id="lgsg">LOGIN AND SIGNUP</div>
		<div id="LogSign">
			<br><br>
			<center>
				To access your account, choose from the following <br><br>
				<button id="butLog">Login</button></center>
			<br>
			<br>
			<center><button id="butSig">SignUp</button></center>
		</div>
		
		<div id="detLog">
			
			<img class="closels" src="images/close.png" alt="close" title="close" />
			<center>
			<table>
			<form onsubmit="return validLog()" method="POST" action="includes/login.php">
				<caption>Login Here</caption>
				<tr>
					<td><label for="unamel">Username</label></td>
					<td><input id="unamel" type="text" name="username" placeholder="Username" required></td>
				</tr>
				<tr>
					<td><label for="passl">Password</label></td>
					<td><input type="password" id="password" name="password" placeholder="Password" required></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="submit" name="login">LOGIN</button></center></td>
				</tr>
			</form>
			</table>
			</center>
		</div>

		<div id="detSign">
			
			<img class="closels" src="images/close.png" alt="close" title="close" />
			<center>	
				<table>
				<form onsubmit="return validSign()" method="POST" action="includes/login.php">
					<caption>SignUp Here</caption>
					<tr>
						<td><label for="fname">Full Name</label></td>
						<td><input id="fname" type="text" name="fname" placeholder="Full Name" required></td>
					</tr>
					<tr>
						<td><label for="unames">Username</label></td>
						<td><input id="unames" type="text" name="username" placeholder="Username" required></td>
					</tr>
					<tr>
						<td><label for="email">Email</label></td>
						<td><input id="email" type="email" name="email" placeholder="Email" required></td>
					</tr>
					<tr>
						<td><label for="passs">Password</label></td>
						<td><input id="passs" type="password" name="password" placeholder="Password" required></td>
					</tr>
					<tr>
						<td><label for="cpasss">Confirm Password</label></td>
						<td><input id="cpasss" type="password" name="cpass" placeholder="Confirm Password" required></td>
					</tr>
					<tr>
						<td colspan="2"><center><button type="submit" name="signup">SIGN UP</button></center></td>
					</tr>
				</form>
				</table>
			</center>
		</div>
	</div>

	<div id="cat">
		<div id="cat_title">CATEGORIES</div>
		<div id="cat_body">
			<center>
			<table>
				<tr>
					<td><img src="images/cse.jpg"><br>Computer Science</td>
					<td><img src="images/gk.gif"><br>General Knowledge</td>
					<td><img src="images/sc.png"><br>Science</td>
					<td><img src="images/arts.jpg"><br>Arts</td>
				</tr>
				<tr>
					<td colspan="4"><span style="text-align:right">And Many More...</span></td>
				</tr>

			</table>
			</center>
		</div>
	</div>

	<footer>&copy; CHIND Quiz, 2017</footer>

	<script src="js/chind.js"></script>

</body>
</html>