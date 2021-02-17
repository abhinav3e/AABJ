<?php
	session_start();
	if (!isset($_SESSION['adminname'])) {	
		header("Location: adminlogin.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>aabj upload images</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		html {
			background-image: url('pics & videos/501.jpg');
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
		}
		h1 {
			color: black;
			margin: 50px;
		}
		h1:hover {
			color: red;
		}

		td {
			color: black;
		}
		input[type=text] {
			width: 400px;
			height: 80px;
			border-radius: 7px;
			border: 0px solid black;
		}
		input[type=file] {
			color: green;
		cursor: pointer;
		border: 2px solid black;
		border-radius: 7px;
		color: black;
		padding: 7px 13px;
		text-align: center;
		}
		input[type="submit"] {
			cursor: pointer;
	width: 100px;
	height: 35px;
	border-radius: 7px;
	border: 1px solid green;
	color: green;
	background-color: white;
	font-size: 15px;
}
input[type="submit"]:hover {
	color: white;
	background-color: green;
}	
input[type="reset"] {
	cursor: pointer;
	width: 100px;
	height: 35px;
	border-radius: 7px;
	border: 1px solid red;
	color: red;
	background-color: white;
	font-size: 15px;
}
input[type="reset"]:hover {
	color: white;
	background-color: red;
}
a {
	background-color: green;
	color: white;
	text-decoration: none;
	padding: 5px 7px;
	border-radius: 7px;
} 


	</style>
</head>
<body>
	<h1 align="center">Add Images to A²BJ Images</h1>
	<form method="post" enctype="multipart/form-data" autocomplete="off">
		<table width="65%" align="center" cellspacing="15">
			<tr>
				<td><b>Images</b></td>
				<td><input type="file" name="filename[]" multiple></td>
			</tr>
			<tr>
				<td><b>Keywords</b></td>
				<td><input type="text" name="keywords"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Upload">
					&nbsp &nbsp &nbsp
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php

error_reporting(0);
include("db.php");

	if ($_POST['submit']) {

		$keywords = $_POST['keywords'];

		$imgcount = count($_FILES['filename']['name']);
		for ($i=0; $i < $imgcount; $i++) { 

			$filename = $_FILES['filename']['name'][$i];
			$tempname = $_FILES['filename']['tmp_name'][$i];
			$folder = "aabjimagesearch/".$filename;
			
			move_uploaded_file($tempname, $folder);

			if ($keywords != "" && $filename != "") {
				$query = "insert into aabjimages(keywords, filename) values('$keywords', '$filename')";
				$data = mysqli_query($con,$query);
			}
			else {
				echo "<script>alert('Fields cant be empty.')</script>";
			}
		}

		if ($data) {

				echo "<script>alert('Images Inserted')</script>";
			}
			else {
				echo "<script>alert('Failed to Upload!!')</script>";
			}
	}
?>






























