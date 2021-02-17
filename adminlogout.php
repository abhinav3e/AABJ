<?php 

session_start();

	if (isset($_SESSION['adminname'])) {
		unset($_SESSION['adminname']);
	}
header("Location: adminlogin.php");
 ?>