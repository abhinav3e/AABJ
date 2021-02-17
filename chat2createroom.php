<?php  
 
session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
} 

include("db.php");
$room='';
$room = $_POST['room'];

if (strlen($room) > 15 or strlen($room) < 3) {
	$msg = "Choose Room Name b/w 3 to 15";
	echo '<script>';
	echo 'alert(" '.$msg.' ");';
	
	echo 'window.location = "http://localhost/NANGAL/chat1front.php"; ';
	
	echo '</script>';
}

$query = "select * from chat where roomname = '$room'";
$result = mysqli_query($con,$query);
if ($result) {
	if (mysqli_num_rows($result)>0) {
		$msg = "Room already Exists!. Choose different one..";
		echo '<script language = "javascript">';
		echo 'alert(" '.$msg.' ");';
		
		echo 'window.location = "http://localhost/NANGAL/chat1front.php"; ';
		
		echo '</script>';
		}
	 
	else{
		$username = $_SESSION['username'];
		$query = "insert into chat(username, roomname, ctime) values('$username', '$room', CURRENT_TIMESTAMP)";
		if (mysqli_query($con,$query)) {
			$msg = "Room is ready to CHAT!!";
			echo '<script language = "javascript">';
			echo 'alert(" '.$msg.' ");';

			echo 'window.location = "http://localhost/NANGAL/chat4room.php?roomname='.$room. ' ";';

			echo '</script>';
		}
	}
} 
else{
	echo "ERROR: ".mysqli_error($con);
}
?>