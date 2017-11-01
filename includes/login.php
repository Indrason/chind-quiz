<?php

	require_once('database.php');

	session_start();
	
	if(isset($_POST['login'])) {
		$uname = trim($_POST['username']);
		$pass = trim($_POST['password']);

		$sql = "SELECT * FROM users WHERE username='".$uname."' AND password='".$pass."'";
		$res = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($res);

		if($uname == $data['username'] && $pass == $data['password']) {
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

	


	mysqli_close($con);

?>