<!DOCTYPE html>
<html>
<head>
<title>Login as Admin or User</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

html {
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/first1.jpg');
	background-position: center;
}
h1 {
	color: white;
}
h1:hover {
	color: orange;
}
.card1,.card3 {
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  	transition: 0.3s;
  	width: 27%;
  	text-align: center;
  	background-color: white;
}
.card1:hover, .card3:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card2 {
	width: 20%;
	text-align: center;
	float: left; 
	margin-left: 30px;
}
.card2 h1 {
	margin-top: 150px;
}
.container {
	padding: 2px 16px;
}
button {
	margin: 25px 0px;-
	padding: 13px 38px;
	border: none;
	text-align: center;
	display: inline-block;
	font-size: 15px;
	cursor: pointer;
	border-radius: 10px;
}
.b1 {
	background-color: green;

}
.b1:hover {
	background-color: orange;
}
.b2 {
	background-color: orange;
}
.b2:hover {
	background-color: green;
}
a {
	text-decoration: none;
	color: white;
}
@media(min-width: 230px) and (max-width: 299px) {
	html {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/first1.jpg');
		background-position: center;
	}
	h1 {
		margin: 20px;
	}
	.card1, .card3 {
		width: 17%;	
		margin-top: 30px;
	}
	.card2 {
		width: 10%;
	}
	button {
		margin: 20px 0px;
		padding: 5px 7px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 7px;
		margin-bottom: 10px;
		margin-left: -11px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 300px) and (max-width: 359px) {
	html {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/first1.jpg');
		background-position: center;
	}
	h1 {
		margin: 20px;
	}
	.card1, .card3 {
		width: 17%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 50px;
		margin-left: -20px;
	}
	button {
		margin: 20px 0px;
		padding: 5px 7px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: -12px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 360px) and (max-width: 436px) {
	html {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/first1.jpg');
		background-position: center;
	}
	h1 {
		margin: 20px;
	}
	.card1, .card3 {
		width: 17%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 50px;
		margin-left: -20px;
	}
	button {
		margin: 20px 0px;
		padding: 10px 10px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: -12px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 437px) and (max-width: 540px) {
	html {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/first1.jpg');
		background-position: center;
	}
	.card1, .card3 {
		width: 20%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 60px;
		margin-left: -3px;
	}
	button {
		margin: 20px 0px;
		padding: 10px 15px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 541px) and (max-width: 631px) {
	h1 {
		margin: 25px;
	}
	.card1, .card3 {
		width: 23%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 70px;
		margin-left: 5px;
	}
	button {
		margin: 20px 0px;
		padding: 10px 15px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 632px) and (max-width: 732px) {
	h1 {
		margin: 25px;
	}
	.card1, .card3 {
		width: 24%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 80px;
		margin-left: 18px;
	}
	button {
		margin: 20px 0px;
		padding: 10px 15px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 733px) and (max-width: 767px) {
	h1 {
		margin: 30px;
	}
	.card1, .card3 {
		width: 25%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 100px;
		margin-left: 30px;
	}
	button {
		margin: 20px 0px;
		padding: 13px 20px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 768px) and (max-width: 868px) {
	h1 {
		margin: 30px;
	}
	.card1, .card3 {
		width: 25%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 110px;
		margin-left: 35px;
	}
	button {
		margin: 20px 0px;
		padding: 13px 20px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 869px) and (max-width: 1100px) {
	h1 {
		margin: 30px;
	}
	.card1, .card3 {
		width: 26%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 120px;
		margin-left: 45px;
	}
	button {
		margin: 20px 0px;
		padding: 16px 24px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 10px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}
@media(min-width: 1101px) {
	h1 {
		margin: 40px;
	}
	.card1, .card3 {
		width: 26%;	
	}
	.card2 {
		width: 10%;
		align-items: center;
	}
	.card2 h1 {
		margin-top: 170px;
		margin-left: 120px;
	}
	button {
		margin: 20px 0px;
		padding: 13px 38px;
		border: none;
		text-align: center;
		display: inline-block;
		font-size: 15px;
		margin-bottom: 10px;
		margin-left: 0px;
		cursor: pointer;
		border-radius: 10px;
	}
}

	
</style>
</head>
<body>
	<div>
	<center>
		<h1>LOGIN AS</h1>
		
	</center>
	
	<div class="card1" style="float: left; margin-left: 80px">
  		<img src="pics & videos/admin1.png" alt="Admin" style="width:100%">
  		<div class="container"> 
    		<button class="b1"><a href="adminlogin.php"><b>ADMIN</b></a></button> 
  		</div>
	</div>

	<div class="card2">
  
	</div>

	<div class="card3" style="float: right; margin-right: 80px">
  		<img src="pics & videos/user1.png" alt="User" style="width:100%">
  		<div class="container"> 
    		<button class="b2"><a href="signup.php"><b>USER</b></a></button>
  		</div>
	</div>
</div>
	
</body>
</html>