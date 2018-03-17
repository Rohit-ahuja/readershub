<?php
	session_start();
	include "connect.php";
	if(isset($_POST['next'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$name = $_POST['first_name'];
		$pass = md5($pass);
		$q1 = "insert into login values('$name','$email','$pass')";
		$res = mysqli_query($con,$q1);
		echo "Register Success";
	}
?>
		