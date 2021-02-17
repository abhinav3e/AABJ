<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }  
  include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIDEOS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		
		html {
			 background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/110.jpg');
			 background-attachment: fixed;
			 background-size: cover;
		}
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
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
		.container .heading{
			font-size: 35px;
			margin: 30px;
			color: black;
			text-align: center;
		}
		.videocontainer{
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.videocontainer .video{
			height: 130px;
			width: 160px;
			margin: 2rem;
			overflow: hidden;
			border-radius: 8px;
			box-shadow: 5px 10px 18px black;
		}
		.videocontainer .video video{
			height: 100%;
			width: 100%;
			cursor: pointer;
			object-fit: cover;
		}
		.videocontainer .video video:hover{
			transition: .2s linear;
			transform: scale(1.3);
		}
		input[type=submit] {
  			background-color: green;
  		border-radius: 13px;
  color: white;
  padding: 7px 15px;
  text-decoration: none;
  cursor: pointer;
}

input[type=file] {
	cursor: pointer;
	background: grey;
	border-radius: 7px;
	color: black;
	padding: 7px 13px;
	text-align: center;
}
.design{
	margin: auto; 
	margin-top: 10px;
	width: 80%;
	padding: 10px 15px; 
}



	</style>
</head>
<body>
	<div class="topnav">
  		<a class="active" href="front.php">Home</a>
  		<a href="chat1front.php">Chat</a>
  		<a href="account.php">Account</a>
  		<a href="watchvideos.php">Videos</a>
	</div>
	<section>
		<div class="container">
			<div class="heading">
				VIDEO GALLERY
			</div>
			<div class="videocontainer">
				<div class="video">
					<a href="pics & videos/V1.mp4" target="_blank">
					<video src="pics & videos/V1.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V2.mp4" target="_blank">
					<video src="pics & videos/V2.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V3.mp4" target="_blank">
					<video src="pics & videos/V3.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V4.mp4" target="_blank">
					<video src="pics & videos/V4.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V5.mp4" target="_blank">
					<video src="pics & videos/V5.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V6.mp4" target="_blank">
					<video src="pics & videos/V6.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V7.mp4" target="_blank">
					<video src="pics & videos/V7.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V8.mp4" target="_blank">
					<video src="pics & videos/V8.mp4"></video></a>
				</div>
				<div class="video">
					<a href="pics & videos/V9.mp4" target="_blank">
					<video src="pics & videos/V9.mp4"></video></a>
				</div>
			</div>
		</div>

<?php
	
			$query = "select * from adminvideos";
			$data = mysqli_query($con,$query);
			$total = mysqli_num_rows($data);

			if($total > 0)
			{
				while($result = mysqli_fetch_assoc($data))
				{
?>	
					<a href="adminvideos/<?php echo $result['video']; ?>" target="_blank"><video onMouseOver="this.style.transition='.3s linear'; this.style.transform='scale(1.1)'" onMouseOut="this.style.transform='none'" style="width: 160px;  margin:auto; margin-right: 30px; margin-left: 30px; margin-top: 50px; margin-bottom: 30px; border-radius: 8px; box-shadow: 5px 10px 18px black;" src="adminvideos/<?php echo $result['video']; ?>"></video></a>
<?php

		}
	}	
?>

	</section>
</body>		
</html>
