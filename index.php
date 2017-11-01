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
						<td><input id="fname" type="name" name="fname" placeholder="Full Name"></td>
					</tr>
					<tr>
						<td><label for="unames">Username</label></td>
						<td><input id="unames" type="name" name="username" placeholder="Username"></td>
					</tr>
					<tr>
						<td><label for="college">College/School</label></td>
						<td><input id="college" type="name" name="college" placeholder="College/School"></td>
					</tr>
					<tr>
						<td><label for="passs">Password</label></td>
						<td><input id="passs" type="password" name="password" placeholder="Password"></td>
					</tr>
					<tr>
						<td><label for="cpasss">Confirm Password</label></td>
						<td><input id="cpasss" type="password" name="cpass" placeholder="Confirm Password"></td>
					</tr>
					<tr>
						<td colspan="2"><center><button type="submit" name="signup">SIGN UP</button></center></td>
					</tr>
				</form>
				</table>
			</center>
		</div>
	</div>

	<footer>&copy; CHIND Quiz, 2017</footer>

	<script src="js/chind.js"></script>

</body>
</html>