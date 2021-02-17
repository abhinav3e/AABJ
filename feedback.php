<?php
	include("db.php");
	session_start();
	if (!isset($_SESSION['username'])) {	
		header("Location: login.php");
	}

$feedback = $_POST['feedback'];
$username = $_SESSION['username'];


if ($feedback != "") {
	
	$query = "insert into feedback(username, feedback) values('$username','$feedback')";
	$data = mysqli_query($con,$query);
	if ($data) {
?>
		<script>
			alert('Feedback Sent');
			window.location.href="front.php";
		</script>
<?php 
	}
	else {
?>
		<script>
			alert('Feedbck not Sent');
			window.location.href="front.php";
		</script>
<?php	
	}
}
else {
?>
	<script>
		alert('Please Enter Something!');
		window.location.href="front.php";
	</script>
<?php	
}
?>

