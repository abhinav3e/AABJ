<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>First...</title>
	<style>
/*		html{
			background-image: url("black.png"); 
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			height: 100%;
		}
*/
/*		h1{
			margin-top: 30px;
			text-align: center;
			font-size: 30px;
			font-family: sans-serif;
			box-sizing: border-box;
		}
		h2{
			text-align: center;
		}
		
		.button{
			padding: 0;
			
			width: 200px;
			height: 100px;
			text-align: center;
			top: 300px;
			left: 400px;
			margin-right: auto;
			margin-left: auto;
			border: none;
			border-radius: 30px;
			transition-duration: .60s;
			margin-left:  auto;
			marker-right: auto; 
		}
		.b1{
			background-color: red;
		}
		.b1:hover{
			box-shadow: 0 5px 10px rgba(0,0,0,0.5);
			transform: scale(.95);
			 
			background-size: cover;
		}
		.b2{
			background-color: green;
		}
		.b2:hover{
			box-shadow: 0 5px 10px rgba(0,0,0,0.5);
			transform: scale(.95);
		}
*/

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



	</style>
</head>
<body>


<div class="topnav">
  <a class="active" href="front.php">Home</a>
  <a href="chat1front.php">Chat</a>
  <a href="images.php">Gallery</a>
  <a href="watchvideos.php">Videos</a>
</div>



</body>
</html>