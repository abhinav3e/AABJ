<?php
include("db.php");

$id = $_GET['id'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$date = $_GET['date'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];

$query = "UPDATE profile SET fname = '$fname', lname = '$lname', date = '$date', gender = '$gender', email = '$email', mobile = '$mobile' WHERE id = '$id'";
$data = mysqli_query($con,$query);
if($data){
	echo "<script>alert('Updated');</script>";
}
else
{
	echo "no";
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonym ous">

    <title>Profile</title>

    <style>
    	body{
    		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/profile.jpg'); 
    		background-attachment: fixed;
    		background-size: cover;
    	} 
    	a{
    		display: inline-block;
    		color: white;
    		border-radius: 5px;
    		background-color: blue;
    		padding: 7px 13px;
    		text-align: center;
    		text-decoration: none;
    	}
    	a:hover{
    		background-color: brown;
    		color: white;
    		text-decoration: none;
    	}

    </style>

  </head>
  <body>
	<div class="container">
		<div class="myform" style="width: 60%; height: 30%; padding: 5px 25px 0px 25px; border-radius: 10px; margin: auto;">
			<form method="GET" action="">
				<div class="row">
					<div class="form-group col-6">
						<label style="color: white; margin-top: 60px;">ID</label>
						<input type="text" name="id" class="form-control" placeholder="ID" value="<?php echo "$id" ?>">	
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
						<label style="color: white;">First Name</label>
						<input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo "$fname" ?>">
					</div>
					<div class="form-group col-6">
						<label style="color: white;">Last Name</label>
						<input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo "$lname" ?>">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
						<label style="color: white;">Date of Birth</label>
						<input type="date" name="date" class="form-control" placeholder="DOB" value="<?php echo "$date" ?>">
					</div>
					<div class="form-group col-6" >
						<label style="color: white;">Gender</label>
						<select class="form-control" name="gender" value="<?php echo "$gender" ?>">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
						<label style="color: white;">E-mail</label>
						<input type="text" name="email" class="form-control" placeholder="E-mail" value="<?php echo "$email" ?>">
					</div>
					<div class="form-group col-6">
						<label style="color: white;">Mobile No.</label>
						<input type="number" name="mobile" class="form-control" placeholder="Mobile No." value="<?php echo "$mobile" ?>">
					</div>
				</div>


				<div class="row">
					<div class="form-group col-6">
						<input type="submit" class="btn btn-success" name="submit" value="Update">
					</div>
					<div class="form-group col-6">
						<a href="operations.php">Preview</a>
					</div>
					
				</div>
			</div>
			</form>
		</div>
	</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>