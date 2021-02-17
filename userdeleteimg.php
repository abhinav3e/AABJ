<?php
include("db.php");

error_reporting(0);

$id = $_GET['id'];
$sql1 = "select * from gallery where id = '$id'";
$result = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($result);

unlink("gallery/".$row['picsource']);

$query = "delete from gallery where id = '$id'";
$data = mysqli_query($con,$query);
if($data){
?>
	<script>
		alert('Image Deleted');
		window.location.href="images.php?deleted";
	</script>
<?php 
}
else {
?>
	<script>
		alert('Error. Image not Deleted.');
		window.location.href="images.php?error";
	</script>
<?php	
}
?>