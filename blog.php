<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }

  include("db.php");  
?>

<!DOCTYPE html>
<html>
<head>
  <title>BLOGS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {
  background-color: lightgrey;
  margin: 0;
  font-family: Arial;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: orange;
  color: white;
}

* {
  box-sizing: border-box;
}

.header {
  color: black;
  padding: 0.1px;
  font-size: 20px;
  text-align: center;
  background: lightgrey;
}

.leftcolumn {   
  float: left;
  width: 100%;
}

.card {
   background-color: white;
   padding: 15px;
   margin-top: 0px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 531px; 
  height: 300px;
}


@media (min-width: 1200px) {

}

@media (max-width: 990px) {

}

@media (max-width: 800px) {
  
}

@media (max-width: 600px) {
  .center {
    width: 270px;
    height: 200px
  }
}

@media (max-width: 480px) {
  .center {
    width: 270px;
    height: 200px
  }
}
@media (max-width: 324px) {
  .center {
    width: 200px;
    height: 150px
  }
  .topnav a {
    font-size: 15px;
  }
}


</style>
</head>
<body>
  <div class="topnav">
      <a class="active" href="front.php">Home</a>
      <a href="chat1front.php">Chat</a>
      <a href="watchvideos.php">Videos</a>
      <a href="account.php">Account</a>
  </div>
  <section>
<div class="header">
  <h2>BLOGS</h2>
</div>

<?php 

  $query = "select * from blog;";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);



  if ($total != 0) {
    while ($result = mysqli_fetch_array($data)) {
      $title = $result['title'];
      $date =$result['date'];
      $content =$result['content'];
      $file = $result['file'];
    
?>  


<div class="leftcolumn">
    <div class="card">
      <h2 style="text-align: center;"><?php echo $title; ?></h2>
      
        <div class="img">
        <?php echo "
      <a target='_blank' href='$file'>
        <img src='$file' class='center'>
      </a>
      ";
?>   
        </div>
    
        <p style="text-align: justify;"><?php echo $content; ?><br><h6 style="float: right;">Written by ADMIN on<?php echo " $date"; ?></h6></p>
    </div>
</div>

<?php 
    }
  }
?>
  </section>

    <footer>
      <p style="text-align: center;">
        Copyright © 2020, Design by Admin..
    <br>
    
    </p>

    </footer>

</body>
</html>



