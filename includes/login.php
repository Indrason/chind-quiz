<?php

	require_once('database.php');

	session_start();
	
	if(isset($_POST['login'])) {
		$uname = htmlentities(trim($_POST['username']));
		$pass = htmlentities(trim($_POST['password']));

		$sql = "SELECT username, password FROM users WHERE username='".$uname."' AND password='".$pass."'";
		$res = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($res);

		if($uname == 'admin' && $pass == 'admin123') {
			echo "<script>alert('Successfully logged in as Administrator'); location.href='../admin';</script>";
		}

		else if($uname == $data['username'] && $pass == $data['password']) {
			$_SESSION['uname'] = $uname;
			echo "<script>alert('Successfully logged in'); location.href='../home.php';</script>";
		}
		else {
			echo "<script>alert('Incorrect username or password'); location.href='../../chind-quiz';</script>";
		}
	}


	if(isset($_POST['signup'])) {

		$fname = htmlentities(trim($_POST['fname']));
		$uname = htmlentities(trim($_POST['username']));
		$email = htmlentities(trim($_POST['email']));
		$pass = htmlentities(trim($_POST['password']));
		$cpass = htmlentities(trim($_POST['cpass']));

		$test = "SELECT username FROM users WHERE username = '$uname'";
		$run_test = mysqli_query($con, $test);
		$data_test = mysqli_fetch_array($run_test);

		if($data_test != NULL) {
			echo "<script>alert('Username already exists, Please try again'); location.href='../../chind-quiz';</script>";
		}

		else if($pass == $cpass) {
			$sql = "INSERT into users (fullname, username, email, password) VALUES ('$fname','$uname','$email','$pass')";
			$res = mysqli_query($con, $sql);

			if($res) {
				echo "<script>alert('Successfully registered, please login to continue'); location.href='../../chind-quiz';</script>";
			}
		}
		else {
			echo "<script>alert('Passwords are different'); location.href='../../chind-quiz';</script>";
		}

	}


	if(isset($_POST['update'])) {

		$fname = htmlentities(trim($_POST['fname']));
		$uname = htmlentities(trim($_POST['username']));
		$email = htmlentities(trim($_POST['email']));
		$dob = htmlentities(trim($_POST['dob']));
		$qual = htmlentities(trim($_POST['qual']));
		$college = htmlentities(trim($_POST['college']));
		$pass = htmlentities(trim($_POST['password']));
		$cpass = htmlentities(trim($_POST['cpassword']));

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
		$name = htmlentities(trim($_POST['name']));
		$sub = htmlentities(trim($_POST['subject']));
		$email = htmlentities(trim($_POST['email']));
		$msg = htmlentities(trim($_POST['message']));

		$sql = "INSERT INTO feedback (name, subject, email, message) VALUES ('$name','$sub','$email','$msg')";
		$run = mysqli_query($con, $sql);

		if($run) {
			echo "<script>alert('Message successfully sent'); location.href='../about.php';</script>";
		}
	}
	

	mysqli_close($con);
?>