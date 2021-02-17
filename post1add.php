<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>

	<script>
	function open()
	{
		document.querySelector('#filename').click();
	}

	function displayImg(e)
	{
		if (e.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				document.querySelector('#picDisplay').setAttribute('src', e.target.result);
			}
			reader.readAsDataURL(e.files[0]);
		}
	}

	document.getElementById("picDisplay").disabled=true;

</script>

<style>
	html {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/510.jpg');
	}
	body {
		padding: 0;
		margin: 0;
	}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

h1 {
	margin-top: 5px;
	text-align: center;
}

	#picDisplay{
    	display: block;
    	width: 150px;
    	margin: 5px auto;
    	border-radius: 10px;
    }

    label {
    	text-align: center;
    	cursor: pointer;
    }
    label:hover {
    	color: orange;
    }

textarea {
	margin-top: 15px;
	border-radius: 7px;
	width: 500px;
	height: 100px;
	border: 1px solid black;
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

</style>

</head>
<body>

<div class="topnav">
  <a class="active" href="front.php">Home</a>
  <a href="post2show.php">Posts</a>
  <a href="chat1front.php">Chat</a>
  <a href="images.php">Gallery</a>
</div>

	<form method="post" name="form" enctype="multipart/form-data">
		<div style="height: 240px;">

			<h1>Add Post</h1>

			<img src="pics & videos/profilepic.png" target="_blank" onclick="open()" id="picDisplay" >
		
			<center><b><label for="filename">Upload Pic</label></b></center>
		
			<input type="file" name="filename" id="filename" onchange="displayImg(this)" style="display: none;">
		
		</div>
		
		<table width="65%" align="center" cellspacing="15">
			<tr>
				<td><b>Add Caption</b></td>
				<td><textarea name="caption"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Upload Pic">
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

	session_start();
	if (!isset($_SESSION['username'])) {	
		header("Location: login.php");
	}

	if ($_POST['submit']) {
		$username = $_SESSION['username'];
		$caption = $_POST['caption'];

		$filename = $_FILES['filename']['name'];
		$tempname = $_FILES['filename']['tmp_name'];
		$folder = "post/".$filename;

		move_uploaded_file($tempname, $folder);

		if ($filename != "") {
			$query = "insert into post(username, filename, caption) values('$username', '$filename', '$caption')";
				$data = mysqli_query($con,$query);
		}
		else {
			echo "<script>alert('Image field cant be empty.')</script>";
		}

		if ($data) {

				echo "<script>alert('Post Uploaded')</script>";
			}
	}
?>























