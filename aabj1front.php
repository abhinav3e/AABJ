<!DOCTYPE html>
<html>
<head>
	<title>AABJ Engine</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

		html {
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/aabj5.jpg');
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
		}
		body{
			margin: 0;
		}
		input[type="text"] {
			width: 500px;
			height: 35px;
			border-radius: 17px;
			border: 0px solid black;
			font-size: 16px;
			outline: none;
		}
		input[type="submit"] {
			color: white;
			width: 80px;
			height: 35px;
			background: transparent;
			border-radius: 5px;
			border: 2px solid white;
			font-size: 16px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: green;
			color: white;
		}	
		.topnav {
  			overflow: hidden;
		}
		.topnav a {
  			float: right;
  			color: #f2f2f2;
  			text-align: center;
  			padding: 14px 16px;
			text-decoration: none;
  			font-size: 15px;
		}

		a:hover {

			color: black;
			border-radius: 10px;
			
		}
		button {
			float: left;
			background-color: orange;
			border: 0px;
			border-radius: 10px;
			margin-left: 15px;
			margin-top: 10px;
			padding: 0px 0px;
		}
		button .a1 {
			color: black;
		}
		button .a1:hover {
			background-color: cyan;
			color: black;
		}
		.icns {
			margin-top: 17px;
			height: 150px;
			display: flex;
			justify-content: center;
		}
		.icns a {
			height: 60px;
			width: 60px;
			background-color: lightgrey;
			border-radius: 50px;
			text-align: center;
			line-height: 70px;
			margin: 10px;
			box-shadow: 1px 4px 2px 2px black;
		}
		.icns a i {
			font-size: 30px;
			transition:  all 0.3s linear;
		}
		.icns a:hover i {
			transform: scale(1.3);
		}

		#mic {
			color: white;
			background: rgba(0,0,0,0.5);
			margin-left: 1px; 
			padding: 10px 10px; 
			font-size: 25px; 
			border-radius: 50px; 
			cursor: pointer;
		}
		#mic:hover {
			color: green;
		}



		
	</style>
</head>
<body>
	<div class="topnav">
  		
  		<a href="front.php" style="margin-right: 10px; margin-top: 7px; font-size: 20px"><i class="fa fa-home"> Home</i></a>
  		
  		<a href="chat1front.php" style="margin-top: 7px; font-size: 20px"><i class="fa fa-comments"> Chat</i></a>
  		
  		<a href="account.php" style="margin-top: 7px"></a>
  		
  		<button><a class="a1" href="aabj4images.php"><i class="fa fa-search"></i> <b>A²BJ Images</b></i></a></button>

	</div>
	
	<center>
		<img src="pics & videos/aabj1.png" width="30%">
	</center>
	<form method="get" action="aabj3showwebsite.php" autocomplete="off">
	
		<center>
			<input type="text" name="search" id="voicetotext" placeholder=" Type here to search or click on the mic to speak..">
			<i id="mic" class="fa fa-microphone" onclick="record()"></i>
		</center>
	<br>
		<center>
			<input type="submit" name="submit" value="Search">
		</center>
	</form>
	<div class="icns">
		<a href="https://www.youtube.com/" target="_blank">
			<i class="fa fa-youtube" style="color: #ff0000"></i>
		</a>
		<a href="https://www.instagram.com/" target="_blank">
			<i class="fa fa-instagram" style="color: #ff0080"></i>
		</a>
		<a href="https://www.facebook.com/" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="https://mail.google.com/" target="_blank">
			<i class="fa fa-envelope" style="color: #ff3300"></i>
		</a>
		<a href="https://twitter.com/" target="_blank">
			<i class="fa fa-twitter" style="color: #0066cc"></i>
		</a>
	</div>

<script>
	function record() {
		var x = new webkitSpeechRecognition();
		x.lang = "en-GB";
		x.onresult = function(event) {
			document.getElementById('voicetotext').value=event.results[0][0].transcript;
		}
		x.start();
	}
</script>

</body>
</html>















