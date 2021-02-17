<?php
include("db.php");

$id = $_GET['id'];

$sql1 = "select * from blog where id = '$id'";
$result = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($result);

unlink("blog/".$row['file']);

$query = "delete from blog where id = '$id'";
$data = mysqli_query($con,$query);
if($data){
?>
	<script>
		alert('Blog Deleted');
		window.location.href="blogdelete.php?deleted";
	</script>
<?php 
}
else {
?>
	<script>
		alert('Blog not Deleted');
		window.location.href="blogdelete.php?error";
	</script>
<?php	
}
?>