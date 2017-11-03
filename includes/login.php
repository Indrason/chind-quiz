<?php

	require_once('database.php');

	session_start();
	
	if(isset($_POST['login'])) {
		$uname = trim($_POST['username']);
		$pass = trim($_POST['password']);

		$sql = "SELECT * FROM users WHERE username='".$uname."' AND password='".$pass."'";
		$res = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($res);

		if($uname == 'admin' && $pass == 'admin123') {
			echo "<script>alert('Successfully logged in as Administrator'); location.href='../admin';</script>";
		}

		else if($uname == $data['username'] && $pass == $data['password']) {
			$_SESSION['uname'] = $uname;
			echo "<script>alert('Successfully logged in'); location.href='../home.php';</script>";
		//	header('location: ../home.php');
		}
		else {
		//	header('location: ../index.php');
			echo "<script>alert('Incorrect username or password'); location.href='../index.php';</script>";
		//	redirect('../index.php');
		}
	}


	if(isset($_POST['signup'])) {

		$fname = trim($_POST['fname']);
		$uname = trim($_POST['username']);
		$college = trim($_POST['college']);
		$pass = trim($_POST['password']);
		$cpass = trim($_POST['cpass']);

		if($pass == $cpass) {
			$sql = "INSERT into users (fullname, username, college, password) VALUES ('$fname','$uname','$college','$pass')";
			$res = mysqli_query($con, $sql);

			if($res) {
				echo "<script>alert('Successfully registered, please login to continue'); location.href='../index.php';</script>";
			//	header('location: ../index.php');
			}
		}
		else {
			echo "<script>alert('Passwords are different'); location.href='../index.php';</script>";
		//	header('location: ../index.php');
		}

	}


	if(isset($_POST['update'])) {

		$fname = trim($_POST['fname']);
		$uname = trim($_POST['username']);
		$email = trim($_POST['email']);
		$dob = trim($_POST['dob']);
		$qual = trim($_POST['qual']);
		$college = trim($_POST['college']);
		$pass = trim($_POST['password']);
		$cpass = trim($_POST['cpassword']);

		$abc = $_SESSION['uname'];

		if($pass == $cpass) {
			$sql = "UPDATE users SET fullname='$fname', username='$uname', email='$email', dob='$dob', qualification='$qual', college='$college', password='$pass' WHERE username='$abc'";
			$res = mysqli_query($con, $sql);

			if($res) {
				echo "<script>alert('Successfully updated'); location.href='../profile.php';</script>";
			}
		}
		else {
			echo "<script>alert('Passwords are mismatched'); location.href='../profile.php';</script>";
		}
	}



	if(isset($_POST['query'])) {
		$name = trim($_POST['name']);
		$sub = trim($_POST['subject']);
		$email = trim($_POST['email']);
		$msg = trim($_POST['message']);

		$sql = "INSERT INTO feedback (name, subject, email, message) VALUES ('$name','$sub','$email','$msg')";
		$run = mysqli_query($con, $sql);

		if($run) {
			echo "<script>alert('Message successfully sent'); location.href='../about.php';</script>";
		}
	}
	


	mysqli_close($con);

?>