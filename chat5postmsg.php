<?php  

session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
}
  
include("db.php");

$username = $_SESSION['username'];
$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

$sql = "insert into msgs(username, msg, room, ip, ctime) values('$username', '$msg', '$room', '$ip', CURRENT_TIMESTAMP)";

mysqli_query($con,$sql);
mysqli_close($con);
?>