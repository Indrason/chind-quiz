<?php
	session_start();

	require_once 'database.php';


			$catn = $_POST['cat'];
			$num = $_POST['no'];

			$x1 = $_POST['res1'];
			$x2 = $_POST['res2'];
			$x3 = $_POST['res3'];	

			$results = array();

			$sql = "SELECT * FROM questions WHERE category='$catn'";
			$run = mysqli_query($con, $sql);	

			$j =1;
			$marks = 0;
			$tot = 0;
			$na = 0;
			$ic=0;

			while($row = mysqli_fetch_array($run)) {
				$results[$j] = $row['answer'];
				$j++;
				$tot++;
			}

			if($x1 == "") {
				$marks = $marks+0;
				$na++;
			}
			else if($x1 == $results[1]) {
				$marks = $marks+1;
			}
			else {
				$marks = $marks-0.25;
				$ic++;
			}


			if($x2 == "") {
				$marks = $marks+0;
				$na++;
			}
			else if($x2 == $results[2]) {
				$marks = $marks+1;
			}
			else {
				$marks = $marks-0.25;
				$ic++;
			}

			if($x3 == "") {
				$marks = $marks+0;
				$na++;
			}
			else if($x3 == $results[3]) {
				$marks = $marks+1;
			}
			else {
				$marks = $marks-0.25;
				$ic++;
			}


			$matam = date("D d M Y-h:i:s A");

			$uname = $_SESSION['uname'];
			
			$sql_res = "INSERT INTO result (username, category, dated, marks, totalmarks) VALUES ('$uname', '$catn', '$matam', '$marks', '$tot')";
			$run_res = mysqli_query($con, $sql_res);

			if($run_res) {	
			echo "<script>alert('Total number of Questions: $tot \\nTotal number of Questions Non Attempted: $na \\nTotal of Incorrect Response: $ic \\nMarks Obtained: $marks \\nTotal Marks: $tot'); location.href='../home.php';</script>";	

		}
?>
