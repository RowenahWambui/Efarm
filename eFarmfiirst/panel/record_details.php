<?php
require_once "conn.php";

if(isset($_POST["record_details"])){
	// Variable declaration
	$seedling_name = htmlspecialchars($_POST["seedling_name"]);
	
	
	//Query inserting data into the seeds table
	$sql = "INSERT INTO cropseedlings (seedling_name)VALUE ('$seedling_name')";

	//Query to verify new record was created successfully in the blog_articles table
	if ($mysqli->query($sql) === TRUE) {
		// echo "New record created successfully";
		@header("Location: side.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
?>