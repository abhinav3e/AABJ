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
			<table width="100%" border="1" cellpadding="5" cellspacing="5">
				<thead>
					<tr>
						<th>ID</th>
						<th>TITLE</th>
						<th>CONTENT</th>
						<th>IMAGE</th>
						<th>DATE</th>
						<td>OPERATION</td>
					</tr>
				</thead>
<?php
			include("db.php");
			$query = "select * from blog";
			$data = mysqli_query($con,$query);
			while ($row = mysqli_fetch_array($data)) {
?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['content']; ?></td>
					<td><img src="blog/<?php echo $row['file']; ?>" height="100px" width="100px"></td>
					<td><?php echo $row['date']; ?></td>
					<td><a href = "deleteblog.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
<?php				
			}			
?>			
			</table>
		</form>
	</center>
</body>
</html>