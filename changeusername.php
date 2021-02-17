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
  <title>Change Username</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body{

      font-family: sans-serif;
      background: url(pics & videos/profile.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 82vh;
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
      color: white;
      border-radius: 20px;
      transition: .25px;
      background: transparent;
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
      color: white;
      border-radius: 20px;
      background: transparent;
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

    
    #button {
      background-color: green;
      color: white;
      height: 40px;
      width: 170px;
      border-radius: 24px;
      font-size: 16px;
      border: 0px;
    }
    #button:hover {
      color: black;
      background-color: orange;
    }

    a {
      text-decoration: none;
      float: right;
      background-color: green;
      color: white;
      padding: 7px 14px;
      border-radius: 7px;
      margin-top: -80px;
      margin-right: 30px;
    }
    a:hover {
      color: white;
      background-color: red;
      text-decoration: none;
    }

  </style>

</head>

<body>
  <a href="logout.php">Logout</a>
  <form class="box" method="POST" onsubmit="return validate()">
    <h1>CHANGE USERNAME</h1>
    <input type="text" name="username" placeholder="Enter Username" required>
    
    <input type="text" name="username2" id="username" placeholder="Enter New Username" required>
    
    <input type="submit" name="submit" id="button" value="Change Username">
  </form> 
</body>
</html>




<?php 
  
  if ($_POST['submit']) {

    $username = $_POST['username'];
    $username2 = $_POST['username2'];

    $sql = "select * from users where username = '$username'";
    $result = mysqli_query($con,$sql) or die();

    if (mysqli_num_rows($result) == 0) {
?>
      <script>
        alert('USER dont Exists');
      </script>     
<?php
    }


elseif (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $username2 = $_POST['username2'];

    $sql = "select * from users where username = '$username2'";
    $result = mysqli_query($con,$sql) or die();

    if (mysqli_num_rows($result) > 0) {
?>
      <script>
        alert('Username already taken');
      </script>     
<?php
    }
}



    else {

    $query = "update users set username = '$username2' where username = '$username'";
    $data = mysqli_query($con,$query);


    if ($data) {
      echo "<script>alert('USERNAME CHANGED. Login again to save the Changes.')</script>";
    }
    else {
      echo "<script>alert('ERROR OCCURED. USERNAME NOT CHANGED.')</script>";
    }


    $query1 = "update profile set username = '$username2' where username = '$username'";
    $data1 = mysqli_query($con,$query1);


    $query2 = "update chat set username = '$username2' where username = '$username'";
    $data2 = mysqli_query($con,$query2);


    $query3 = "update msgs set username = '$username2' where username = '$username'";
    $data3 = mysqli_query($con,$query3);

    $query4 = "update gallery set username = '$username2' where username = '$username'";
    $data4 = mysqli_query($con,$query4);


    $query5 = "update feedback set username = '$username2' where username = '$username'";
    $data5 = mysqli_query($con,$query5);

    $query6 = "update post set username = '$username2' where username = '$username'";
    $data6 = mysqli_query($con,$query6);

    }
  }

  ?>