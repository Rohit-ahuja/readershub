<?php
	session_start();
	include "connect.php";
	if(isset($_POST['next'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$name = $_POST['first_name'];
		$pass = md5($pass);
		$id;
		$q1 = "select count(*) from login";
		$res = mysqli_query($con, $q1);
		$res = mysqli_fetch_assoc($res);
		$id = 10000 + $res['count(*)'];
		echo $id;
		$q1 = "insert into login values('$name','$email','$pass',$id)";
		$res = mysqli_query($con, $q1);
		echo "Register Success";
		header("Location:index.php");
	}
?>
		