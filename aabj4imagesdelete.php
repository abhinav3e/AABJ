<?php
include("db.php");

$id = $_GET['id'];

$sql1 = "select * from aabjimages where id = '$id'";
$result = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($result);

unlink("aabjimagesearch/".$row['filename']);

$query = "delete from aabjimages where id = '$id'";
$data = mysqli_query($con,$query);
if($data){
?>
	<script>
		alert('Images Deleted');
		window.location.href="aabj4deleteimages.php?deleted";
	</script>
<?php 
}
else {
?>
	<script>
		alert('Records not Deleted');
		window.location.href="aabj4deleteimages.php?error";
	</script>
<?php	
}
?>