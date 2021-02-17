<?php
include("db.php");

$id = $_GET['id'];

$sql1 = "select * from adminimgs where id = '$id'";
$result = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($result);

unlink("adminimgs/".$row['file_source']);

$query = "delete from adminimgs where id = '$id'";
$data = mysqli_query($con,$query);
if($data){
?>
	<script>
		alert('Images Deleted');
		window.location.href="deleteimage.php?deleted";
	</script>
<?php 
}
else {
?>
	<script>
		alert('Records not Deleted');
		window.location.href="deleteimage.php?error";
	</script>
<?php	
}
?>