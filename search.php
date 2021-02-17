<?php session_start();
if (!isset($_SESSION['adminname'])) {	
	header("Location: adminlogin.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Search data</title>
	<style>
		html{
			background-image: url("pics & videos/search.jpg"); 
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			height: 100%;
		}
		
		table,th,td{
			border: 1px solid cyan;
			width: 1100px;
		}
		.btn{
			padding: 0;
			
			width: 100px;
			height: 30px;
			text-align: center;
			top: 300px;
			left: 400px;
			margin-right: auto;
			margin-left: auto;
			border: none;
			border-radius: 50px;
			transition-duration: .60s;
			margin-left:  auto;
			marker-right: auto; 
		}
		.btn{
			background-color: green;
		}
		.btn:hover{
			box-shadow: 0 5px 10px rgba(0,0,0,0.5);
			transform: scale(.95);
		}
		.enter{
			width: 150px;
			height: 35px;
			border-radius: 10px;
			border: none; 
			transition-duration: .60s;
		}
		.enter:hover{
			box-shadow: 0 5px 10px rgba(0,0,0,0.5);
			transform: scale(.95);
		}
		@media (max-width: 952px){
			table,th,td{
			border: 1px solid cyan;
			width: 550px; 
		}
		}
	</style>
</head>
<body>
	<center>
		<h1 style="color: orange">SEARCH for DATA</h1>
		<br><br>
		<div class="container">
			<form action="" method="POST">
				<input type="text" name="id" class="enter" placeholder=" Enter the id...">
				<input type="submit" name="search" class="btn" value="SEARCH">
			</form>
			<br>
			<table>
				<tr>
					<th style="color: white">First Name</th>
					<th style="color: white">Last Name</th>
					<th style="color: white">Date</th>
					<th style="color: white">GENDER</th>
					<th style="color: white">E-mail</th>
					<th style="color: white">Mobile</th><br>
				</tr>

				<?php 
					
					include("db.php");

					if (isset($_POST['search'])) {
						$id = $_POST['id'];
						$query = "select * from profile where id = '$id'";
						$result = mysqli_query($con,$query);

						while ($row = mysqli_fetch_array($result)) {
							?>
							<tr>
								<td style="color: white"><?php echo $row['fname']; ?></td>
								<td style="color: white"><?php echo $row['lname']; ?></td>
								<td style="color: white"><?php echo $row['date']; ?></td>
								<td style="color: white"><?php echo $row['gender']; ?></td>
								<td style="color: white"><?php echo $row['email']; ?></td>
								<td style="color: white"><?php echo $row['mobile']; ?></td>
							</tr>

							<?php
						}
					}
				 ?>

			</table>
		</div>
	</center>
</body>
</html>