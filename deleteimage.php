<!DOCTYPE html>
<html>
<head>
	<title></title>

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
						<th width="50%">IMAGES</th>
						<th width="25%">OPERATION</th>
					</tr>
				</thead>
<?php
			include("db.php");
			$query = "select * from adminimgs";
			$data = mysqli_query($con,$query);
			while ($row = mysqli_fetch_array($data)) {
?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><img src="adminimgs/<?php echo $row['file_source']; ?>" height="100px" width="100px"></td>
					<td><a href = "deleteadminimgs.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
<?php				
			}
?>			
			</table>
		</form>
	</center>
</body>
</html>