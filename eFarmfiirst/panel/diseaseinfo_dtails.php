<?php
require_once "conn.php";
if(isset($_POST["diseaseinfo_dtails"])){
	// Variable declaration
	
	$diseaseid= htmlspecialchars($_POST["diseaseid"]);
	$textinfo = htmlspecialchars($_POST["textinfo"]);
	
	
	
	//Query inserting data into the variety table
	$sql = "INSERT INTO disease_info(diseaseid,textinfo)VALUE ('$diseaseid','$textinfo')";

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