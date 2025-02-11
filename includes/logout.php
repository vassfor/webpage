<?php  

	session_destroy();

	header("Location: ../loginpage.php?logout=success");
	exit;
?>