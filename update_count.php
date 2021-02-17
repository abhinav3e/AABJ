<?php

include("db.php");

$type = $_POST['type'];
$id = $_POST['id'];

if ($type == 'likes') {
	$sql = "update post set likes = likes+1 where id = $id";
}
else {
	$sql = "update post set dislikes = dislikes+1 where id = $id";
}

$res = mysqli_query($con,$sql);

?>