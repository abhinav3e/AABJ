<?php  

session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }
  
  error_reporting(0);

include("db.php");
$roomname = $_GET['roomname'];

$query = "select * from chat where roomname = '$roomname'";
$result = mysqli_query($con,$query);
if ($result) {
		if (mysqli_num_rows($result) == 0) {
			$msg = "This Room does not Exist!!. Kindly create ONE!!";
			echo '<script>';
			echo 'alert(" '.$msg.' ");';
		
			echo 'window.location = "http://localhost/NANGAL/chat1front.php"; ';
		
			echo '</script>';
		}
	}
else{
	echo "ERROR: ".mysqli_error($con);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/108.jpg');
  width: 100vh;
  background-position: center;

}
.chatbox { 
  width: 600px;
  height: 450px;
  border: 1px solid black;
  margin-top: 20px;
  margin-bottom: 150px;
  margin-left: 270px;
}
#head {
  width: 100%;
  height: 50px;
  background-color: grey;
  border: 1px solid black;
}
#body {
  background-image: url('pics & videos/107.png');
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  height: 350px;
  border: 1px solid black;
}
#tail {
  width: 100%;
  height: 50px;
  background-color: skyblue;
  border: 1px solid black;
}
input[type=text] {
  width: 83%;
  height: 37px;
  border: none;
  border-radius: 9px;
  margin-top: 6px;
  margin-left: 10px;
}
.but{
  background-color: green;
  color: white;
  border-radius: 7px;
  border: 0px;
  padding: 5px 11px;
  margin-left: 9px;

}
img {
  width: 40px;
  height: 35px;
  margin-top: 6px;
  margin-left: 10px;
}
h2 {
  margin-top: -40px;
  margin-left: 165px;
  color: black;
}

.container {
  border: 1px solid grey;
  border-radius: 1px;
  margin-bottom: 5px;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}
.container img.right {
  float: right;
  margin-left: 5px;
  margin-right:0;
}
.time-right {
  float: right;
}
.anyclass{
  width: 100%;
  height: 347px;
  overflow-y: scroll;
}
.chatbox h1 {
  margin-bottom: 30px;
  margin-left: 200px;
  color: white;
}
h1:hover {
  color: orange;
}

.topnav {
  
  overflow: hidden;
}

.topnav a {
  float: left;
  color: pink;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.a1 {
  color: white;
  background-color: green;
  margin: 10px 0px 0px 10px;
  border-radius: 7px;
}
.a1:hover {
  background-color: lightgreen;
  color: black;
}
.a2 {
  background-color: orange;
  margin: 10px 0px 0px 10px;
  border-radius: 7px;
}
.a2:hover {
  background-color: pink;
  color: black;
}
.a3 {
  background-color: brown;
  margin: 10px 0px 0px 10px;
  border-radius: 7px;
}
.a3:hover {
  background-color: cyan;
  color: black;
}

@media (max-width: 687px) {
.chatbox { 
  margin-top: 50px;
  width: 600px;
  height: 450px;
  margin-left: 180px;
}
}

</style>

</head>
<body>

<div class="topnav">
  <a class="a1" href="front.php">Home</a>
  <a class="a2" href="chat1front.php">Create new Room</a>
  <a class="a3" href="images.php">Gallery</a>
</div>

  <div class="chatbox">
    <h1>Chat Room</h1>
    <div id="head">
      <img src="pics & videos/106.png"><h2>Room Name: <?php echo $roomname; ?></h2>
    </div>
    <div id="body">
      <div class="container">
        <div class="anyclass"></div>
      </div>      
    </div>
    <div id="tail">
      <input type="text" name="usermsg" id="usermsg" placeholder="  Type Your Message Here...">
      <button class="but" name="submitmsg" id="submitmsg">Send</button> 
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>

<script>

// for fetch msgs from db----

setInterval(runFunction,1000);

function runFunction()
{
	$.post("chat6fetchmsg.php", {room: '<?php echo $roomname ?>'},

		function(data,status)
		{
			document.getElementsByClassName('anyclass')[0].innerHTML = data;
		}

		)
}






var input = document.getElementById("usermsg");
// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});


$("#submitmsg").click(function()
{
	var clientmsg = $("#usermsg").val();

	$.post("chat5postmsg.php", {text: clientmsg, room: '<?php echo $roomname ?>',ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'},

	function(data,status)
	{
		document.getElementsByClassName('anyclass')[0].innerHTML = data;
	}

	);

	$("#usermsg").val("");

	return false;
}
);
</script>

</body>
</html>
