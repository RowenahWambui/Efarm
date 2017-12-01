<?php
	include 'conn.php';
	$username=$_POST['username'];
	$passwd=md5($_POST['password']);
	$sql= "SELECT *FROM users WHERE username='$username' AND password='$passwd'";
	$result = $mysqli->query($sql);
	
	if(!$row=$result->fetch_assoc()){
		echo "Password is incorrect";
                
	}
	else{
		$_SESSION['id']= $row['id'];
		//echo "WELCOME";
		header("Location: side.php");
	}