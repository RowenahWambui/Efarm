<?php
require_once "conn.php";
if(isset($_POST["disease_dtails"])){
	// Variable declaration
	
	$regionid = htmlspecialchars($_POST["regionid"]);
	$disease_name = htmlspecialchars($_POST["disease_name"]);
	
	
	
	//Query inserting data into the variety table
	$sql = "INSERT INTO cropdiseases(regionid,disease_name)VALUE ('$regionid','$disease_name')";

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