<?php 
error_reporting(0);
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST" ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
        $query = "select * from users where username = '$username' and password = '$password' limit 1";

        $result = mysqli_query($con, $query);

        if($result) {
          if(mysqli_num_rows($result) > 0)
              {
                session_start();
                $_SESSION['username'] = $username;   
                header("Location: front.php");
              }
              else{
                echo "<script>alert('Wrong Credentials!!. Enter correct username & Password.');</script>";
              } 
          }
    }
    else{
        echo "<script>alert('Please enter Username and Password.');</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign Up...</title>
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
      color: white;
      text-transform: uppercase;
      font-weight: 700;
    }
    .box input[type="text"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid blue;
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
      border: 2px solid blue;
      padding: 9px 9px;
      width: 250px;
      outline: none;
      color: white;
      border-radius: 24px;
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
    .box button[type="submit"]:hover{
      background: green; 
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
    .box input[type="submit"]:hover{
      background: green;
    }
a{
  color: orange;
}
a:hover{
  text-decoration: none;
  color:lightgreen;
}


@media (min-width: 1201px) {
body{
      height: 100vh;
    }
}

@media (max-width: 1200px) {
body{
      height: 100vh;
    }
    
}

@media (max-width: 990px) {
body{
      height: 100vh;
    }
    .box {
      margin-top: 30%;
    }
}
}


  </style>

</head>

<body>
  <form class="box" method="POST">
    <h1>LOGIN</h1>
    <input type="text" name="username" placeholder="Enter Username">
    
    <input type="password" name="password" placeholder="Enter Password">
    
    <button type="submit" name="signin" class="btn btn-primary">Log In</button><br>
    <p style="color: white;"><pre style="color: white">Don't have an account? <b><a href="signup.php">Signup.</a></b></pre></p>
    
  </form>
</body>
</html>