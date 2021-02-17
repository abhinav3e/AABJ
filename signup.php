<?php 
	session_start();
	include("db.php");

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conpass = $_POST['conpass'];

		$sql = "select * from users where username = '$username'";
		$result = mysqli_query($con,$sql) or die();

		if (mysqli_num_rows($result) > 0) {
?>
			<script>
				alert('USER already Exists');
			</script>			
<?php
		}

		elseif(!empty($username) && !empty($password) && ($password == $conpass)){

			$query = "insert into users(username, password) values('$username', '$password')";
				$data = mysqli_query($con,$query) or die();
?>
			<script>
				alert('USER Created');
			</script>			
<?php
		}

		else {
?>
			<script>
				alert('ERROR OCCURED');
			</script>			
<?php
		}

	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	* {
		margin: 0;
		padding: 0;
	}
	body {
		background-image: url('pics & videos/109.jpeg');
		background-size: cover;
	}
	.box {
		width: 500px;
		background: rgba(0,0,0,0.8);
		margin: 37px auto;
		padding: 13px 0;
		color: white;
		box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
	}
	h1 {
		text-align: center;
		margin-bottom: 10px;
	}
	.boxin {
		margin: 31px auto;
		width: 80%;
		border-bottom: 1px solid white;
		padding-top: 3px;
		padding-bottom: 0px;	
	}	
	.boxin input {
		width: 100%;
		border: none;
		outline: none;
		background: transparent;
		color: white;
	}
	.eye {
		position: absolute;
	}
	#show {
		display: none;
	}
	.btn{
	margin-top: 20px;
}
a{
	color: white;
	background-color: blue;
	padding: 8px 16px;
	border-radius: 5px;
}
a:hover{
	color: black;
	text-decoration: none;
	background-color: lightgreen;
}

@media(min-width: 768px) and (max-width: 999px) {
	body {
		background-image: url('pics & videos/109.jpeg');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	.box {
		width: 600px;
		margin-top: 40%;
		padding: 13px 0;
	}
}
@media(min-width: 1000px) and (max-width: 1100px) {
	body {
		background-image: url('pics & videos/109.jpeg');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	.box {
		width: 700px;
		margin-top: 40%;
		padding: 13px 0;
	}
}
@media(min-width: 1101px) {
* {
		margin: 0;
		padding: 0;
	}
	body {
		background-image: url('pics & videos/109.jpeg');
		background-size: cover;
	}
	.box {
		width: 500px;
		background: rgba(0,0,0,0.8);
		margin: 37px auto;
		padding: 13px 0;
		color: white;
		box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
	}
	h1 {
		text-align: center;
		margin-bottom: 10px;
	}
	.boxin {
		margin: 31px auto;
		width: 80%;
		border-bottom: 1px solid white;
		padding-top: 3px;
		padding-bottom: 0px;	
	}	
	.boxin input {
		width: 100%;
		border: none;
		outline: none;
		background: transparent;
		color: white;
	}
	.eye {
		position: absolute;
	}
}

</style>
</head>
<body>
	<div class="box">
		<h1>Sign Up</h1>	
		<form method="POST" name="form" onsubmit="validate()" autocomplete="off">
			<div class="boxin">
				<input type="text" name="username" id="username" placeholder="Username">
				<span id="username_error" class="text-danger font-weight-bold"></span>
			</div> 
			<div class="boxin">
				<input type="password" name="password" id="password" placeholder="Password">
					<span class="eye" onclick="showhide()">
						<i id="show" class="fa fa-eye" style="color: white"></i>
						<i id="hide" class="fa fa-eye-slash" style="color: white"></i>
					</span>
				<span id="password_error" class="text-danger font-weight-bold"></span>
			</div>
			<div class="boxin">
				<input type="password" name="conpass" id="conpass" placeholder="Confirm Password">
				<span id="con_error" class="text-danger font-weight-bold"></span>
			</div>
			<center>
				<button style="margin-top: 5px;" type="submit" name="submit" class="btn btn-success">Sign Up</button>
				<p style="color: white; margin-top: 5px;">OR<br>Already have an account?</p>
				<p><a href="login.php" style="margin-top: 5px;">Login</a></p>
			</center>
		</form>
	</div>


<script>
	function showhide() {
		var x = document.getElementById("password");
		var y = document.getElementById("show");
		var z = document.getElementById("hide");

		if (x.type === 'password') {
			x.type = "text";
			y.style.display = "block";
			z.style.display = "none";
		}
		else {
			x.type = "password";
			y.style.display = "none";
			z.style.display = "block";
		}
	}

function validate()
			{
				
				var username = document.getElementById('username').value;
				var password = document.getElementById('password').value;
				var conpass = document.getElementById('conpass').value;
				
				if (username == "") {
					document.getElementById('username_error').innerHTML="* Please Fill the Username *";
					return false;
				}
				if ((username.length < 5) || (username.length > 15)) {
					document.getElementById('username_error').innerHTML="* Length must be b/w 5 and 20 *";
					return false;
				}
				if (username.search(/[0-9]/) < 0) {
					document.getElementById('username_error').innerHTML="* Atleast one digit must be there *";
					return false;
				}



				if (password == "") {
					document.getElementById('password_error').innerHTML="* Please Fill the Password *";
					return false;
				}
				if ((password.length < 5) || (password.length > 15)) {
					document.getElementById('password_error').innerHTML="* Length must be b/w 5 and 20 *";
					return false;
				}
				if (password.search(/[0-9]/) < 0) {
					document.getElementById('password_error').innerHTML="* Atleast one digit must be there *";
					return false;
				}



				if (conpass == "") {
					document.getElementById('con_error').innerHTML="* Please Fill the Confirm Password *";
					return false;
				}
				if (password != conpass) {
					document.getElementById('con_error').innerHTML="* Passwords are not matching!! *";
					return false;
				}

				return true;
    		  
			}


</script>



</body>



		
</html>