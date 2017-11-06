<?php

	require_once '../includes/database.php';

	if(isset($_POST['addQues'])) {
		$ques = htmlentities(trim($_POST['question']));
		$opt1 = htmlentities(trim($_POST['option1']));
		$opt2 = htmlentities(trim($_POST['option2']));
		$opt3 = htmlentities(trim($_POST['option3']));
		$opt4 = htmlentities(trim($_POST['option4']));
		$ans = htmlentities(trim($_POST['ans']));
		$cat = htmlentities(trim($_POST['cat']));

		$sql_quesA = "INSERT INTO questions (question, option1, option2, option3, option4, answer, category) VALUES ('$ques', '$opt1', '$opt2', '$opt3', '$opt4', '$ans', '$cat')";

		$run_quesA = mysqli_query($con, $sql_quesA);

		if($run_quesA) {
			echo "<script>alert('Question successfully added'); location.href='../admin';</script>";
		}
	}

	if(isset($_POST['addCat'])) {
		$cat = htmlentities(trim($_POST['cat']));

		$sql_catA = "INSERT INTO category (name) VALUES ('$cat')";
		$run_catA = mysqli_query($con, $sql_catA);

		if($run_catA) {
			echo "<script>alert('Category successfully added'); location.href='../admin';</script>";
		}
	}

	if(isset($_POST['addSub'])) {
		$sub = htmlentities(trim($_POST['sub']));

		$sql_subA = "INSERT INTO subject (name) VALUES ('$sub')";
		$run_subA = mysqli_query($con, $sql_subA);

		if($run_subA) {
			echo "<script>alert('Subject successfully added'); location.href='../admin';</script>";
		}
	}

	mysqli_close($con);
?>