<?php  
  session_start();
  if (!isset($_SESSION['username'])) {  
    header("Location: login.php");
  }
  error_reporting(0);

   include("db.php");  

# ----------------When submit is CLICKED--------------- 


if(isset($_POST['submit']))
{
	$username = $_SESSION['username'];
	$imgcount = count($_FILES['uploadfile']['name']);
	for ($i=0; $i < $imgcount; $i++) { 

		$filename = $_FILES['uploadfile']['name'][$i];
		$tempname = $_FILES['uploadfile']['tmp_name'][$i];
		$folder = "gallery/".$filename;

		if(move_uploaded_file($tempname, $folder))
		{
			$query = "insert into gallery(username, picsource) values('$username', '$filename')";
			$data = mysqli_query($con,$query);	
		}
	}

	if ($data) {
		echo '<script>alert("Image Uploaded")</script>';
	}
}

?>


<html>
	<head>
		<title>IMAGE GALLERY</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
		
		<style>

			.button{
				size: 10px;
				border: 2px solid grey;
			    padding: 30px,50px;
			    color: white;
			    text-decoration: none;
			    transition: 0.6s ease;
				position: absolute;
				bottom: 30px;
				right: 20px;
			}

			.button:hover{
				background-color: white;
				color: black;
			}		



input[type=submit] {
  background-color: green;
  border-radius: 13px;
  color: white;
  padding: 7px 15px;
  text-decoration: none;
  cursor: pointer;
}

input[type=file] {
	cursor: pointer;
	background: grey;
	border-radius: 7px;
	color: black;
	padding: 7px 13px;
	text-align: center;
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
  background-color: #4CAF50;
  color: white;
}

body{
	margin: 0;
}
.design{
	margin: auto; 
	margin-top: 10px;
	width: 80%;
	padding: 10px 15px; 
}

	.container .heading{
			font-size: 35px;
			margin: 3px;
			color: white;
			text-align: center;
		}
		.imgscontainer{
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.imgscontainer .imgs{
			height: 130px;
			width: 160px;
			margin: 32px;
			overflow: hidden;
			border-radius: 1rem;
		}
		.imgscontainer .imgs img{
			height: 100%;
			width: 100%;
			cursor: pointer;
			object-fit: cover;
		}
		.imgscontainer .imgs img:hover{
			transition: .2s linear;
			transform: scale(1.3);
		}

		.fa {
			position: absolute;
			margin-top: 29px;
			margin-left: 175px;		
		}

		#a1 {
			color: white;
			font-size: 20px;
		}


</style>


<body>



<section style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('pics & videos/111.jpg'); background-attachment: fixed; background-size: cover; margin: 0px; padding: 0px">
	<div class="topnav">
  <a class="active" href="front.php">Home</a>
  <a href="chat1front.php">Chat</a>
  <a href="account.php">Account</a>
  <a href="watchvideos.php">Videos</a>
</div>
	<div class="container">
			<div class="heading">
				IMAGE GALLERY
			</div>
			<div class="imgscontainer">
				<div class="imgs">
					<a href="pics & videos/2.jpg" target="_blank">
					<img src="pics & videos/2.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/3.jpg" target="_blank">
					<img src="pics & videos/3.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/4.jpg" target="_blank">
					<img src="pics & videos/4.jpg"></a>
				</div>
				<div class="imgs">
					<a href="5.jpg" target="_blank">
					<img src="5.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/6.jpg" target="_blank">
					<img src="pics & videos/6.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/8.jpg" target="_blank">
					<img src="pics & videos/8.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/9.jpg" target="_blank">
					<img src="pics & videos/9.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/10.jpg" target="_blank">
					<img src="pics & videos/10.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/virasat-e-khalsa.jpg" target="_blank">
					<img src="pics & videos/virasat-e-khalsa.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/takhat-sri-kesgarh-sahib-ji.jpg" target="_blank">
					<img src="pics & videos/takhat-sri-kesgarh-sahib-ji.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/nangal wet lands.jpg" target="_blank">
					<img src="pics & videos/nangal wet lands.jpg"></a>
				</div>
				<div class="imgs">
					<a href="pics & videos/Nanaksar Gurudwara.jpg" target="_blank">
					<img src="pics & videos/Nanaksar Gurudwara.jpg"></a>
				</div>


			</div>
		</div>






<?php
	
			$query1 = "select * from adminimgs";
			$data1 = mysqli_query($con,$query1);
			$total = mysqli_num_rows($data1);

			if($total > 0)
			{
				while($result = mysqli_fetch_assoc($data1))
				{
?>	
					<a href="adminimgs/<?php echo $result['file_source']; ?>" target="_blank"><img onMouseOver="this.style.transition='.3s linear'; this.style.transform='scale(1.1)'" onMouseOut="this.style.transform='none'" style="margin-left: 70px; margin-top: 50px; margin-bottom: 30px; border-radius: 10px" src="adminimgs/<?php echo $result['file_source']; ?>" width=160 height=130 ></a>
<?php

		}
	}	
?>

</section>		

					

	<section>
		<h1 style="text-align: center; color: black;">Upload More Images</h1>
		<form method="post" action="images.php" enctype="multipart/form-data" onsubmit="return validation()" style="text-align: center;">
		<div>
			<input type="file" name="uploadfile[]" id="uploadfile" multiple><br>
			<span id="file_error" class="text-danger font-weight-bold"></span>
		</div>	
		<div>
			<input type="submit" name="submit" value="Upload">
		</div>
		</form>
	</section>

	<section style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('112.jfif'); background-attachment: fixed; background-size: cover;">

			<div class="design">
<?php
			$username = $_SESSION['username'];
			
			$query1 = "select * from gallery where username = '$username'";
			$data1 = mysqli_query($con,$query1);
			$total = mysqli_num_rows($data1);

			if($total > 0)
			{
				while($result = mysqli_fetch_assoc($data1))
				{		
?>
					<a id="a1" href="userdeleteimg.php?id=<?php echo $result['id']; ?>"><i class="fa fa-times-circle"></i></a>
					<a href="gallery/<?php echo $result['picsource']; ?>" target="_blank"><img onMouseOver="this.style.transition='.3s linear'; this.style.transform='scale(1.1)'" onMouseOut="this.style.transform='none'" style= "margin:auto; margin-right: 30px; margin-left: 30px; margin-top: 50px; margin-bottom: 30px; border-radius: 10px;" src="gallery/<?php echo $result['picsource']; ?>" width=158 height=150></a>
<?php

		}
	}
		
?>
 </div>


	</section>


<script type="text/javascript">
	function validation() {
		var formdata = new FormData();
		var uploadfile = document.getElementById('uploadfile').files[0];
		formdata.append("FileData", uploadfile);
		var ext = uploadfile.type.split('/').pop().toLowerCase();

		if (ext != "jpeg" && ext != "jpg" && ext != "png") {
			document.getElementById('file_error').innerHTML="xxx";
		return false;		
	}
		return true;
	}
</script>

	

	</body>

</html>




