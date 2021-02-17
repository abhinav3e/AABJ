<?php 
  

$localhost = "localhost";
$root = "root";
$pass = "";
$nangal = "nangal";

$con = mysqli_connect($localhost ,$root, $pass, $nangal);

if($con){
  echo "";
}else{
  echo "no connection";
}

if (isset($_POST['adminname']) || isset($_POST['adminpass'])) {
  

$adminname = $_POST['adminname'];
$adminpass = $_POST['adminpass'];
 

}

if(isset($_POST['Signin']))
{
  echo "";
  $query = "select * from admin_login where adminname = '$adminname' and adminpass = '$adminpass'";
  
  $result = mysqli_query($con,$query);

  if(mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['adminname'] = $adminname;   
    header("Location: admin.php");
  }
  else{
    echo "<script>alert('Wrong Credentials!!...Only admin can access..');</script>";
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
      background: url(profile.jpg);
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

  </style>

</head>

<body>
  <form class="box" method="POST">
    <h1>LOGIN</h1>
    <input type="text" name="adminname" placeholder="Enter Username">
    
    <input type="password" name="adminpass" placeholder="Enter Password">
    
    <button type="submit" name="Signin" class="btn btn-primary">Log In</button>
     
    
  </form> 
</body>
</html>