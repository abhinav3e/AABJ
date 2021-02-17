<?php
include("db.php");
$id = $_GET['id'];
$query = "delete from profile where id = '$id'";
$data = mysqli_query($con,$query);
if($data){
?>
	<script>
		alert('Records Deleted');
		window.location.href="operations.php?deleted";
	</script>
<?php
}
else {
?>
	<script>
		alert('Records not Deleted');
		window.location.href="operations.php?error";
	</script>	
<?php
}
?>




