<?php

	session_start();
	session_destroy();


	echo "<script>alert('Successfully logged out'); location.href='../../chind-quiz';</script>";

?>