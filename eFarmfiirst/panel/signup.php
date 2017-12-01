<?php
	include 'conn.php';
	
	$first=$_POST['first'];
	$last=$_POST['last'];
	$username=$_POST['username'];
	$passwd= md5($_POST['password']);
	
	$sql= "INSERT into users (first,last,username,password) VALUES ('$first','$last','$username','$passwd')";
	$result = $mysqli->query($sql);

	
?>