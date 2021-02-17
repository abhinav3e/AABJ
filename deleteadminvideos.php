<?php
include("db.php");

$id = $_GET['id'];

$sql1 = "select * from adminvideos where id = '$id'";
$result = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($result);

unlink("adminvideos/".$row['video']);

$query = "delete from adminvideos where id = '$id'";
$data = mysqli_query($con,$query);
if($data){
?>
	<script>
		alert('Video Deleted');
		window.location.href="deletevideo.php?deleted";
	</script>
<?php 
}
else {
?>
	<script>
		alert('Records not Deleted');
		window.location.href="deletevideo.php?error";
	</script>
<?php	
}
?>