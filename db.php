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
?>

