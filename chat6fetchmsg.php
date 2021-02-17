<?php
include("db.php");

$room = $_POST['room'];

$query = "select username,msg,ip,ctime from msgs where room = '$room'";

$res = "";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$res = $res . '<div class = "container">';
		$res = $res . $row['username'];
		$res = $res . " <p> " . $row['msg'];

		$res = $res . '</p> <span class = "time-right">' . $row["ctime"] . ' </span></div>'; 
	}
}

echo $res;

?>