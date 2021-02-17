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

	<style>
		td{
			text-align: center;
		}
	</style>
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
					<th>DOB</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Profile Pic</th>
					<th colspan="2" style="text-align: center;">Operations</th>
				</thead>

				<tbody>
					
					<?php 
						include("db.php");
					
						$query = "select * from profile "; 
						$querydisplay = mysqli_query($con,$query);

						while ($result = mysqli_fetch_array($querydisplay)) {

							echo "
							<tr>
								<td>".$result['id']."</td>
								<td>".$result['fname']."</td>
								<td>".$result['lname']."</td>
								<td>".$result['date']."</td>
								<td>".$result['gender']."</td>
								<td>".$result['email']."</td>
								<td>".$result['mobile']."</td>
								<td>".$result['filename']."</td>
								<td><a href = 'edit.php?id=$result[id]&fname=$result[fname]&lname=$result[lname]&date=$result[date]&gender=$result[gender]&email=$result[email]&mobile=$result[mobile]&filename=$result[filename]'>Update</td>
								<td><a href = 'delete.php?id=$result[id]'>Delete</td>
							</tr>
							";
							}
?>

				 

					

				</tbody>

			</table>
		</div>	
	</div>
</body>
</html>



