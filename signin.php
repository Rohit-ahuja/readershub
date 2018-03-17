<?php
session_start();
include "connect.php";
echo "hello1";
if(isset($_POST['signin']))
{
	echo "hello2";
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$pass=md5($pass);
	$q1="select * from login";
	$result=mysqli_query($con,$q1);
	echo "hello3";
	while($row=mysqli_fetch_assoc($result))
	{
		echo "hello4";
		$umail=$row['email'];
		$upass=$row['password'];
		$id=$row['id'];
		$_SESSION['id']=$id;
		if(($email==$umail)&&($pass==$upass))
		{
			echo "hello5";
			header("Location:success.php");
			break;
		}
		else
		{
			echo "hello6";
			header("Location:index.php");
			echo "hello7";
		}
	}
}
?>