<?php
	session_start();
	if (!isset($_SESSION['adminname'])) {	
		header("Location: adminlogin.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		body {
			background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(pics & videos/107.png); 
		}
		.colorchange:hover {
			color: pink;
			cursor: pointer;
		}
		.changecolor:hover {
			color: skyblue;
			cursor: pointer;
		}
		a {
			text-decoration: none;
			color: black;
		}
		a:hover {
			color: white;
		}

	</style>
</head>
<body>

	<table width="100%" cellspacing="14">
		<tr>
			<td class="colorchange"><font size="5"><a href="rightadmin.php" target="right">DASHBOARD</a></font></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><a href="aabj2addwebsite.php" target="right">Add WEBSITE</a></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><font size="4">BLOG</font></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="blogadd.php" target="right">Add BLOG</a></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="blogdelete.php" target="right">Delete BLOG</a></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><font size="4"><a href="users.php" target="right">USERS</a></font></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="operations.php" target="right">Update/Delete USER</a></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="search.php" target="right">Search USER</a></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><font color="black"><font size="4"><a href="takefeedback.php" target="right">FEEDBACKS</a></font></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><font size="4">IMAGE GALLERY</font></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="addimage.php" target="right">Add Image</a></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="deleteimage.php" target="right">Delete Image</a></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><font size="4">VIDEO GALLERY</font></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="addvideo.php" target="right">Add Video</a></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="deletevideo.php" target="right">Delete Video</a></td>
		</tr>
		<tr>
			<td class="colorchange" bgcolor="green"><font size="4">A²BJ Images</font></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="aabj4uploadimages.php" target="right">Add Image</a></td>
		</tr>
		<tr>
			<td class="changecolor"><a href="aabj4deleteimages.php" target="right">Delete Images</a></td>
		</tr>
	</table>

</body>
</html>