<?php session_start();
if (!isset($_SESSION['adminname'])) {	
	header("Location: adminlogin.php");
}

error_reporting(0);
?>



<!DOCTYPE html>
<html>
<head>
<title>Blogs</title>
<style>

	html {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/blogimg1.jpg');
		background-attachment: fixed;
		background-position: center;
		background-size: 100% 150%;
	}
	input[type="text"] {
		width: 500px;
		height: 35px;
		border-radius: 7px;
		border: 0px solid black;
	}
	textarea {
		width: 500px;
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
	cursor: pointer;
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
	cursor: pointer;
}
input[type="reset"]:hover {
	color: white;
	background-color: red;
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
input[type=date] {
	width: 170px;
	height: 30px;
	cursor: pointer;
	border: 1px solid white;
	border-radius: 7px;
}	
h1 {
	text-align: center;
	color: white;
}
h1:hover {
	color: orange;
}

	</style>
	
</head>
<body>
	<h1>Add Blog</h1>
	<form method="POST" enctype="multipart/form-data" autocomplete="off">
		<table width="70%" align="center" cellspacing="30">
			<tr>
				<td style="color: white;">Blog Title</td>
				<td><input type="text" name="title" size="68"></td>
			</tr>

			<tr>
				<td style="color: white">Blog Content</td>
				<td><textarea cols="70" rows="20" name="content"></textarea></td>
			</tr>

			<tr>
				<td style="color: white">Blog Images</td>
				<td><input type="file" name="uploadfile"></td>
			</tr>

			<tr>
				<td style="color: white">Blog Date</td>
				<td><input type="date" name="date"></td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Upload">
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>

<?php 
	include("db.php");


	if ($_POST['submit']) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$date = $_POST['date'];
		$file = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];

		$folder = "blog/".$file;

		move_uploaded_file($tempname,$folder);

		if ($title != "" && $content != "" && $file != "" && $date != "") {
			$query = "insert into blog(title, content, file, date) values('$title','$content','$file','$date')";
			$data = mysqli_query($con,$query);

			if ($data) {

				echo "<script>alert('BLOG UPLOADED');</script>";
			}
		}
		else {
			echo "<script>alert('Please Fill all the Fields');</script>";
		}
	}
?>
