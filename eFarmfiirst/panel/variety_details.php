<?php
require_once "conn.php";
if(isset($_POST["variety_details"])){
	// Variable declaration
	
	$region_id = htmlspecialchars($_POST["region_id"]);
	$seedling_id = htmlspecialchars($_POST["seedling_id"]);
	$variety_name = htmlspecialchars($_POST["variety_name"]);
	
	
	
	//Query inserting data into the variety table
	$sql = "INSERT INTO variety (region_id,seedling_id,	variety_name)VALUE ('$region_id','$seedling_id','$variety_name')";

	//Query to verify new record was created successfully in the variety table
	if ($mysqli->query($sql) === TRUE) {
		// echo "New record created successfully";
		@header("Location: side.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
	?>