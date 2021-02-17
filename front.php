<?php
error_reporting(0);
		session_start();
		include("db.php");
		

	session_start();
	if (!isset($_SESSION['username'])) {	
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>NANGAL</title>
	<link rel="stylesheet" type="text/css" href="css/front.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<div class="bgimg">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="container">
				<a href="#" class="navbar-brand logo">WELCOME <?php echo $_SESSION['username']?></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="navbar-toggler-icon">   </span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							
						<li class="nav-item">
							<a href="blog.php" class="nav-link">Blogs</a>
						</li>
						<li class="nav-item">
							<a href="chat1front.php" class="nav-link">CHAT</a>
						</li>        

						<li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" style="text-decoration: none;" href="#">Gallery<spanclass="caret"></span></a>
       						<ul class="dropdown-menu" style="background-color: grey">
       							<center>
       								<li class="nav-item"><a class="nav-link" href="images.php" style="color: white; text-decoration: none;" onMouseOver="this.style.color='orange'"
   onMouseOut="this.style.color='white'">Image Gallery</a></li>
       								
       								<li class="nav-item"><a class="nav-link" href="watchvideos.php" style="color: white; text-decoration: none;" onMouseOver="this.style.color='orange'"
   onMouseOut="this.style.color='white'">Video Gallery</a></li>
       							</center>
       						</ul>					
       					</li>


						<li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" style="text-decoration: none;" href="#">Post<spanclass="caret"></span></a>
       						<ul class="dropdown-menu" style="background-color: grey">
       							<center>
       								<li class="nav-item"><a class="nav-link" href="post1add.php" style="color: white; text-decoration: none;" onMouseOver="this.style.color='orange'"
   onMouseOut="this.style.color='white'">Add Post</a></li>
       								
       								<li class="nav-item"><a class="nav-link" href="post2show.php" style="color: white; text-decoration: none;" onMouseOver="this.style.color='orange'"
   onMouseOut="this.style.color='white'">View Posts</a></li>
       							</center>
       						</ul>					
       					</li>


						<li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" style="text-decoration: none;" href="#">Account<spanclass="caret"></span></a>
       						<ul class="dropdown-menu" style="background-color: grey">
       							<center>
       								<li class="nav-item"><a class="nav-link" href="profile.php" style="color: white; text-decoration: none;" onMouseOver="this.style.color='orange'"
   onMouseOut="this.style.color='white'">Create Profile</a></li>
       								
       								<li class="nav-item"><a class="nav-link" href="updateprofile.php" style="color: white; text-decoration: none;" onMouseOver="this.style.color='orange'"
   onMouseOut="this.style.color='white'">Update Profile</a></li>
       							</center>
       						</ul>					
       					</li>


						<li class="nav-item">
							<a href="logout.php" class="nav-link">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container text-center headerset">
			<h1>NANGAL</h1>
			<h2>The Beautiful Heaven</h2>
			<button onclick="window.location.href=' https://en.wikipedia.org/wiki/Nangal';" class="btn" style="background-color: orange; text-align: center; margin-left: 20px; padding: 6px 11px; "><a style="text-decoration: none; color: black;" onMouseOver="this.style.color='white'"
   onMouseOut="this.style.color='black'">Learn more!
			</button>
			<button class="btn" style="background-color: orange; text-align: center; margin-left: 20px; padding: 6px 11px; "><a style="text-decoration: none; color: black;" href="aabj1front.php" onMouseOver="this.style.color='white'"
   onMouseOut="this.style.color='black'"><b>Search&nbsp;<i class="fa fa-search"></i></b></a></button>
		</div>
			
	</div>

	<section class="places bg-light">
		<div class="container text-center">
			<h1>Places to Visit</h1>
			<p>In and near NANGAL...</p>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/Bhakra.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Bhakra Dam</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/3.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Gurudwara Bhabour Sahib</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/handola.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Handola Bridge</h2>
						</div>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/nangal wet lands.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Nangal Wet-Lands</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/takhat-sri-kesgarh-sahib-ji.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Takhat Sri Kesgarh Sahib</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/virasat-e-khalsa.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Virasat-E-Khalsa</h2>
						</div>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/satluj sadan.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Satluj Sadan</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/jalfa mata mandir.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Jalfa Mata Mandir</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/naina-devi-temple.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Naina Devi Mandir</h2>
						</div>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/10.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Nangal Dam</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/Raipur Maidan.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Raipur Maidan</h2>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="pics & videos/Nanaksar Gurudwara.jpg" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title">Nanaksar Gurudwara</h2>
						</div>
					</div>	
				</div>

		</div>
	</section>

	<section class="my-5">
        	<div class="w-50 m-auto">
        		<h2 class="text-center">Send us your feedback!</h2><br>
        		<form action="feedback.php" method="post">

    				<div class="form-group">
    					<label>Do you have any suggestions to improve our website?</label>
    					<textarea name="feedback" class="form-control"></textarea> 
    				</div>

    				<button type="submit" class="btn btn-success">SUBMIT</button>

        		</form>
        	</div>
    </section>

    <footer class="p-3 bg-dark text-white text-center" style="height: 100px">
    	<p>Copyright © 2020, Design by Abhii...</p>
    	<br>

    	<div style="margin-top: -40px;">

			<a href="#" style="margin-right: 13px"><font size="6px"><i class="fa fa-instagram" style="color: #ff0080; margin-top: 7px"></i></font></a>

			<a href="#" style="margin-right: 13px"><font size="6px"><i class="fa fa-facebook"></i></font></a>

			<a href="#" style="margin-right: 13px"><font size="6px"><i class="fa fa-envelope" style="color: #ff3300"></i></font></a>

			<a href="#" style="margin-right: 13px"><font size="6px"><i class="fa fa-twitter" style="color: #0066cc"></i></font></a>

			<a href="#" style="margin-right: 13px"><font size="6px"><i class="fa fa-snapchat-ghost" style="color: yellow"></i></font></a>

			<a href="#" style="margin-right: 13px"><font size="6px"><i class="fa fa-linkedin"></i></font></a>

        </div>
        

    </footer>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>