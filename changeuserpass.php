<?php

session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
}

error_reporting(0); 

include("db.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Change User Password</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body{

      font-family: sans-serif;
      background: url(pics & videos/profile.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 80.3vh;
    }
    .box{
      margin-left: auto;
      margin-right: auto;
      margin-top: 100px;
      margin-bottom: 82px;
      width: 400px;
      padding: 30px;
      top: 50%;
      left: 50%
      
      transform: translate(-50%,-50%);
      background: rgba(0,0,0,0.4);
      text-align: center;
    }
    .box h1{
      color: pink;
      text-transform: uppercase;
      font-weight: 700;
    }
    .box input[type="text"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid black;
      padding: 9px 9px;
      width: 250px;
      outline: none;
      color: black;
      border-radius: 20px;
      transition: .25px;
    }
    .box input[type="password"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid black;
      padding: 9px 9px;
      width: 250px;
      outline: none;
      color: black;
      border-radius: 20px;
      transition: .25px;
    }
    .box input[type="text"]:hover{
      width: 300px;
      border-color: cyan;
    } 
    .box input[type="password"]:hover{
      width: 300px;
      border-color: cyan;
    } 

    }
    .box input[type="submit"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid blue;
      padding: 10px 35px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: .25px;
      cursor: pointer;
    }
    #button {
      background-color: green;
      color: white;
      height: 30px;
      width: 150px;
      border-radius: 24px;
      font-size: 16px;
    }
    #button:hover {
      width: 140px;
    }

  </style>

</head>

<body>
  <form class="box" method="POST" onsubmit="return validate()">
    <h1>CHANGE PASSWORD</h1>
    <input type="text" name="username" id="username" placeholder="Enter Username" required>
    
    <input type="password" name="password" id="password" placeholder="Enter New Password" required>
    
    <input type="submit" name="submit" id="button" value="Change Password">
     
    
  </form> 

<script>
    function validate()
      { 
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        if ((password.length < 5) || (password.length > 15)) {
          
          alert("Password must have length between 5 and 15.")

          return false;
        }
        if (password.search(/[0-9]/) < 0) {
          
          alert("Password must contain atleast 1 digit.")

          return false;
        }
      }
</script>

</body>
</html>




<?php 
  
  if ($_POST['submit']) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "select * from users where username = '$username'";
    $result = mysqli_query($con,$sql) or die();

    if (mysqli_num_rows($result) == 0) {
?>
      <script>
        alert('USER dont Exists');
      </script>     
<?php
    }

    else {
    $query = "update users set password = '$password' where username = '$username'";
    $data = mysqli_query($con,$query);


    if ($data) {
      echo "<script>alert('PASSWORD CHANGED')</script>";
    }
    else {
      echo "<script>alert('ERROR OCCURED. PASSWORD NOT CHANGED.')</script>";
    }
    }
  }

  ?>