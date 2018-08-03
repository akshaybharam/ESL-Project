<?php
require 'db.php';
session_start();
	if (isset($_POST['Login'])) {
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		
		$result = $connection->query("select * from user_info where username = '$Username' AND password='$Password'");
		$row = $result->fetch_assoc();


		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];

		/*if ($row['username']==$Username && $row['password']==$Password) {
			$name=$row['username'];
			$_SESSION['username']=$name;
		} else {
			echo "Invalid Credentials";
		}*/
		
	
		header("Location:account.php");
		//unset($_SESSION['username']);
		//session_destroy();
		//header("Location:home.php");
	}
?>


