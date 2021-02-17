<!DOCTYPE html>
<html>
<head>
	<title>Delete Video</title>

<style type="text/css">
	td {
		text-align: center;
	}	
</style>

</head>
<body>
	<center>
		<form action="" method="post" enctype="multipart/form-data">
			<table width="90%" border="1" cellpadding="7" cellspacing="7">
				<thead>
					<tr>
						<th width="25%">ID</th>
						<th width="50%">VIDEO</th>
						<th width="25%">OPERATION</th>
					</tr>
				</thead>
<?php
			include("db.php");
			$query = "select * from adminvideos";
			$data = mysqli_query($con,$query);
			while ($row = mysqli_fetch_array($data)) {
?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><video src="adminvideos/<?php echo $row['video']; ?>" height="100px" width="100px"></video></td>
					<td><a href = "deleteadminvideos.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
<?php				
			}
?>			
			</table>
		</form>
	</center>
</body>
</html>