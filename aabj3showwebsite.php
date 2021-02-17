<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html {
			background-image: url("pics & videos/aabj3.png");
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
		}
		input[type = text] {
			width: 500px;
			height: 35px;
			border-radius: 16px;
			border: 1px solid green;
			margin-left: 30px;
		}
		input[type = submit] {
			width: 50px;
			height: 30px;
			border-radius: 10px;
			border: 1px solid green;
			background-color: white;
			font-size: 16px;
			margin-left: 10px;
		}
		input[type = submit]:hover {
			background-color: green;
			color: white;
		}
		a {
			text-decoration: none;
			color: white;
		}
		.i1{
			width: 110%;
		}
		.i2 {
			width: 150px;
			height: 100px;
			margin: 5px;
		}


@media (max-width: 691px) {
	input[type = text] {
			width: 400px;
			height: 30px;
		}
		input[type = submit] {
			height: 28px;
		}
		.i2 {
			width: 130px;
			height: 110px;
		}
}
@media (max-width: 580px) {
	input[type = text] {
			width: 300px;
			height: 30px;
		}
		input[type = submit] {
			height: 27px;
		}
		.i1{
			width: 40px;
			height: 25px;
		}
		.i2 {
			width: 120px;
			height: 100px;
		}
}
@media (max-width:484px) {
	input[type = text] {
			width: 250px;
			height: 30px;
		}
		.i1{
			width: 60px;
			height: 25px;
		}
		.i2 {
			width: 80px;
			height: 70px;
		}
}




	</style>
</head>
<body>
	<form method="get">
		<table border="0" width="100%" height="15px">
			<tr>
				<td width="10%" style="text-align: center;">
					<a href="aabj1front.php"><img class="i1" src="pics & videos/aabj4.png"></a>	
				</td>
				<td>
					<input type="text" name="search" placeholder=" Type here to Search..">
					<input type="submit" name="submit" value="GO!">
				</td>
			</tr>
		</table><br>

		<table border="0" style="margin-left: 100px">
			<tr>
<?php
error_reporting(0);
	include("db.php");

	if (isset($_GET['submit'])) {
		$search = $_GET['search'];

		if ($search == "") {
			
			echo "<center><h2 style='color:white'>Please write something in the Search Bar</h2></center>";
			echo "<center><img src='sad.png' width='400px'></center>";
			exit();
		}
		$query = "select * from add_website where keywords like '%$search%' limit 0,4";
		$data = mysqli_query($con,$query);

		if (mysqli_num_rows($data) < 1) {
			echo "<center><h2 style='color:white'>No result Found</h2></center>";
			echo "<center><img src='noresult.png' width='400px'></center>";
			exit();
		}
		echo "<center><a href='#'><b>Images for $search</b></a></center>";
		while ($row = mysqli_fetch_array($data)) {
			echo "
					<td>
						<a href='$row[4]' target='_blank'><img class='i2' src='$row[4]'></a><br>
					</td>

			";
		}
	}
?>
			</tr>
		</table>
	</form>
<hr>
	<table border="0" width="70%" style="margin-left: 100px;">
<?php
	$query1 = "select * from add_website where keywords like '%$search%'";
	$data1 = mysqli_query($con,$query1);

	while ($row1 = mysqli_fetch_array($data1)) {
		echo "

			<tr>
				<td>
					<font size='5' color='white'><b><a href='$row1[1]'>$row1[0]</a></b></font><br>";
					echo "<font size='3' color='green'>$row1[1]</font><br>";
					echo "<font size='3' color='white'>$row1[3]</font><br><br>
				</td>
			</tr>
		";
	}
?>
</body>
</html>