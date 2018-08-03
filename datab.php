<?php
	require 'db.php';
	if(isset($_POST['submit'])){
		$Fullname = $_POST['user_name'];
		$Gender = $_POST['user_gender'];
		$Dob = $_POST['user_dob'];
		$Address = $_POST['user_address'];
		$Email = $_POST['user_email'];
		$Course = $_POST['user_coursename'];
		$Mobileno = $_POST['user_mobileno'];
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		$sql = $connection->query("INSERT INTO user_info (user_name,user_gender,user_dob,user_address,user_email,user_coursename,user_mobileno,username,password) VALUES ('{$Fullname}','{$Gender}','{$Dob}', '{$Address}','{$Email}','{$Course}','{$Mobileno}','{$Username}','{$Password}')");

		echo "You have successfully Signed Up.";
		
	}
?>