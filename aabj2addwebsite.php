<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>

	html{
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/aabj6.jpg');
		background-repeat: no-repeat;
		background-size: 100% 150%;
		background-attachment: fixed;
			background-position: center;
	}
	h1 {
		color: white;
	}
	h1:hover {
		color: orange;
	}
	td {
		color: white;
	}

input[type="text"] {
	width: 500px;
	height: 35px;
	border-radius: 7px;
	border: 0px solid black;
}
input[type="submit"] {
	width: 100px;
	height: 35px;
	border-radius: 7px;
	border: 0px solid black;
	color: green;
	background-color: white;
	font-size: 15px;
}
input[type="submit"]:hover {
	color: white;
	background-color: green;
}	
input[type="reset"] {
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
textarea {
	border-radius: 7px;
	width: 500px;
	height: 100px;
	border: 1px solid green;
}
body{
	margin: 0;
}

input[type=file] {
	cursor: pointer;
	border: 1px solid white;
	border-radius: 7px;
	color: black;
	padding: 7px 13px;
	text-align: center;
	color: white;
}


</style>
</head>
<body>
	<h1 align="center">Add a Website</h1>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<table border="0" width="65%" align="center" cellspacing="15">
			<tr>
				<td>Website Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Website Link</td>
				<td><input type="text" name="link"></td>
			</tr>
			<tr>
				<td>Website Keywords</td>
				<td><input type="text" name="keywords"></td>
			</tr>
			<tr>
				<td>Website Description</td>
				<td><textarea name="description"></textarea></td>
			</tr>
			<tr>
				<td>Website Images</td>
				<td><input type="file" name="uploadfile[]" multiple></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Add Website">
					&nbsp &nbsp &nbsp
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html


<?php
error_reporting(0);
include("db.php");

	if ($_POST['submit']) {
		$title = $_POST['title'];
		$link = $_POST['link'];
		$keywords = $_POST['keywords'];
		$description = $_POST['description'];

		$imgcount = count($_FILES['uploadfile']['name']);
		for ($i=0; $i < $imgcount; $i++) { 

			$uploadfile = $_FILES['uploadfile']['name'][$i];
			$tempname = $_FILES['uploadfile']['tmp_name'][$i];
			$folder = "aabjimgs/".$uploadfile;
			
			move_uploaded_file($tempname, $folder);

			if ($title != "" && $link != "" && $keywords != "" && $description != "" && $uploadfile != "") {
				$query = "insert into add_website values('$title', '$link', '$keywords', '$description', '$uploadfile')";
				$data = mysqli_query($con,$query);
			}
			else {
				echo "<script>alert('Fields cant be empty.')</script>";
			}
		}

			if ($data) {

				echo "<script>alert('Website Inserted')</script>";
			}
			else {
				echo "<script>alert('Failed!!')</script>";
			}
	}
?>
















