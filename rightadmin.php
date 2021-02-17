<?php session_start();
if (!isset($_SESSION['adminname'])) {	
	header("Location: adminlogin.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<style type="text/css">
		html {
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/adminback.jpg'); 
		}
		a {
			text-decoration: none;
			color: pink;
		}
		a:hover {
			color: white;
		}


.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  height: 100%;
  border-radius: 5px;
  border: solid black;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px;
}

.container {
  padding: 2px 16px;
}



.a1 {
  background-color: brown;
  color: white;
  border: 1px solid green;
  padding: 15px 20px;
  border-radius: 7px;
  text-decoration: none;
  display: inline-block;
}

.a1:hover {
  background-color: lightblue;
  color: black;
}
.a2 {
  background-color: lightpink;
  color: black;
  border: 1px solid green;
  padding: 15px 20px;
  border-radius: 7px;
  text-decoration: none;
  display: inline-block;
}

.a2:hover {
  background-color: green;
  color: white;
}

	</style>
</head>
<body>
	<table width="100%" height="40">
		<tr>
			<td align="center"><font size="7" color="white"><b>WELCOME <?php echo $_SESSION['adminname']?></b></font></td>
		</tr>
	</table>
<br><br><br>
	<table width="100%" height="150" cellspacing="15">
		<tr>
			<td width="25%" rowspan="5">
				<div class="card" style="height: 200px">
  					<img src="pics & videos/blog1.jpg" style="width:100%; height: 100px">
  					<div class="container">
<?php
	include("db.php");
	error_reporting(0);
					$query = "select * from blog";
					$data = mysqli_query($con,$query);
					$total = mysqli_num_rows($data);
					if ($data != 0) {
?>
    					<h4>Total Blogs: <?php echo $total; ?></h4> 
<?php
					}
?>
  					</div>	
				</div>
			</td>

			<td width="25%" rowspan="5">
				<div class="card" style="height: 200px">
  					<img src="pics & videos/usersimg.png" style="width:100%; height: 100px">
  					<div class="container">
<?php
	include("db.php");
	error_reporting(0);	
					$query = "select * from users";
					$data = mysqli_query($con,$query);
					$total = mysqli_num_rows($data);
					if ($data != 0) {
?>
    					<h4>Total Users: <?php echo $total; ?></h4> 
<?php
					}
?> 
  					</div>	
				</div>
			</td>

			<td width="25%" rowspan="5">
				<div class="card" style="height: 200px;">
  					<img src="pics & videos/feedbackimg.jpeg" style="width:100%; height: 100px">
  					<div class="container">
<?php
					$query = "select * from feedback";
					$data = mysqli_query($con,$query);
					$total = mysqli_num_rows($data);
					if ($data != 0) {
?>
    					<h4>Feed-backs: <?php echo $total; ?></h4> 
<?php
					}
?> 
  					</div>	
				</div>
			</td>
			
			<td width="25%" style="text-align: center;"><a href="changeadminpass.php" class="a1"><i class="fa fa-sign-out-alt"></i>CHANGE PASSWORD</a></td>
		</tr>
		<tr>
			<td style="text-align: center;"><a href="adminlogout.php" class="a2">LOGOUT</a></td>
		</tr>
	</table>

</body>
</html>