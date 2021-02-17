<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }  
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>

* {
	font-family: sans-serif;
  margin: 0;
  padding: 0;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: pink;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: skyblue;
  color: black;
}

.topnav a.active {
  background-color: lightgreen;
  color: white; 
}
h2 {
  margin-top: 5px;
  color: pink;
}

html{
   background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/profileback.jpg');
   background-size: cover;
   background-size: cover;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  margin-top: 10px;
  
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}


.fnts {
	margin-left: 7px;
	float: left;
	color: green;
	margin-right: 10px;
}






</style>
</head>
<body>


<div class="topnav">
  <a class="active" href="front.php">Home</a>
  <a href="updateprofile.php">Update Profile</a>
  <a href="changeusername.php">Change Username</a>
  <a href="changeuserpass.php">Change Password</a>
</div>
<h2 style="text-align:center; margin-top: 10px">Profile</h2>

<?php 
	include("db.php");

$sql1 = "select * from profile order by id desc limit 1";
$result1 = mysqli_query($con,$sql1);
if(mysqli_num_rows($result1) > 0)
{
	while($row = mysqli_fetch_assoc($result1))
	{
		$filename = $row['filename'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$date = $row['date'];
		$gender = $row['gender'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
}
?>

<div class="card">

<?php		echo "
			<a target='_blank' href='$filename'>
				<img src='$filename' alt='Profile Pic' style='width: 100%; height: 200px;'>
			</a>
			";
?>

  <h1 style="text-align: center; color: pink"><?php echo $fname.' '.$lname; ?></h1>
  <p class="title" style="padding-top: 5px"><i class="fa fa-user fnts"></i>Username: <?php echo $_SESSION['username']; ?></p>
  <p style="padding-top: 5px"><i class="fa fa-envelope fnts"></i>E-mail: <?php echo " $email"; ?></p>
  <p style="padding-top: 5px"><i class="fa fa-phone fnts"></i>Mobile: <?php echo " $mobile"; ?></p>
  <p style="padding-top: 5px"><i class="fa fa-calendar fnts"></i>DOB: <?php echo " $date"; ?></p>
  <p style="padding-top: 5px"><i class="fa fa-male fnts"></i>Gender: <?php echo " $gender"; ?></p>
  <br>

</div>

</body>
</html>
