<?php 
	require_once '../includes/database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | CHIND QUIZ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="title">CHIND QUIZ - ADMIN PORTAL</div>

	<div id="menu">
		<ul>
			<li id="menu_cat"><img class="menu_icon" src="../images/icon-category.png"> Categories</li>
			<li id="menu_sub"><img class="menu_icon" src="../images/icon-sub.png"> Subjects</li>
			<li id="menu_ques"><img class="menu_icon" src="../images/icon-ques.png"> Questions</li>
			<li id="menu_user"><img class="menu_icon" src="../images/icon-user.png"> Users</li>
			<li id="menu_feedback"><img class="menu_icon" src="../images/icon-feedback.png"> Feedback</li>

			<li class="right"><a href="../includes/logout.php"><img class="menu_icon" src="../images/logout.png"> Logout</a></li>
		</ul>
	</div>

	<div id="cat">
		<div id="subt">CATEGORIES</div>
		<br>
		<center>
		<table class="data">
			<tr>
				<th>SL. NO.</th>
				<th>CATEGORY</th>
			</tr>

			<?php
				$sql_cat = "SELECT * FROM category";
				$run_cat = mysqli_query($con, $sql_cat);
				while($row = mysqli_fetch_array($run_cat)) {
					echo "<tr>";
					echo "<td>".$row['id']."</td><td>".$row['name']."</td>";
					echo "</tr>";
				}
			?>
		</table>
		</center>
	</div>

	<div id="sub">
		<div id="subt">SUBJECTS</div>
		<br>
		<center>
		<table class="data">
			<tr>
				<th>SL. NO</th>
				<th>SUBJECT</th>
			</tr>

			<?php
				$sql_sub = "SELECT * FROM subject";
				$run_sub = mysqli_query($con, $sql_sub);

				while($row = mysqli_fetch_array($run_sub)) {
					echo "<tr>";
					echo "<td>".$row['id']."</td><td>".$row['name']."</td>";
					echo "</tr>";
				}
			?>
		</table>
		</center>
	</div>

	<div id="ques">
		<div id="subt">QUESTIONS</div>
		<br>
		<center>
		<table class="data">
			<tr>
				<th>SL. NO</th>
				<th>QUESTION</th>
				<th>OPTION 1</th>
				<th>OPTION 2</th>
				<th>OPTION 3</th>
				<th>OPTION 4</th>
				<th>ANSWER</th>
				<th>CATEGORY</th>
			</tr>

			<?php

				$sql_ques = "SELECT * FROM questions";
				$run_ques = mysqli_query($con, $sql_ques);

				while($row = mysqli_fetch_array($run_ques)) {
					echo "<tr>";
					echo "<td>".$row['id']."</td><td>".$row['question']."</td><td>".$row['option1']."</td><td>".$row['option2']."</td><td>".$row['option3']."</td><td>".$row['option4']."</td><td>".$row['answer']."</td><td>".$row['category']."</td><td>";
					echo "</tr>";
				}

			?>

		</table>
		<br>

		<button id="but_add_ques">ADD QUESTIONS</button>
		<br><br>

		<div id="add_ques">
			<table>
				<form action="manageData.php" method="post">

					<tr>
						<td><label for="question">Question</label></td>
						<td><textarea id="question" name="question" placeholder="Enter Question" rows="4" cols="60" required></textarea></td>
					</tr>
					<tr>
						<td><label for="option1">Option 1</label></td>
						<td><textarea id="option1" name="option1" placeholder="Enter Option 1" rows="4" cols="60" required></textarea></td>
					</tr>
					<tr>
						<td><label for="option2">Option 2</label></td>
						<td><textarea id="option2" name="option2" placeholder="Enter Option 2" rows="4" cols="60" required></textarea></td>
					</tr>
					<tr>
						<td><label for="option3">Option 3</label></td>
						<td><textarea id="option3" name="option3" placeholder="Enter Option 3" rows="4" cols="60" required></textarea></td>
					</tr>
					<tr>
						<td><label for="option4">Option 4</label></td>
						<td><textarea id="option4" name="option4" placeholder="Enter Option 4" rows="4" cols="60" required></textarea></td>
					</tr>
					<tr>
						<td><label for="ans">Answer</label></td>
						<td><input type="number" id="ans" name="ans" placeholder="Enter Answer (1/2/3/4)" style="height:40px; width:500px;" required></td>
					</tr>
					<tr>
						<td><label for="cat">Category</label></td>
						<td>
							<select id="cat" name="cat" style="width:500px; height:40px;" required>
								<option>-- Select category --</option>

								<?php

									$sql_cat = "SELECT * FROM category";
									$run_cat = mysqli_query($con, $sql_cat);
									while($row = mysqli_fetch_array($run_cat)) {
										
										echo "<option value='".$row['name']."''>".$row['name']."</option>";
										
									}
								?>

							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2"><br><center><button type="submit" name="addQues">ADD</button></center></td>
					</tr>

				</form>
			</table>
		</div>

		</center>
	</div>

	<div id="user">
		<div id="subt">USERS</div>
		<br>
		<center>
		<table class="data">
			<tr>
				<th>SL. NO.</th>
				<th>FULLNAME</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
				<th>DATE OF BIRTH</th>
				<th>QUALIFICATION</th>
				<th>COLLEGE</th>
			</tr>

			<?php

				$sql_user = "SELECT * FROM users";
				$run_users = mysqli_query($con, $sql_user);

				while($row = mysqli_fetch_array($run_users)) {
					echo "<tr>";
					echo "<td>".$row['id']."</td><td>".$row['fullname']."</td><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['dob']."</td><td>".$row['qualification']."</td><td>".$row['college']."</td>";
					echo "</tr>";
				}

			?>

		</table>
		</center>
	</div>

	<div id="feedback">
		<div id="subt">FEEDBACK</div>
		<br>
		<center>
		<table class="data">
			<tr>
				<th>SL. NO</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>SUBJECT</th>
				<th>MESSAGE</th>
			</tr>

			<?php 

				$sql_fb = "SELECT * FROM feedback";
				$run_fb = mysqli_query($con, $sql_fb);

				while($row = mysqli_fetch_array($run_fb)) {
					echo "<tr>";
					echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['subject']."</td><td>".$row['message']."</td>";
					echo "</tr>";
				}

			?>
		</table>
		</center>
	</div>





	<footer>
		&copy; CHIND QUIZ, 2017
	</footer>


	<script src="admin.js"></script>

</body>
</html>