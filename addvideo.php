<!DOCTYPE html>
<html>
<head>
	<title>Upload Videos</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
			<input type="file" name="video" multiple><br>
			<input type="submit" name="submit" value="UPLOAD">
	</form>
</body>
</html>


<?php
	error_reporting(0);
	include("db.php");

	if (isset($_POST['submit'])) { 

		$video = $_FILES['video']['name'];
		$tempname = $_FILES['video']['tmp_name'];
		$folder = "adminvideos/".$video;

		if(move_uploaded_file($tempname, $folder))
		{
			$query = "insert into adminvideos (video) values('$video')";
			$data = mysqli_query($con,$query);	
		}
	}

	if ($data) {
		echo '<script>alert("Video Uploaded")</script>';
	}


?>
