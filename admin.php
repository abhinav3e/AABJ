<?php
	session_start();
	if (!isset($_SESSION['adminname'])) {	
		header("Location: adminlogin.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
}


</style>
</head>



<frameset cols="17%, *" noresize border="0">
	<frame src="leftadmin.php" name="left">
	<frame src="rightadmin.php" name="right">
</frameset>



</html>


<div class="header">
  <h1>WELCOME <?php echo $_SESSION['adminname']?></h1>
</div>