<?php

	require_once '../includes/database.php';

	if(isset($_POST['addQues'])) {
		$ques = trim($_POST['question']);
		$opt1 = trim($_POST['option1']);
		$opt2 = trim($_POST['option2']);
		$opt3 = trim($_POST['option3']);
		$opt4 = trim($_POST['option4']);
		$ans = trim($_POST['ans']);
		$cat = trim($_POST['cat']);

		$sql_quesA = "INSERT INTO questions (question, option1, option2, option3, option4, answer, category) VALUES ('$ques', '$opt1', '$opt2', '$opt3', '$opt4', '$ans', '$cat')";

		$run_quesA = mysqli_query($con, $sql_quesA);

		if($run_quesA) {
			echo "<script>alert('Question successfully added'); location.href='../admin';</script>";
		}
	}

	if(isset($_POST['addCat'])) {
		$cat = trim($_POST['cat']);

		$sql_catA = "INSERT INTO category (name) VALUES ('$cat')";
		$run_catA = mysqli_query($con, $sql_catA);

		if($run_catA) {
			echo "<script>alert('Category successfully added'); location.href='../admin';</script>";
		}
	}

	if(isset($_POST['addSub'])) {
		$sub = trim($_POST['sub']);

		$sql_subA = "INSERT INTO subject (name) VALUES ('$sub')";
		$run_subA = mysqli_query($con, $sql_subA);

		if($run_subA) {
			echo "<script>alert('Subject successfully added'); location.href='../admin';</script>";
		}
	}

?>