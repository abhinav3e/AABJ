<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Profile</title>

    <style>
    	body{
    		background: url(pics & videos/profile.jpg); 
    		background-attachment: fixed;
    		background-size: cover;
    	} 
    	h3:hover{
    		color: orange;
    	}

    	#profileDisplay{
    		display: block;
    		width: 20%;
    		margin: 10px auto;
    		border-radius: 50%;
    	}


		a:link, a:visited {
  			background-color: skyblue;
  			color: brown;
  			padding: 6px 15px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			border-radius: 5px;
		}

		a:hover {
  			background-color: cyan;	
  			color: black;
		}
div .myform {
	background: grey; 
	margin-bottom: 20px; 
	width: 65%; 
	height: 50%;
	padding: 2px 15px 1px 15px; 
	border-radius: 10px; 
	margin: auto;
}
label {
	color: black;
	font-size: 16px;
}
    

@media (max-width: 992px) {
  div .myform {
  	width: 87%;
  	height: 55%;
  }
}
@media (max-width: 576px) {
  div .myform {
  	width: 70%;
  	height: 55%;
  }
}
@media (max-width: 397px) {
  div .myform {
  	width: 87%;
  	height: 55%;
  }
}
@media (max-width: 304px) {
  div .myform {
  	width: 88%;
  	height: 70%;
  }
}
    

    </style>


<script type="text/javascript">
	function open()
	{
		document.querySelector('#filename').click();
	}

	function displayImg(e)
	{
		if (e.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
			}
			reader.readAsDataURL(e.files[0]);
		}
	}
</script>

  </head>
  <body>

<?php

include("db.php");

if (isset($_POST['btn'])) {
	$username = $_SESSION['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	$filename = $_FILES["filename"]["name"];
	$tempname = $_FILES["filename"]["tmp_name"];
		
		$folder = "image/".$filename;
		move_uploaded_file($tempname, $folder);

		$sql = "insert into profile(username, fname, lname, date, gender, email, mobile, filename) values('$username', '$fname', '$lname', '$date', '$gender', '$email', '$mobile', '$filename')";
		$data = mysqli_query($con,$sql);
		echo $data;

		if($data){
		echo '<script>alert("Profile Uploaded")</script>';
		}
}

?> 
    
	    <h3 class="text-center">Complete your PROFILE!!</h3>

	
	<div class="container">
		<div class="myform">

			<form method="post" name="form" action="profile.php" onsubmit="return validation()" enctype="multipart/form-data">

				<div class="form-group text-center" >
					<img src="pics & videos/profilepic.png" onclick="open()" id="profileDisplay" >
					<label for="filename" onmouseover="this.style.color='green'" onmouseout="this.style.color='white'">Profile Pic</label>
					<input type="file" name="filename" id="filename" onchange="displayImg(this)" id="filename" style="display: none;">
					<span id="file_error" class="text-danger font-weight-bold"></span>
				</div>

				<div class="row">
					<div class="form-group col-6">
						<label>First Name</label>
						<input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
						<span id="fname_error" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group col-6">
						<label>Last Name</label>
						<input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
						<span id="lname_error" class="text-danger font-weight-bold"></span>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
						<label>Date of Birth</label>
						<input type="date" name="date" class="form-control" placeholder="DOB">
					</div>
					<div class="form-group col-6" >
						<label>Gender</label>
						<select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
						<label>E-mail</label>
						<input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
						<span id="email_error" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group col-6">
						<label>Mobile No.</label>
						<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile No.">
						<span id="mobile_error" class="text-danger font-weight-bold"></span>
					</div>
				</div>


				<div class="row">
					<div class="form-group col-6 text-center">
						<input type="submit" class="btn btn-success" name="btn" value="Submit">
					</div>
					<div class="form-group col-6 text-center">
						<a href="viewprofile.php">Profile</a>
					</div>
				</div>
 
			</div>
			</form>


		</div>
	</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
		function validation()
		{
			var fname = document.getElementById('fname').value;
			var lname = document.getElementById('lname').value;
			var mobile = document.getElementById('mobile').value;
			var email = document.getElementById('email').value;

			var filename = document.getElementById('filename');
			var img_exts = /(\.jpg|\.jpeg|\.png|\.jfif)$/i;
			var path = filename.value;

			if ((filename.value != "") && (!img_exts.exec(path))){
				document.getElementById('file_error').innerHTML = "* File must be of Extensions :- .jpg or .jpeg or .png or .jfif *";
					return false;
			}
			if (parseFloat(filename.files[0].size/(1024*1024)) > 4) {
				document.getElementById('file_error').innerHTML = "* File Size must be smaller than 4 MB *";
				return false;
			}



				if (fname == "") {
					document.getElementById('fname_error').innerHTML="* Please Fill this Field *";
					return false;
				}
				if ((fname.length < 3) || (fname.length > 20)) {
					document.getElementById('fname_error').innerHTML="* Length must be b/w 5 and 20 *";
					return false;
				}
				if (fname.search(/[0-9]/) > 0) {
					document.getElementById('fname_error').innerHTML="* No digit must be there *";
					return false;
				}



				if ((lname.length != "") && (lname.length < 3) || (lname.length > 20)) {
					document.getElementById('lname_error').innerHTML="* Length must be b/w 5 and 20 *";
					return false;
				}
				if (lname.search(/[0-9]/) > 0) {
					document.getElementById('lname_error').innerHTML="* No digit must be there *";
					return false;
				}		



				if (isNaN(mobile)) {
					document.getElementById('mobile_error').innerHTML="* Please Write only digits *";
					return false;
				}	
				if ((mobile.length != "") && (mobile.length !=10)) {
					document.getElementById('mobile_error').innerHTML="* Must be of 10 Digits *";
					return false;
				}	



				if ((email.length != "") && (email.indexOf('@') <= 0)) {
					document.getElementById('email_error').innerHTML="* '@' should not be at First Position *";
					return false;
				}
				if ((email.length != "") && (email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.')) {
					document.getElementById('email_error').innerHTML="* There must be 3 or 4 characters after '.' *";
					return false;
				}

			return true;
		}
</script>


  </body>
</html>





















