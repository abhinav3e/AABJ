<?php 
error_reporting(0);  

include("db.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Change Admin Password</title>
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
  <form class="box" method="POST">
    <h1>CHANGE PASSWORD</h1>
    <input type="text" name="adminname" placeholder="Enter Username" required>
    
    <input type="password" name="adminpass" placeholder="Enter New Password" required>
    
    <input type="submit" name="submit" id="button" value="Change Password">
     
    
  </form> 
</body>
</html>

<?php 
  
  if ($_POST['submit']) {

    $adminname = $_POST['adminname'];
    $adminpass = $_POST['adminpass'];

    $query = "update admin_login set adminpass = '$adminpass' where adminname = '$adminname'";
    $data = mysqli_query($con,$query);

    if ($data) {
      echo "<script>alert('PASSWORD CHANGED')</script>";
    }
    else {
      echo "<script>alert('PASSWORD NOT CHANGED')</script>";
    }
  }

  ?>