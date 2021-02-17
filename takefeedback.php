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
		<h1>FEEDBACKS</h1>
		<form action="" method="post">
			<table width="100%" border="1" cellpadding="5" cellspacing="5">
				<thead>
					<tr>
						<th>ID</th>
						<th>USERNAME</th>
						<th>FEEDBACK</th>
					</tr>
				</thead>
<?php
			include("db.php");
			$query = "select * from feedback";
			$data = mysqli_query($con,$query);
			while ($row = mysqli_fetch_array($data)) {
?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['feedback']; ?></td>
				</tr>
<?php				
			}			
?>			
			</table>
		</form>
	</center>
</body>
</html>