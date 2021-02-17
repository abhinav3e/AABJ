<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }

  
?>


<!DOCTYPE html>
<html>
<head>
  <title>POSTS</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
-->
<style>

html {
   background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/511.jpg');
   background-size: cover;
   background-position: center;
   background-attachment: fixed;
}

.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
}

#a3 {
  background-color: orange;
  margin-left: 10px;
  padding: 5px 12px;
  border-radius: 7px;
}
#a4 {
  background-color: orange;
  margin-left: 15px;
  padding: 5px 9px;
  border-radius: 7px;
}
#a5 {
  background-color: orange;
  margin-left: 15px;
  padding: 5px 9px;
  border-radius: 7px;
}
#a6 {
  background-color: orange;
  margin-left: 15px;
  padding: 5px 9px;
  border-radius: 7px;
}

.topnav a:hover {
  color: white;
}


h2 {
  text-align:center;
  margin: 10px 0px 15px 0px;
  color: white;
}

.card {
  padding-top: 2px;
  background: rgba(0,0,0,0.6);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
  width: 500px;
  margin: auto;
  margin-bottom: 40px;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.a1 {

  margin: 20px;
  color: white;
  background-color: green;
  padding: 10px 15px;
  border-radius: 7px;
  text-decoration: none;
}
.a2 {
  margin: 20px;
  color: white;
  background-color: red;
  padding: 10px 15px;
  border-radius: 7px;
  text-decoration: none;
}

</style>

</head>
<body>-

<div class="topnav">
  <a id="a3" href="front.php">Home</a>
  <a id="a4" href="post1add.php">Add Post</a>
  <a id="a5" href="images.php">Gallery</a>
  <a id="a6" href="chat1front.php">Chat</a>
</div>
<h2>POSTS</h2>



<?php 
  include("db.php");

$sql1 = "select * from post order by id desc";
$result1 = mysqli_query($con,$sql1);
$total1 = mysqli_num_rows($result1);

if ($total1 > 0) {



  while($row = mysqli_fetch_assoc($result1))
  {
    
?>
<div class="card">

    <p class="title" style="padding-top: 5px; margin-left: 7px;">&nbsp <font size="5px" color="white"><i class="fa fa-user"></i></font><b> &nbspUsername: <?php echo $row['username']; ?></b></p>
    <a href="post/<?php echo $row['filename']; ?>" target="_blank"><img style="margin-left: 74px;" src="post/<?php echo $row['filename']; ?>" width=350 height=200px></a>
    <br>

    <div style="margin: 25px; text-align: center;">
      <a href="javascript:void(0)" class="a1"><i class="fa fa-thumbs-up"></i>
        <span onclick="likes_count('<?php echo $row['id'] ?>')"><input type="radio" name="radio"><label>Like</label> (<span id="likes_<?php echo $row['id'] ?>"><?php echo $row['likes'] ?></span>)</span>
      </a>

      <a href="javascript:void(0)" class="a2"><i class="fa fa-thumbs-down"></i>
        <span onclick="dislikes_count('<?php echo $row['id'] ?>')"><input type="radio" name="radio"><label>Dislike</label> (<span id="dislikes_<?php echo $row['id'] ?>"><?php echo $row['dislikes'] ?></span>)</span>
      </a>
    </div>

      <p style="padding-top: 5px; padding-bottom: 20px; margin-bottom: 30px; margin-left: 7px; "><font color="orange">Caption:</font> <font color="white"><?php echo $row['caption']; ?></font></p><br><hr>
<?php
  }
}
?>
</div>

<script>
  
  function likes_count(id) {

    jQuery.ajax({
      url: 'update_count.php',
      type: 'post',
      data: 'type=likes&id='+id,
      success: function(result) {

        var cur_count = jQuery('#likes_'+id).html ();
        cur_count++;
        jQuery('#likes_'+id).html(cur_count);

      }
    });
  }

function dislikes_count(id) {

    jQuery.ajax({
      url: 'update_count.php',
      type: 'post',
      data: 'type=dislikes&id='+id,
      success: function(result) {
       
        var cur_count = jQuery('#dislikes_'+id).html ();
        cur_count++;
        jQuery('#dislikes_'+id).html(cur_count);

      }
    });
  }

</script>

</body>
</html>






