<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html {
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/102.jpg');
			background-attachment: fixed;
		}
		form {
			margin-top: 180px;
		}
		input[type=file] {
			margin-bottom: 30px;
			margin-top: 10px;
			cursor: pointer;
			border: 2px solid white;
			border-radius: 7px;
			color: black;
			padding-top: 7px;
			padding-bottom: 7px;
			padding-left: 13px;
			padding-right: 16px;
			text-align: center;
			color: white;	
			cursor: pointer;
		}
		input[type=file]:hover {
			border-color: pink;
			transform: scale(1.1);
			transition: 1s;
		}
		input[type=submit] {
			background-color: orange;
			border: 0px solid black;
			padding: 15px 25px;
			border-radius: 10px;
			color: white;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: green;
			transform: scale(1.1);
			transition: 1s;
		}
	</style>
</head>
<body>
	<center>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="doc[]" multiple><br>
			<input type="submit" name="submit" value="UPLOAD">
		</form>
	</center>
</body>
</html>


<?php
	include("db.php");

	if (isset($_POST['submit'])) {
	$imgcount = count($_FILES['doc']['name']);
	for ($i=0; $i < $imgcount; $i++) { 

		$filename = $_FILES['doc']['name'][$i];
		$tempname = $_FILES['doc']['tmp_name'][$i];
		$folder = "adminimgs/".$filename;

		if(move_uploaded_file($tempname, $folder))
		{
			$query = "insert into adminimgs (file_source) values('$filename')";
			$data = mysqli_query($con,$query);	
		}
	}

	if ($data) {
		echo '<script>alert("Image Uploaded")</script>';
	}
}

?>
