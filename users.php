<?php session_start();
if (!isset($_SESSION['adminname'])) {	
	header("Location: adminlogin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center text-white bg-dark">REGISTERED USERS</h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Profile Pic</th>
				</thead>

				<tbody>
					
					<?php 
						include("db.php");
						$query = "select * from profile "; 
						$querydisplay = mysqli_query($con,$query);

						while ($result = mysqli_fetch_array($querydisplay)) {
							
							?>

							<tr>
								<td><?php echo $result['id']; ?></td>
								<td><?php echo $result['fname']; ?></td>
								<td><?php echo $result['lname']; ?></td>
								<td><img src="image/<?php echo $result['filename']; ?>" height="100px" width="100px"></td>

							</tr> 
<?php  
						}
?>
					

				</tbody>

			</table>
		</div>	
	</div>
</body>
</html>



