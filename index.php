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
		Image is sliding
	</div>

	<div id="users">
		<div id="LogSign">
			login and signup
			<br><br>
			<center><button id="butLog" onclick="login();">Login</button></center>
			<br>
			<br>
			<center><button id="butSig" onclick="signup();">SignUp</button></center>
		</div>
		<div id="detLog">
			<center>
			<table>
			<form onsubmit="return validLog()" method="POST">
				<caption>Login Here</caption>
				<tr>
					<td><label for="username">Username</label></td>
					<td><input id="username" type="text" name="Username" placeholder="Username"></td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td><input type="password" id="password" name="password" placeholder="Password"></td>
				</tr>
				<tr>
					<td colspan="2"><center><button type="submit">LOGIN</button></center></td>
				</tr>
			</form>
			</table>
			</center>
		</div>
	</div>

	<footer>&copy; CHIND Quiz, 2017</footer>

	<script src="js/chind.js"></script>
	<script>
		$("#detLog").hide();
		$("#butLog").click(function() {
			$("#LogSign").hide();
			$("#detLog").show();
	
		});
	</script>
</body>
</html>