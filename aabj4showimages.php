<!DOCTYPE html>
<html>
<head>
	<title>Searched Images</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		html {
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/512.jpeg');
			background-size: cover;
			background-position: fixed;
		}
		.topnav {
  			overflow: hidden;
  			margin-bottom: 10px;
		}
		.topnav a {
			font-size: 16px;
  			float: right;
  			color: white;
  			text-align: center;
  			padding: 10px 12px;
			text-decoration: none;
		}
		.topnav a:hover {
			color: lightgreen;
		}
		input[type=text] {
			width: 400px;
			height: 30px;
			border-radius: 7px;
			border: 0px solid;
		}
		input[type=submit] {
			cursor: pointer;
			width: 55px;
			height: 29px;
			border-radius: 7px;
			border: 0px solid;
			background-color: orange;
		}
		input[type=submit]:hover {
			color: white;
			background-color: green;
		}
		h2 {
			color: white;
		}
		h2:hover {
			color: black;
		}
	</style>
</head>
<body>

	<div class="topnav">
  		<a style="float: left;" href="aabj4images.php"><= Back</a>

  		<a href="aabj1front.php"><i class="fa fa-search"> A²BJ Search</i></a>

  		<a href="chat1front.php"><i class="fa fa-comments"> Chat</i></a>
  		
  		<a href="front.php"><i class="fa fa-home"> Home</i></a>
  		
  		<a href="account.php" style="margin-top: 7px"></a>
  		

	</div>

<form>
	<table align="center" height="15px">
			<tr>
				<td width="10%" style="text-align: center;">
					<a href="#"><img class="i1" src=""></a>	
				</td>
				<td>
					<input type="text" name="search" placeholder="  Search images here..">
					<input type="submit" name="submit" value="GO!">
				</td>
			</tr>
	</table>
</form>
<br>
<?php

error_reporting(0);
	include("db.php");

	if (isset($_GET['submit'])) {
		$search = $_GET['search'];

		if ($search == "") {
			
			echo "<center><h2 style='color:white'>Please write something in the Search Bar</h2></center>";
			echo "<center><img src='pics & videos/sad.png' width='400px'></center>";
			exit();
		}
		$query = "select * from aabjimages where keywords like '%$search%'";
		$data = mysqli_query($con,$query);

		if (mysqli_num_rows($data) < 1) {
			echo "<center><h2 style='color:white'>Oops!! No result Found</h2></center>";
			echo "<center><img src='pics & videos/noresult.png' width='400px'></center>";
			exit();
		}
		echo "<center><b><h2>Your result : Images for $search</h2></b></center>";

		$query1 = "select * from aabjimages where keywords like '%$search%'";
		$data1 = mysqli_query($con,$query1);

		while ($row1 = mysqli_fetch_array($data1)) {
?>
		<a href="aabjimagesearch/<?php echo $row1['filename']; ?>" target="_blank"><img  style="width: 160px; margin-left: 30px; margin-top: 50px; margin-bottom: 30px; border-radius: 8px; box-shadow: 5px 10px 18px black;" src="aabjimagesearch/<?php echo $row1['filename']; ?>"></img></a>
<?php

		}
	}
?>

</body>
</html>