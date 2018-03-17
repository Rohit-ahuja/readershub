<?php
$con=mysqli_connect('localhost','root','','readershub');
if($con){
	mysqli_select_db($con,"readershub");
}
else
	echo "NO conn";
?>